# L — Link pass — 2026-09-20

## Built
- Validated product related paths in verify.sh without changing article/week/post slug rules or source records.
- Added dependency-free Node 24 crawler, always-fail in normal/final/staged verification.
- Activated 128 planned references in pages/weeks/blog; all resolve to existing articles; zero planned prefixes remain.
- Footer now exposes week hub, calculator, six guides, blog, app and installation, matching header coverage.
- Found/fixed one orphan: /app/comparacion/; added footer access and /app/ related data (product cards do not render yet).
- Broken HTTP links found/fixed: 0/0; no rich() target or public copy rewrite was needed.
- Crawled 113 pages and 4,780 internal hrefs (116 unique fetches); checked 115 same-page fragments, zero failures.
- Sitemap: exactly 112 unique indexable URLs, matching route contract; contact stub excluded; sitemap.php unchanged.
- URL totals: 112 indexable + 1 stub (/contacto/); 42 weeks, 43 articles, 6 posts, 2 tools, 11 hubs (6 clusters + week + 3 trimesters + blog), 8 indexable product/home pages.
- Maximum home click depth: 2; zero remaining indexable orphans, every page including contact reachable.
- Rewrote Spanish handbook; consolidated human tasks/known issues and grouped all 167 factual-review assertions without loss.
- Updated only section 9 build-log table; removed resolved P1 audit request, retained every open D0 decision for Anton.

## Decisions
- Product paths are checked against content records or existing route files, then omitted only from the audit copy passed to the slug checker.
- Crawler follows no redirects; only local single-slash hrefs and same-page fragments are checked; external/app/tel/mail links excluded.
- Sitemap membership, noindex exclusion, orphan detection and breadth-first depth are failing checks in every mode.
- Related data alone cannot fix product reachability with the current template, so footer provides the actual comparison link.
- Kept all article, cluster, trimester, sitemap, template and CSS files unchanged; read-only Git inspection only.
- New README examples follow runtime records; explicitly documented inactive analytics and contact integration instead of inventing configuration behavior.
- Public source validation, deployment, app-side work, commits/PR/merge and watcher management remain with Anton/manager.

## Known issues
- Before launch: medical/legal review, confirmed contact and visual/performance acceptance; detailed queue in KNOWN-ISSUES.md and docs/human-todo.md.
- Plan §7 still owed: WordPress backup/deploy, imagery environment/skill/assets, CI choice, analytics choice/integration, contact, reviewers, real screenshots, app PR and Search Console.
- App PR checklist: week/guide canonicals to site + remove from app sitemap; /conoce 301; NEXT_PUBLIC_SITE_URL; arrivals_from_site{page_type} with DECISIONS entry, only in launch week.
- Fonts/S9 images and named competitor comparison remain human work; no network, screenshots or Lighthouse claim.
- Metadata/template editorial debt and non-rendered product related cards retained within scope; see KNOWN-ISSUES.md.
- Fixture harness issues corrected: Windows ERR_UNSUPPORTED_ESM_URL_SCHEME needed a file URL; an ignored-host fixture hit fetch failed when verify stopped its server, then passed on a dedicated server.

Verification: PASS (exit 0) php -l on four touched PHP files; node tests/links.mjs http://127.0.0.1:8744 (dedicated server then stopped); bash ./verify.sh --port 8744; bash ./verify.sh --final --port 8744; SKIP_CSS_MINIFY=1 bash ./deploy/make-zip.sh (344K, 182 files); bash ./verify.sh --port 8744 --root dist/embarazo-2026-09-20. Both source modes and staged gate: zero FAIL lines, 123 contract routes, 628 JSON-LD blocks, 112 indexables. PASS path-audit fixtures and five crawler rejection fixtures plus ignored external/app/tel/mail fixture; content-only-related comparison, 167-assertion preservation, plan section-9 isolation, Node/Bash syntax. Closing git status --short and git diff --stat are read-only; no commit/PR/merge or deployment performed.
