# Phase L — Link pass. Sonnet. Sequential, after every lane-2 PR is merged.
Read: `plan.md` §1, §4, §9, the phase table, every `docs/log/s*.md`, `docs/decisions-needed.md`.
Owns: cross-links in every content file (`related[]`, `planned:` removal), `content/nav.php`,
hub cards, `KNOWN-ISSUES.md`, `docs/facts-to-verify.md` consolidation, `sitemap` sanity,
`docs/log/link-pass.md`, `README.md` (deploy + editing how-to for Anton).
Rules: resolve every `planned:` reference to a real slug or drop it; every article links its
hub + ≥ 2 related, every week ≥ 1 article, every hub ≥ 5 children (verify enforces). Promote
still-open cross-phase items from phase logs to `KNOWN-ISSUES.md`. Answer nothing in
`decisions-needed.md` — only list what is still open for Anton. Write `README.md`: how to add
a week/article/post (record + route file), how to deploy (hPanel Git), how to run verify.
Exit: verify green with zero `planned:`; sitemap lists every indexable URL once and no stub;
PR merged; delete the watcher Routine; closing report in the log: URLs by type, the §7 items
still owed, the app-side PR checklist from `docs/app-facts.md`.
