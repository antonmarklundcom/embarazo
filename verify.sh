#!/usr/bin/env bash
#
# The build gate. Runs on every PR (.github/workflows/verify.yml) and should be
# run locally before pushing:
#
#     ./verify.sh                 # check the repository
#     ./verify.sh --root dist/x   # check an unzipped deploy artifact
#
# It checks, in order:
#   1. php -l on every PHP file
#   2. the market modules: every one implements the same contract, and the one
#      this site selected formats money, validates a tax id and renders a date
#   3. every URL in the route contract answers with the status deploy/routes.php
#      says — that list is derived from the content arrays, so later phases
#      extend the smoke test by adding content
#   4. no page renders a PHP warning
#   5. every page has a title and a description, both unique site-wide, with the
#      title under 60 characters
#   8. referential integrity across the content arrays: every slug a record
#      points at exists
#
set -uo pipefail

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
SITE_ROOT="$ROOT"
FINAL=0
PORT="${VERIFY_PORT:-8730}"

while [ $# -gt 0 ]; do
  case "$1" in
    --final) FINAL=1; shift ;;
    --root) SITE_ROOT="$(cd "$2" && pwd)"; shift 2 ;;
    --port) PORT="$2"; shift 2 ;;
    *) echo "unknown argument: $1" >&2; exit 2 ;;
  esac
done

BASE="http://127.0.0.1:${PORT}"
LOG="$(mktemp)"
FAILURES=0

red()   { printf '\033[31m%s\033[0m\n' "$*"; }
green() { printf '\033[32m%s\033[0m\n' "$*"; }
step()  { printf '\n\033[1m== %s\033[0m\n' "$*"; }
fail()  { red "  FAIL  $*"; FAILURES=$((FAILURES + 1)); }
ok()    { printf '  ok    %s\n' "$*"; }

cleanup() {
  [ -n "${SERVER_PID:-}" ] && kill "$SERVER_PID" 2>/dev/null
  rm -f "$LOG"
}
trap cleanup EXIT

# ---------------------------------------------------------------- 1. php -l --
step "php -l"
LINT_FAILED=0
while IFS= read -r file; do
  if ! out=$(php -l "$file" 2>&1); then
    fail "$file"; echo "$out" | sed 's/^/        /'
    LINT_FAILED=1
  fi
done < <(find "$SITE_ROOT" -name '*.php' -not -path '*/tests/node_modules/*' -not -path '*/dist/*' | sort)
[ "$LINT_FAILED" -eq 0 ] && ok "all PHP files parse"

# -------------------------------------------------------------- CSS sanity --
step "CSS sanity"
if ! node "$ROOT/tests/css-sanity.mjs" "$SITE_ROOT/assets/css/site.css"; then
  fail "CSS sanity"
fi

# ---------------------------------------------------------- 2. market module --
step "market module"
market_out=$(php -r '
require "'"$SITE_ROOT"'/lib/bootstrap.php";
$fail = 0;
$say  = function (string $m) use (&$fail) { echo $m, "\n"; $fail = 1; };

/* Every module implements the same contract, or a template written against one
   market breaks the day a site picks the other. */
$contract = [
    "market_id", "market_locale", "market_currency", "market_country",
    "fmt_money", "validate_tax_id", "tax_id_check_digit", "fmt_date_long",
    "market_vat_rates", "market_table", "market_last_reviewed",
];
foreach ($contract as $fn) {
    function_exists($fn) || $say("the market module does not define {$fn}()");
}

foreach (glob(ROOT_DIR . "/lib/market/*.php") as $file) {
    $src = (string) file_get_contents($file);
    foreach ($contract as $fn) {
        str_contains($src, "function {$fn}(")
            || $say(basename($file) . " does not define {$fn}()");
    }
    is_file(ROOT_DIR . "/assets/js/market/" . basename($file, ".php") . ".js")
        || $say(basename($file) . " has no assets/js/market counterpart");
}

/* The selected market actually works. */
fmt_money(1500000) !== "" || $say("fmt_money() returned an empty string");
str_contains(fmt_date_long("2026-09-04"), "2026") || $say("fmt_date_long() lost the year");
market_currency() !== "" || $say("market_currency() is empty");

/* Tax-id validation is not a no-op in either direction. */
$valid = ["py" => "44444401-7", "se" => "556016-0680"];
$id = $valid[market_id()] ?? null;
if ($id !== null) {
    validate_tax_id($id) || $say("validate_tax_id() rejected the known-good id {$id}");
    validate_tax_id(substr($id, 0, -1) . (((int) substr($id, -1) + 1) % 10))
        && $say("validate_tax_id() accepted a bad check digit");
}
exit($fail);
' 2>&1)
if [ -z "$market_out" ]; then
  ok "every lib/market/*.php implements the contract; the selected one works"
else
  fail "market module"; echo "$market_out" | sed 's/^/        /'
fi

# ------------------------------------------------------------- 3. boot server --
step "server"
if ! command -v php >/dev/null; then red "php not found"; exit 2; fi
php -S "127.0.0.1:${PORT}" -t "$SITE_ROOT" "$SITE_ROOT/router.php" >"$LOG" 2>&1 &
SERVER_PID=$!

for _ in $(seq 1 40); do
  curl -s -o /dev/null "$BASE/" && break
  sleep 0.25
done
if ! curl -s -o /dev/null "$BASE/"; then
  red "server failed to start"; cat "$LOG"; exit 2
fi
ok "php -S on port $PORT (root: $SITE_ROOT)"

# --------------------------------------------------------------- 4. routes ----
step "routes"
ROUTE_LIST=$(php "$ROOT/deploy/routes.php" "$SITE_ROOT")
ROUTE_COUNT=0

while IFS=$'\t' read -r path expected flag; do
  [ -z "$path" ] && continue
  actual=$(curl -s -o /dev/null -w '%{http_code}' "${BASE}${path}")
  ROUTE_COUNT=$((ROUTE_COUNT + 1))
  if [ "$actual" != "$expected" ]; then
    fail "$path — expected $expected, got $actual"
  fi
done <<< "$ROUTE_LIST"
ok "$ROUTE_COUNT URLs answered as specified"

# --------------------------------------------------- 5. no PHP warnings -------
step "php warnings"
if grep -qE 'PHP (Warning|Notice|Fatal error|Parse error|Deprecated)' "$LOG"; then
  fail "pages emitted PHP diagnostics"
  grep -E 'PHP (Warning|Notice|Fatal error|Parse error|Deprecated)' "$LOG" | sort -u | head -20 | sed 's/^/        /'
else
  ok "no warnings, notices or deprecations while rendering"
fi

# --------------------------------------------- 6. unique title + description --
step "metadata"
META=$(mktemp)
while IFS=$'\t' read -r path expected flag; do
  [ "$expected" = "200" ] || continue
  case "$path" in /robots.txt|/sitemap.xml) continue ;; esac

  html=$(curl -s "${BASE}${path}")
  title=$(printf '%s' "$html" | grep -oP '(?<=<title>).*?(?=</title>)' | head -1)
  desc=$(printf '%s' "$html" | grep -oP '<meta name="description" content="\K[^"]*' | head -1)

  [ -z "$title" ] && fail "$path — empty <title>"
  [ -z "$desc" ]  && fail "$path — empty meta description"

  if [ "$flag" = stub ] && ! printf '%s' "$html" | grep -q '<meta name="robots" content="noindex, follow">'; then
    fail "$path - stub is not noindex"
  fi

  len=${#title}
  if [ "$len" -gt 60 ]; then
    fail "$path — <title> is $len chars, over the 60-char budget: $title"
  fi

  printf 'T\t%s\t%s\n' "$title" "$path" >> "$META"
  printf 'D\t%s\t%s\n' "$desc" "$path" >> "$META"
done <<< "$ROUTE_LIST"

dupes=$(cut -f1,2 "$META" | sort | uniq -d)
if [ -n "$dupes" ]; then
  while IFS=$'\t' read -r kind value; do
    [ -z "$value" ] && continue
    where=$(awk -F'\t' -v k="$kind" -v v="$value" '$1==k && $2==v {printf "%s ", $3}' "$META")
    fail "duplicate $([ "$kind" = T ] && echo title || echo description): \"$value\" on: $where"
  done <<< "$dupes"
else
  ok "$(grep -c '^T' "$META") pages, every title and description unique and non-empty"
fi
rm -f "$META"

# ------------------------------------------ 9. content referential integrity --
# Every slug one content array points at must exist in the array that owns it.
# A dangling slug is silent at runtime — the related card, the guide box or the
# segment bundle simply does not render — so it is checked here instead.
#
# A site that wants the stricter internal-link rule ("every service links to at
# least one article and one guide") adds the two count() assertions below; the
# template ships without them so an early phase with no blog yet still passes.
step "content integrity"
links_out=$(php "$ROOT/deploy/routes.php" "$SITE_ROOT" --check-files 2>&1)
links_status=$?
if [ "$links_status" -eq 0 ]; then
  ok "every content record has its route file"
else
  fail "content integrity"
  echo "$links_out" | sed 's/^/        /'
fi

# ------------------------------------------------------ home trust strips ----
step "home trust strips"
home_strip_count=$(curl -fsS "$BASE/" | php -r '
$document = new DOMDocument();
libxml_use_internal_errors(true);
if (!$document->loadHTML(stream_get_contents(STDIN))) { exit(1); }
$xpath = new DOMXPath($document);
echo $xpath->query("//*[contains(concat(\" \", normalize-space(@class), \" \"), \" trust-strip \")]")->length;
' 2>&1)
if [ "$?" -ne 0 ] || [ "$home_strip_count" != 2 ]; then
  fail "home must have exactly 2 trust-strip elements; got: $home_strip_count"
else
  ok "home has exactly 2 trust-strip elements"
fi

# ---------------------------------------------------------- T1 foundation ----
step "foundation sources, links, HTML and JSON-LD"
AUDIT_DATA=$(mktemp)
php "$ROOT/deploy/routes.php" "$SITE_ROOT" --audit-data > "$AUDIT_DATA"
if ! node "$ROOT/tests/jsonld.mjs" "$BASE" --audit "$AUDIT_DATA" --root "$SITE_ROOT" $([ "$FINAL" -eq 1 ] && echo --final); then
  fail "foundation audit (details above)"
fi
rm -f "$AUDIT_DATA"

# ------------------------------------------------------------------ result ----
echo
if [ "$FAILURES" -eq 0 ]; then
  green "verify.sh: PASS"
  exit 0
fi
red "verify.sh: $FAILURES failure(s)"
exit 1
