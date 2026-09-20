# Phase T0 — Adopt the template. Sonnet session. Lane 1.

Read ONLY: this file, `plan.md` §1, §2 (the delete list), §4, §5.1, the phase table, §9,
`docs/app-facts.md`, `design/tokens.css`, `docs/design-decisions.md`. Load `php-site-template`.

Owns: everything (this is the import), then the files §5.1 names. Budget ≤ 30 min.

Steps:
1. Branch `phase/t0` off main. `git remote add template https://github.com/antonmarklundcom/php-site-template.git && git fetch template && git merge template/main --allow-unrelated-histories` (keep this repo's `plan.md`, `prompts/`, `docs/`, `design/` on conflict; take the template's `prompts/_handoff.md`, `_watcher.md`, `_lane2-phase.template.md`).
2. `./verify.sh` must PASS before any edit.
3. README T0 steps 4–6, 12–16 adapted per `plan.md` §5.1: `content/site.php` (name Mi Bebé, domain embarazo.com.py, slug embarazo, market py, schemaType ['Organization'], contacts null, `analytics` null unless §7 item 6 is answered in `docs/decisions-needed.md`), `content/ui.php` (voseo), `content/nav.php` (Semana a semana · Calculadora · Guías → 6 clusters · Blog · La app · Instalar), `content/pages.php` with a `stub => true` record for every §3.1 URL and the six cluster hubs, `/semana`, `/trimestre/1..3`, `/calculadora`, `/calendario-de-ovulacion`, `/blog`.
4. Delete the services / precios / segmentos / lead machinery listed in `plan.md` §2, including their route dirs, JS, nav lines and their checks in `verify.sh` (the only `verify.sh` edit T0 may make). Keep `partials/whatsapp-fab.php` disabled (`site.contact.whatsapp` null hides it).
5. Tokens: replace the `:root` block of `assets/css/site.css` with `design/tokens.css`. Fonts: Nunito Sans woff2 (latin + latin-ext) self-hosted, `@font-face` + preload lines updated, `deploy/subset-fonts.sh` LATIN_EXT includes `₲`. Favicon + `og-default.png` in brand colours (petrol on cream, the name in type; no AI image).
6. CI per `plan.md` §1.12: if `docs/decisions-needed.md` has no `ci: yes` answer, delete `.github/workflows/verify.yml` and say so in the log. Install the `budgeted-runner-deploy` pre-commit hook (blocks new workflows) as `tools/git-hooks/pre-commit` + a one-line `tools/install-hooks.sh`.
7. `node deploy/minify-css.mjs`; `php -S localhost:8080 router.php` click-through; `./verify.sh` green; `./deploy/make-zip.sh` + `./verify.sh --root dist/embarazo-<date>` green.

Exit: verify green on repo and zip; every §3 URL returns 200 as a noindex stub; no example
content remains (`grep -rn "'example' => true" content/` empty); PR merged; `docs/log/t0.md`.

## After this phase
Follow `prompts/_handoff.md`. Next: `prompts/opus-1-foundation.md`, model **Opus**.
