# Pregnancy-first website release — 12 October 2026

Release branch `codex/pregnancy-launch-20261011` is published in PR #31. Merge and deployment status are recorded separately in the owner manual; a merge does not prove live PHP deployment.
The matching app release must accompany the
Google-first website copy. Existing app email accounts keep their sign-in/recovery path;
new users are directed to Google. Google consent/client and both Hostinger credential keys are now configured; actual sign-in still needs acceptance. A working public support/privacy email remains an owner action.

The homepage now leads with the current pregnancy, the next prenatal control and local
guides. Its illustrative phone is labelled as an example. Generic actions no longer set
week 20; only an explicit week selection or a weekly page supplies a week. Contextual app
buttons preserve the intended prenatal summary, carné, rights, contractions or family task.
Calculator FUM/FPP dates remain in URL fragments, never in a server-visible query.

The website retains existing routes, canonicals and planning articles. The new
`/tramites/control-prenatal-paraguay/` guide covers USF/hospitals, MI IPS, practical appointment
questions and preparation for the control. Its MSPBS/IPS sources were accessed on
12 October 2026. The IPS appointment-confirmation reminder comes from its publication dated
19 March 2026. Professional reviewer fields remain null.

The owner confirmed Marklund Sales & Marketing AB as operator. It appears in site facts,
Organization structured data, the about FAQ and the privacy explanation; Mi Bebé remains
the product brand. No email address, medical credential, review approval or testimonial
was invented.

## Week contract and artwork

`tools/import-weeks.mjs` reads the app's `contracts/weeks.v1.json`. The importer updates only
size fields and changed-record dates, then verifies the entire PHP structure before writing.
It now handles Windows CRLF without reformatting prose and removes its temporary file
through Node instead of depending on a Unix `rm` command.

Comparison phrases in authored leads, metadata and FAQs were reconciled separately.
Clinical numbers, milestones and practical guidance were preserved. Weeks 1–3 do not use
a fruit. Later references use familiar fruits; repeated fruits are deliberate. From week
20 comparison is by approximate weight, separate from clinical length. The caption also
explains the change from head-to-rump to head-to-heels at week 20.

Twenty-two inconsistent image references were detached from week records. Existing asset
files and their URLs remain available; same-fruit illustrations were kept. Replacement
artwork was not generated. Medical review of the clinical averages remains pending.

## Validation and preview artifacts

Use the registered checkout `C:/dev/embarazo`; no new clone/dependency installation is needed.
PHP used here: `C:/dev/tools/php-8.3.35-validation/php.exe`. Git Bash is
`C:/Program Files/Git/bin/bash.exe`. Put process-only TMP/TEMP/TMPDIR on E for this task.
`verify.sh` now normalizes Git Bash paths for native Windows PHP.

```powershell
$env:PATH = 'C:/dev/tools/php-8.3.35-validation;' + $env:PATH
$env:TMPDIR = 'E:/ai work/Temp/embarazo-audit-2026-10-11'
$env:TMP = $env:TMPDIR
$env:TEMP = $env:TMPDIR
& 'C:/Program Files/Git/bin/bash.exe' verify.sh --port 8733
node --test tests/pregnancy.test.mjs
node tools/import-weeks.mjs 'E:/ai work/Projects/embarazo.2.1/worktrees/claude-embarazo.2.1/contracts/weeks.v1.json' --check
```

Git Bash and browser processes required execution outside the sandbox on this PC. This
changes neither global PATH/TEMP settings nor browser account sessions.

The source verifier passed 155 routes, 129 unique/indexable pages, 718 JSON-LD blocks,
5,957 internal links and 139 same-page fragments, with no orphans or PHP diagnostics.
All 10 pregnancy/date/export tests passed. The import freshness check matches all 42 weeks.
The existing week-29 fixture was updated to melón while asserting unchanged 38.6 cm/1,153 g.

Actual browser QA at 390 and 1440 px checked ten pages at each width, with no horizontal
overflow or JavaScript errors. It also checks explicit week selection/clear, FUM/FPP
fragment handoffs and all five practical prenatal questions. Visual review corrected
the home week-card column count and the guide's item record shape.

Artifacts are under `E:/ai work/Artifacts/embarazo/2026-10-12/`:

- `website-qa/`: actual page screenshots, browser QA script and `RESULTS.json`.
- `website-package/`: curated deployment stage.
- `embarazo-2026-10-12-reviewed.zip`: flat preview archive, 740 public files, about 13 MiB.

The `zip` utility required by `deploy/make-zip.sh` is unavailable on this PC. The preview
archive uses its shipping manifest with PowerShell copying and .NET ZipArchive instead.
It excludes docs, prompts, tests, deploy tools, Git metadata and private `config.php`, and
ships minified CSS as `site.css`. `verify.sh --root <stage>` passed; final copy-only changes
were followed by focused metadata/HTML/link checks. No upload or production deployment
was performed. See the dated external report for final checks and the ZIP hash.

## Remaining release work

Verify Google OAuth/profile/deep-link behavior against the matching app release on the same
staging domain. Confirm a support/privacy email, complete professional content review and
test with the intended users on real Android phones. Confirm Search Console ownership and
submit the existing sitemap after deployment. Analytics stays off until a real token is
configured; this release introduces no new tracking service or email capture.
