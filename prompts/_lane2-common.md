# Lane 2 common rules (every S-phase prompt includes this by reference)

Read ONLY: your prompt, `plan.md` §1, §4, your own §3/§6 sections, the phase table, §9,
`docs/app-facts.md`, and `docs/log/t1.md`. Execute under the autonomy protocol §4.

Hard limits: no edits to `lib/**`, `partials/**`, `templates/**`, the `:root` tokens block,
`router.php`, `.htaccess`, `verify.sh`, `deploy/**`, `content/*.php` key shapes, or any path
outside your Owns list. New CSS only in a `/* == <phase> == */` block appended to
`assets/css/site.css`. Cross-cutting wishes → one line in `docs/decisions-needed.md` under
`for the link pass`. Images → `docs/imagery-brief.md` slot + styled fallback (S9 only generates).

Quality bar: `plan.md` §4 A4.1–A4.3 and the page template in §6 for your page type. Every
record has unique `seoTitle` (≤ 60) and `metaDescription` (120–155), `sources[]` where
§2 requires it, `updated` set, `faq[]` filled, `related[]` pointing at slugs that exist or
are planned in `plan.md` §3 (the link pass fixes dangling planned ones; verify tolerates
`planned:` prefixes).

Same-shaped units ≥ 4: build the template exemplar first, then fan out the rest as parallel
Sonnet subagents (`fable-directs-sonnet-builds` §Fan-out), one verify, one PR.

Gate before the PR: `php -l` on every touched file; `./verify.sh` green; `./deploy/make-zip.sh`
then `./verify.sh --root dist/embarazo-<date>` green. One screenshot pass (≤ 5 pages × 2 widths)
from `tests/screenshots.mjs`, linked from the PR body, never committed.

Budget: one session, ≤ 90 min. Branch `phase/<id>` off latest main, WIP commit every 30 min.
When the exit criteria pass, open the PR that turn, merge when green, write `docs/log/<id>.md`
(≤ 12 Built / ≤ 8 Decisions / ≤ 8 Known issues + the verification line), add the §9 line.
Spawn nothing. Follow `prompts/_handoff.md`.
