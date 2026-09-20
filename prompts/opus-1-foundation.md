# Phase T1 — Foundation + home. Opus session. Lane 1.

Read ONLY: this file, `plan.md` §1, §2, §4, §5.2, §6, §11, the phase table, §9,
`docs/app-facts.md`, `docs/log/t0.md`, `docs/design-decisions.md`, and the five files in
`design/preview/` + `design/components.html`. Load `php-site-template`.

Owns: `lib/**`, `partials/**`, `templates/**`, `content/*.php` (shapes + one exemplar each),
`index.php`, `verify.sh`, `deploy/routes.php`, `router.php`, `.htaccess`, `tools/**`,
`tests/**`, `assets/css/site.css` (below the tokens block), `assets/js/site.js`,
`semana/20/index.php`, `derechos/index.php`, `derechos/licencia-de-maternidad/index.php`,
`docs/log/t1.md`. Budget ≤ 90 min.

Build, in this order (each is a commit):
1. Content files and shapes from `plan.md` §2, header comments as the contract, one
   exemplar each: `content/semanas.php` (all 42 rows seeded by `tools/import-weeks.mjs`
   from a shallow clone of `antonmarklundcom/embarazo.2.1` `lib/weeks.ts`; week 20 fully
   written per §6.2 as the exemplar, others carry the seed fields with `sections` empty),
   `trimestres.php`, `clusters.php` (6 records, intros written), `articulos.php` (exemplar
   `licencia-de-maternidad`, kind legal, written), `cta.php`, `tools.php` shape (records empty).
2. `lib/helpers.php`: `app_link()`, `wa_share()`, `week_trimester()`, `disclaimer_kind()`.
   `lib/seo.php`: the JSON-LD set in §2. `<html lang="es-PY">`.
3. Partials and templates in §2, translated from `design/components.html` and the previews
   into the template's partial conventions (prefixed locals, `unset()`, `e()` everywhere).
   Mobile sticky CTA bar as a partial included by `templates/page.php` product pages only.
4. `index.php` = `design/preview/home.html` made real (content from `content/pages.php['/']`).
5. `verify.sh` additions from §2 (sources gate, link rules, CTA href rule, size budget, 42
   week routes). `tests/jsonld.mjs` (parses every page's JSON-LD, asserts required fields).
   `deploy/routes.php` lists every §3 URL (stubs from T0 stay 200/noindex).
6. Update `prompts/_watcher.md` phase list to S1–S9 + link pass, model Sonnet, max 4 concurrent.

Exit: verify green on repo and zip; `/`, `/semana/20`, `/derechos`,
`/derechos/licencia-de-maternidad` render full content at 360 px matching the previews;
`tests/jsonld.mjs` green; Lighthouse mobile ≥ 95 performance on `/` with the fallback hero
(one run); `docs/log/t1.md` documents every shape decision a lane-2 phase must know.

## After this phase
Follow `prompts/_handoff.md`. Create the watcher Routine (`prompts/_watcher.md`, hourly,
fresh Sonnet session per firing), then spawn lane 2: S1, S2, S3, S4 first (4 concurrent);
the watcher starts S5–S9 as slots free. `prompt` for each: `Read prompts/<file>.md in this
repo and execute it.` Model Sonnet, explicit. Never Fable.
