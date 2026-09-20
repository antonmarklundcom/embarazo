# Worker / reviewer instructions (Codex and any non-Claude agent)

This repo is the static HTML + PHP marketing/SEO site for Mi Bebé (`embarazo.com.py`). It is
built in phases by Claude Code sessions from `plan.md` and `prompts/`. Codex reviews plans and
PRs; it implements only when a dispatch prompt names it.

- The spec is `plan.md`. `plan.md` §1 is locked; a review that disagrees with §1 writes the
  objection to `docs/decisions-needed.md` for Anton instead of changing it.
- Facts about the app come from `docs/app-facts.md`, never from memory. The app repo
  (`antonmarklundcom/embarazo.2.1`) is read-only context; never propose changes to it here.
- Content is data: copy lives in `content/*.php`, pages are three-line route files, templates
  and partials hold no copy. Key shapes in each content file's header comment are a contract.
- Locked files for lane-2 work: `lib/**`, `partials/**`, `templates/**`, the `:root` tokens
  block, `router.php`, `.htaccess`, `verify.sh`, `deploy/**`.
- No invented facts: laws, offices, prices and phone numbers appear only with a `sources[]`
  entry. No forms, no email capture, no pop-ups, no tracking beyond one cookieless script.
- Design previews (`design/preview/*.html`) are layout and voice references, NOT sources. Figures
  flagged F2-F11 in `docs/review-d0.md` are unverified. Two classes of fact:
  (A) LEGAL / ADMINISTRATIVE / PRODUCT facts: law numbers and thresholds, offices, prices, phone
  numbers, app or installation behaviour. These trace to `docs/app-facts.md` or a source you can
  name; otherwise hedge once ("consultá el monto vigente") and add a line to
  `docs/facts-to-verify.md`.
  (B) GENERAL CLINICAL EDUCATION (what happens in a pregnancy week, common symptoms, what a routine
  control or ultrasound is for, food and hygiene basics): write it concretely and helpfully, in
  conservative, widely accepted terms, with ranges and no promises, the way a careful health
  editor would. Cite the kind of source by name in `sources[]` (WHO / OMS, MSPBS, a named guideline)
  and log the page in `docs/facts-to-verify.md` as pending medical review. Never give doses,
  diagnoses or advice to delay care; alarm signs link to `/salud/senales-de-alarma`.
  Do NOT pad pages with meta-disclaimers ("esta página no clasifica...", "no fijamos aquí...").
  The visible disclaimer partial carries the caution; the body answers the question the reader
  typed, in the first 100 words. Thin, evasive, near-duplicate pages fail the audit.
  Never invent a source URL: workers have no network, so `sources[].url` is `null` unless it is an
  official URL you are certain of; `accessed` stays `null`. Never cite repo files (docs/, lib/) as
  a public source: sources[] is shown to readers.
- Workers have no network and cannot write `.git`. The manager runs every git command. Do not
  download anything.
- Gates before any report: `php -l` on touched files, `./verify.sh`, `./deploy/make-zip.sh`
  + `./verify.sh --root dist/<slug>-<date>`. Report PASS/FAIL per command, under 30 lines,
  no diffs.
- Never add a `.github/workflows/` file without Anton's explicit yes (`budgeted-runner-deploy`).
- Never name Fable/Mythos as the model for any phase, subagent, Routine or task.
