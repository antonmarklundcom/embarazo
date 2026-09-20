# plan.md — embarazo.com.py, the SEO + conversion site for Mi Bebé

> Repo: `antonmarklundcom/embarazo` (this one). Domain: `https://embarazo.com.py`.
> The app it sells lives in `antonmarklundcom/embarazo.2.1` at `https://app.embarazo.com.py`
> and is **context only** — see `docs/app-facts.md`. Nothing here changes the app.
>
> Written 2026-09-20 in a Fable planning session, following `phased-autonomous-build`
> (template profile), `php-site-template`, `fable-cost-guardrail`, `budgeted-runner-deploy`,
> `higgsfield-image-pipeline`, `webimg-pipeline`, `nextjs-national-lead-gen` (architecture
> only). It supersedes §2, §2A and §8 of the app repo's `docs/SITE-PLAN-EMBARAZO-COM-PY.md`
> and adopts everything else from it.

## Phase table

| Phase | Lane | Model | Prompt | Plan § | Owns | Depends on |
|---|---|---|---|---|---|---|
| **D0 Design + preview** | 0 (interactive, Anton drives) | Opus 5 high | `prompts/opus-0-design-and-preview.md` | §1, §2, §6, §11 | `design/**`, `docs/design-decisions.md`, `docs/imagery-brief.md` | — |
| **T0 Adopt** | 1 | Sonnet | `prompts/sonnet-0-adopt.md` | §1, §4, §5.1 | everything (template import), then `content/site.php`, `content/ui.php`, `content/nav.php`, `content/pages.php`, tokens block, fonts | D0 |
| **T1 Foundation + home** | 1 | Opus | `prompts/opus-1-foundation.md` | §2, §5.2, §7.1 | `lib/**`, `partials/**`, `templates/**`, `content/*.php` key shapes, `index.php`, `verify.sh`, `deploy/**`, `router.php`, `.htaccess`, `tools/**` | T0 |
| S1 Product pages | 2 | Sonnet | `prompts/sonnet-1-product-pages.md` | §3.1, §6.1 | `app/**`, `instalar/**`, `privacidad/**`, `preguntas-frecuentes/**`, `familia/**`, `sobre/**`, `contacto/**`, `app/comparacion/**`, their `content/pages.php` records | T1 |
| S2 Weeks 1–21 + hubs | 2 | Sonnet | `prompts/sonnet-2-weeks-a.md` | §3.2, §6.2 | `semana/index.php`, `semana/1..21/**`, `trimestre/**`, `content/semanas.php` rows 1–21, `content/trimestres.php` | T1 |
| S3 Weeks 22–42 | 2 | Sonnet | `prompts/sonnet-3-weeks-b.md` | §3.2, §6.2 | `semana/22..42/**`, `content/semanas.php` rows 22–42 | T1 |
| S4 Tools | 2 | Sonnet | `prompts/sonnet-4-tools.md` | §3.3, §6.3 | `calculadora/**`, `calendario-de-ovulacion/**`, `content/tools.php`, `assets/js/tools/**`, `tests/pregnancy.test.mjs` | T1 |
| S5 Derechos + Trámites | 2 | Sonnet | `prompts/sonnet-5-derechos-tramites.md` | §3.4, §6.4 | `derechos/**`, `tramites/**`, their rows in `content/articulos.php`, `content/clusters.php` (those two keys) | T1 |
| S6 Salud + Alimentación | 2 | Sonnet | `prompts/sonnet-6-salud-alimentacion.md` | §3.4, §6.4 | `salud/**`, `alimentacion/**`, their rows | T1 |
| S7 Parto + Planear | 2 | Sonnet | `prompts/sonnet-7-parto-planear.md` | §3.4, §6.4 | `parto/**`, `planear/**`, their rows | T1 |
| S8 Blog / novedades | 2 | Sonnet | `prompts/sonnet-8-blog.md` | §3.5, §6.5 | `blog/**`, `content/blog.php` | T1 |
| S9 Imagery | 2 | Sonnet | `prompts/sonnet-9-imagery.md` | §8 | `assets/img/**`, `docs/imagery-manifest.json`, image keys in content files it names | T1, D0 |
| **L Link pass** | — | Sonnet | `prompts/sonnet-10-link-pass.md` | §9 | cross-links, `content/nav.php`, hub cards, `KNOWN-ISSUES.md`, `sitemap` sanity | all lane 2 |

Model rule (§4.8): only Opus and Sonnet appear above. Fable never runs a phase. D0 is the
one phase Anton sits in: it is a design conversation, not a build.

---

## 1. Decisions already made — do not re-litigate

1. **Purpose.** One goal: organic traffic from Paraguay → install/open Mi Bebé at
   `app.embarazo.com.py`. KPIs: organic PY sessions; CTA click-through (≥ 8 % content pages,
   ≥ 25 % on `/instalar`); onboarding completions arriving with `utm_source=site` (app-side).
2. **Stack.** Static HTML + PHP from `antonmarklundcom/php-site-template`, market `py`,
   Hostinger shared hosting, deployed with hPanel → Git → Connect GitHub (zero Actions minutes).
   No database, no Node runtime, no build step for the site. Reason: the app repo's §2 case
   for a separate deployable stands (different deploy rhythm, no service-worker precache churn,
   no auth surface, no server); the template gives router, sitemap, verify gate, deploy zip,
   design tokens and phase prompts for free.
3. **Separate repo, separate origin.** Site = `embarazo.com.py`; app = `app.embarazo.com.py`.
   The site never duplicates legal text (privacy policy, terms, borrar-cuenta stay in the app).
4. **The site is canonical for all public content** (42 weeks, 8 guides expanded). The app
   adds cross-domain canonicals and 301s `/conoce` → site in its own PR the week the site goes
   live (docs/app-facts.md, last section). Never before.
5. **Positioning order:** "hecha para Paraguay" → "gratis, se instala desde un link, sin
   tienda" → "seguila en familia por WhatsApp" → "tus datos son tuyos" as a trust strip on every
   page, never the H1. Honest copy only (§app-facts).
6. **No forms, no email capture, no pop-ups, no exit-intent, no cookie banner.** The only
   conversion is the deep link. Analytics, if any: cookieless (Cloudflare Web Analytics or
   self-hosted Umami), one script, no consent banner needed. Google Analytics and Meta pixel
   are out. Contact = WhatsApp + email links.
7. **Mobile first, literally.** Every template is designed at 360 px first; desktop is a
   widening. LCP < 1.5 s on a mid Android over 3G, CLS < 0.05, no client JS on content pages
   except the CTA/share button; the calculator is the one interactive island.
8. **Language.** es-PY voseo everywhere; titles/H1s in the neutral query form people type
   ("cuántas semanas de embarazo tengo"), body in voseo. Paraguayan nouns (sanatorio, ecografía,
   carné, panza, tereré). Guaraní inline (`lang="gn"`) only where the app already has reviewed
   strings. No `/gn/` routes.
9. **Medical/legal posture = the app's.** No reviewer exists yet, so every `salud`,
   `alimentacion`, `semana`, `parto`, `planear` page shows the disclaimer partial; every
   `derechos`/`tramites` page shows "vigente a <date> · no es asesoría legal" and cites its
   law. `reviewedBy` is a content key that stays `null` until a reviewer signs; `verify.sh`
   fails on a medical/legal record with **no sources**, not on a missing reviewer.
10. **Design comes first, in D0, by Opus with Anton.** Brand tokens are the app's (cream /
    petrol / terracotta / pastels, Nunito Sans). Patterns allowed: split hero with a phone frame,
    bento feature grid on `/app`, editorial big-type hubs, timeline for trimesters. No glass, no
    marquee, no count-ups, one motion per screen, `prefers-reduced-motion` honoured.
11. **Images: `gpt_image_2_5` variant `sunburst`, quality `medium`, per `higgsfield-image-pipeline`
    Rule 1 (2026-09-20).** 1k (1 credit) for slots shown ≤ 800 px, 2k (1.5) for hero/hub/OG
    widths; `high` 2k (3 credits) only for the home hero and up to 3 flagship slots the session
    names in the manifest. No Nano Banana from a session: where it would clearly be better, the
    session writes the prompt to `docs/imagery-prompts-manual.md` and Anton generates it himself
    (free for him in the UI). Real app screenshots come from the app repo's
    `npm run gen:screenshots` output, not from AI.
12. **CI.** The template ships `.github/workflows/verify.yml` (PR-only, one job). Under
    `budgeted-runner-deploy` this stays only with Anton's explicit yes (§7 item 5); otherwise
    T0 deletes it and `verify.sh` runs in-session before every PR. The local pre-commit hook
    that blocks new workflows is installed by T0 either way.
13. **Budget: ≤ $90 usage-equivalent and ≤ 5 h wall-clock** for T0 → link pass (the site has
    ~110 pages, roughly twice contador's). D0 is Anton's interactive Opus time on top.
14. **Content volume at launch:** ~115 indexable URLs — 9 product pages, 42 weeks, 3 trimester
    hubs + `/semana`, 2 tools, 6 cluster hubs, 41 articles, ~6 blog posts, 1 comparison page.
15. **Nothing gated on real data ships:** no `/precios/*`, no `/cerca/<departamento>`, no
    directory listings, no `/profesionales` (Backlog §10). No invented sanatorios on the web.

---

## 2. Content model (the contract — written in T1, never retrofitted)

Template files kept as-is: `site.php`, `ui.php`, `nav.php`, `pages.php`, `tools.php`,
`blog.php`. Template files **deleted** in T0 (no services, no prices, no segments, no lead
values on this site): `services.php`, `precios.php`, `segmentos.php`, `lead-values.php`,
`partials/lead-form.php`, `partials/lead-thanks.php`, `partials/industries.php`,
`partials/testimonials.php`, `partials/process.php`, `partials/service-card-grid.php`,
`enviar.php`, `assets/js/lead-form.js`, the `servicios/`, `precios/`, `segmentos/` dirs.
`verify.sh` loses its lead-form and lead-values checks in T0 (that is a lib-level edit, T0 is
allowed exactly that one).

New content files (T1 creates each with its key shape in the header comment and one
exemplar record):

**`content/semanas.php`** — keyed `1..42`:
`title` ("Semana 20 de embarazo"), `seoTitle` (≤ 60), `metaDescription` (120–155, unique),
`trimester` (derived, do not store), `size{name, lengthCm, weightG}` (PY progression from the
app), `milestone`, `sections{bebe[], vos[], paraguay[]}` (paragraph arrays: "Tu bebé esta
semana", "Vos esta semana", "En Paraguay esta semana"), `control` (the MSPBS/IPS control or
study due, or null), `vaccine` (null or PAI vaccine), `rightsMilestone` (null or text),
`season` (heat/dengue/tereré note), `faq[{q,a}]` (3–5), `related[]` (article slugs),
`image` (`assets/img/semanas/bebe-20.webp` or null → styled fallback), `reviewedBy` (null),
`sources[{title,publisher,url,accessed}]` (≥ 1), `updated` (ISO).

**`content/trimestres.php`** — keyed `1..3`: `title`, `seoTitle`, `metaDescription`, `lead`,
`timeline[{week, what}]` (controls, studies, vaccines, rights), `weeks[]` (derived), `faq[]`.

**`content/clusters.php`** — keyed `salud | alimentacion | tramites | derechos | parto | planear`:
`title`, `h1`, `seoTitle`, `metaDescription`, `intro[]` (200–300 words that rank alone),
`kind` (`medical | legal | procedural`), `guaraniStrip` (bool, rights hub only),
`related[]` (other clusters).

**`content/articulos.php`** — keyed by slug: `cluster`, `path` (`/<cluster>/<slug>/`), `title`,
`seoTitle`, `metaDescription`, `kind` (`medical | legal | procedural | product`), `lead`
(answer-first, ≤ 100 words), `sections[{h2, body[], items[{title,text}], table{head[],rows[][]}}]`,
`steps[]` (optional "paso a paso"), `appHandoff{text, medium, extra}` (rendered as the mid-page
CTA), `faq[{q,a}]`, `related[]`, `weeks[]` (powers "related" on week pages), `appGuideSlug`
(null or the app guide this expands — informs the app-side canonical PR), `guarani[{es,gn}]`
(optional), `reviewedBy` (null), `reviewedAt` (null), `validAsOf` (legal only), `sources[]`
(≥ 1 for medical/legal), `updated`, `image`.

**`content/tools.php`** (template shape, plus): `handoff{medium}` and `math` (`pregnancy`).

**`content/pages.php`** (template shape) holds the 9 product pages with `sections[]`;
`/instalar` adds `howto[{os, steps[]}]`; `/preguntas-frecuentes` adds `faq[]`;
`/app` adds `features[{key, title, text, appPath, tone}]` for the bento grid.

**`content/blog.php`** (template shape) plus `kind`, `sources[]`, `image`.

**`content/cta.php`** — the four CTA variants' copy: `primary`, `week` (with `{n}`),
`tool`, `trust` (the strip). One place; partials read it.

Helpers T1 adds to `lib/helpers.php`: `app_link(string $medium, string $campaign, array $extra = [])`
→ `https://app.embarazo.com.py/?utm_source=site&utm_medium=…&utm_campaign=…&w=…`;
`wa_share(string $text, string $url)`; `week_trimester(int $n)`; `disclaimer_kind(string $kind)`.

Route files stay three lines: `$n = 20; require __DIR__.'/../../templates/week.php';`.

Templates T1 adds: `templates/week.php`, `templates/hub.php` (clusters + `/semana`),
`templates/trimester.php`; extends `templates/article.php` with the medical/legal keys and
`templates/page.php` with the bento/howto/faq blocks. Partials T1 adds: `cta-primary.php`,
`cta-week.php`, `cta-tool.php`, `trust-strip.php`, `disclaimer.php` (kind-aware, shows
reviewer line when set), `sources.php`, `wa-share.php`, `week-nav.php`, `phone-frame.php`,
`guarani-strip.php`. JSON-LD in `lib/seo.php`: `Organization` + `WebSite` sitewide,
`SoftwareApplication` on `/` and `/app`, `HowTo` on `/instalar`, `MedicalWebPage`+`Article`
(reviewer optional) on medical pages, `Article` on legal/procedural, `FAQPage` where `faq[]`,
`BreadcrumbList` everywhere, `WebApplication` on the two tools.

`verify.sh` additions (T1): medical/legal record with empty `sources` → FAIL; every article
links its hub + ≥ 2 related; every week links prev/next + trimester + ≥ 1 article; every hub
links ≥ 5 children; every CTA href starts with `https://app.embarazo.com.py/?utm_source=site`;
`<html lang="es-PY">`; no page > 250 KB HTML+CSS; all 42 week routes 200.

---

## 3. Feature scope

### 3.1 Product pages (S1) — the 10 % that sells
`/` (T1, from D0's home design) · `/app` (bento of the two modes, tools, guides, rights,
emergency, familia; real screenshots per feature; each tile deep-links) · `/instalar` (the
conversion page: device-detected Android Chrome vs iPhone Safari steps, "no está en Play Store
y no hace falta", storage/offline facts, `HowTo`) · `/privacidad` (the marketing story of the
data model, links to the app's legal pages) · `/preguntas-frecuentes` (`FAQPage`) · `/familia`
(speaks to the papá / la abuela) · `/sobre` (E-E-A-T: who makes it, reviewer slot, sources and
correction policy) · `/contacto` (WhatsApp + email links) · `/app/comparacion` (honest Mi Bebé
vs Flo/Preggers/BabyCenter on Paraguay content, offline, data policy).

### 3.2 Weeks + trimesters (S2, S3) — the traffic engine
42 week pages per the §6.2 template, ~900 words each, FAQ block, prev/next, `/semana` hub
grouped by trimester with the calculator teaser, `/trimestre/1|2|3` timeline hubs. Long-tail
("semana 18 síntomas / ecografía / panza / movimientos") is H2s inside the week page, never a
separate URL.

### 3.3 Tools (S4) — highest CTR to the app
`/calculadora` (FUM or FPP → "Estás en la semana 18 · 17 semanas y 3 días · FPP 12 de
febrero", size card from `content/semanas.php`, hand-off button with `fpp=`) and
`/calendario-de-ovulacion` (fertile-window estimate, loud "no es un método anticonceptivo",
hand-off `modo=planeando`). Pure client-side, the page says nothing leaves the phone. Math
ported from the app with the same test vectors.

### 3.4 Clusters (S5–S7) — topical authority, 41 articles + 6 hubs
- **derechos (7):** licencia de maternidad (P-3 pilot) · subsidio de maternidad IPS · permiso
  para controles (Ley 7383) · hora de lactancia · fuero maternal y despido · licencia de
  paternidad · gratuidad MSPBS y Tekoporã. Plus `derechos-de-la-embarazada-que-trabaja`
  (expands app guide #8) = 8.
- **tramites (7):** carné perinatal (P-4 pilot) · inscribirse en IPS embarazada · IPS vs
  sanatorio privado (expands guide #5) · certificado de nacido vivo · inscripción en el Registro
  Civil · cédula del bebé · asignación familiar. Plus `despues-del-nacimiento` (guide #4) = 8.
- **salud (8):** vacunas en el embarazo (guide #7, with one H2 per PAI vaccine) · dengue en el
  embarazo (guide #1) · señales de alarma (guide #6, 141/911 `tel:`, Guaraní strip) · presión
  alta y preeclampsia · diabetes gestacional · salud dental · dormir en el embarazo · ejercicio y
  Kegel.
- **alimentacion (7):** tereré (P-5 pilot, guide #2) · mate y cocido · yuyos · pescado de río
  y mercurio · chipa, sopa paraguaya y asado · antojos y anemia · hidratación con el calor.
- **planear (6):** días fértiles · test de embarazo cuándo · primeros síntomas · ácido fólico
  · checklist preconcepción · si no llega el embarazo, cuándo consultar.
- **parto (6):** qué llevar al sanatorio (guide #3) · bolso del bebé · contracciones y cuándo
  ir · parto en IPS paso a paso · cesárea: qué esperar · primeros días en casa.

### 3.5 Blog / novedades (S8)
`/blog/` with 6 launch posts written as news, not evergreen: "Mi Bebé: la app de embarazo hecha
en Paraguay ya se puede instalar" · "Temporada de dengue 2026–27: qué cambia si estás
embarazada" · "Ley 7383: un año de permisos pagos para controles" · "Calor en Asunción:
hidratación y tereré" · "Cómo seguir el embarazo de tu pareja por WhatsApp" · "Qué revisa (y qué
no) una app de embarazo". Later posts are Anton's editorial cadence; the template makes a post
one record + one route file.

### 3.6 Out of scope for this build (Backlog §10)
`/precios/*`, `/cerca/*`, `/profesionales`, events mirror, `/nombres`, postpartum cluster,
video embeds, Guaraní routes, sponsor placements, analytics beyond the one script.

---

## 4. Autonomy protocol

The 15 rules of `phased-autonomous-build` §4 apply verbatim (work to exit criteria; one PR per
phase on `phase/<id>`; minor issues → `docs/log/<id>.md`; ask only via
`docs/decisions-needed.md` and end; re-runnable prompts; lane 2 never touches foundation;
Fable never runs; file ownership per the phase table; four handoff gates; ≤ 12/8/8-line logs;
orientation read = prompt + §1 + §4 + own sections + phase table + §9 + dependency logs;
polish cap: one screenshot pass, PR body written once; screenshots in CI artifact or in the
PR body from a local run, never committed; decisions travel by files). Site-specific additions:

- **A4.1 Copy bar.** Answer in the first 100 words. No medical imperative without a source line.
  No superlatives, no "la mejor app". Voseo. Every article ends with the app hand-off, the
  related links, sources, disclaimer, "actualizado el".
- **A4.2 No invented facts.** A law number, an office, a price, a phone number appears only
  with a source in `sources[]`. Unknown → "consultá el monto vigente" and a line in
  `docs/facts-to-verify.md`.
- **A4.3 One CTA per screen height**, through `app_link()` only.
- **A4.4 Fan-out.** Phases with ≥ 4 same-shaped units (weeks, articles) build one exemplar,
  then fan out the rest as parallel Sonnet subagents per `fable-directs-sonnet-builds`, one
  verify, one PR.
- **A4.5 Gate before every PR:** `./verify.sh` green on the repo AND on the unzipped
  `deploy/make-zip.sh` output. `php -l` on every touched file.
- **A4.6 Images** only via `higgsfield-image-pipeline` Rule 0–2 (preflight, manifest, ledger,
  allowlist). Any phase other than S9 that wants an image writes the slot into
  `docs/imagery-brief.md` and uses the styled fallback.

---

## 5. Lane 1

### 5.1 T0 Adopt (Sonnet, ≤ 30 min)
Pull the template into this repo (`git remote add template
https://github.com/antonmarklundcom/php-site-template.git && git fetch template && git merge
template/main --allow-unrelated-histories`), run `./verify.sh` (must PASS before any change),
then the README's T0 steps adapted: identity in `content/site.php` (name "Mi Bebé", domain
`embarazo.com.py`, slug `embarazo`, market `py`, schemaType `['Organization']`, contact
values `null`), `content/ui.php` labels in voseo, delete the services/precios/segments/lead
machinery listed in §2 and their verify checks, `content/nav.php` with only Semana a semana ·
Calculadora · Guías (6 clusters) · Blog · La app · Instalar, `content/pages.php` stubs for every
§3.1 page, tokens block + fonts from `design/tokens.css` (D0), favicon + OG placeholder in
brand colours, CI decision per §1.12, pre-commit hook, `docs/log/t0.md`. Exit: verify green,
stubs render, PR merged. Spawns T1.

### 5.2 T1 Foundation + home (Opus, ≤ 90 min)
Everything in §2: content files with shapes + one exemplar each (week 20, article
`licencia-de-maternidad` stub, cluster `derechos`), helpers, templates, partials, JSON-LD,
verify additions, `tools/import-weeks.mjs` (reads a checkout of the app repo's `lib/weeks.ts`
and writes the 42 seed rows into `content/semanas.php` with `sections` empty), the homepage
`index.php` from `design/preview/home.html`, `deploy/routes.php` for every §3 URL (stubs 200,
noindex until filled). Exit: verify green with the exemplars; 42 week routes 200; every JSON-LD
block validates with `tests/jsonld.mjs`; Lighthouse mobile ≥ 95 perf on `/` with the fallback
hero. Then: create the watcher Routine, spawn S1–S9 (max 4 concurrent; the watcher starts the
rest).

---

## 6. Lane 2 page templates (the quality bar per phase)

### 6.1 Product page (S1)
Hero (H1 ≤ 8 words, one sentence, primary CTA) → three proof blocks (Paraguay / familia / tus
datos) → feature bento (`/app`) or HowTo steps (`/instalar`) → FAQ → primary CTA + trust
strip. Screenshots in `partials/phone-frame.php` from `assets/img/app/*.webp` (S9 fills;
fallback frame until then). Lighthouse ≥ 95 ×4 mobile.

### 6.2 Week page (S2, S3) ~900 words
H1 "Semana N de embarazo" + subtitle (trimester; "N−1 semanas y X días" explained once) →
Tu bebé esta semana (size, length/weight, milestone; image slot) → Vos esta semana (body,
common symptoms, what is NOT normal → link `/salud/senales-de-alarma`) → `cta-week` → En
Paraguay esta semana (control/study due, vaccine, rights milestone, season) → FAQ (3–5,
`FAQPage`) → `cta-week` + prev/next + trimester + 2–3 related articles → sources, disclaimer,
updated. The five long-tail intents (síntomas, ecografía, panza, movimientos, peso) are H2s or
FAQ entries in the relevant weeks, never separate pages.

### 6.3 Tool page (S4)
Island at top (two inputs, instant result, no reload) → result card with the week's size
comparison → hand-off button with the date in the deep link → "Cómo se calcula" (Naegele; why
the ecografía may move it) → "semanas completas" explained → FAQ (4) → link `/semana`.
`tests/pregnancy.test.mjs` runs the app's test vectors against `assets/js/tools/pregnancy.js`.

### 6.4 Cluster article (S5–S7) 800–1,500 words
Answer-first lead → sections (a table where the answer is a table: yuyos, vaccines, documents)
→ "Paso a paso" / "Qué llevar" where procedural → "Qué hace la app con esto" (one paragraph +
`cta-tool`/`cta-primary`) → FAQ → related (hub + ≥ 2) → reviewer line (or disclaimer), sources,
"vigente a" (legal), updated. Hub: 200–300-word intro that ranks alone, then cards.

### 6.5 Blog post (S8) 500–900 words
News lead (what changed, when, for whom) → body → what to do → related evergreen article →
`cta-primary`. `Article` schema with `datePublished`.

---

## 7. Human-inputs checklist

| # | Item | Needed by |
|---|---|---|
| 1 | Approve this plan (merge the plan PR) and run D0 with Opus | T0 |
| 2 | Hostinger: the root domain's hosting slot (where WordPress runs today) → hPanel → Git → connect this repo, branch `main`, deploy path = docroot. **Back up / export the WordPress site first**; the swap deletes it. `app.` stays untouched. | first deploy after L |
| 3 | Confirm the environment allowlist has `*.cloudfront.net` (higgsfield-image-pipeline Rule 2) | S9 |
| 4 | Upload the updated `higgsfield-image-pipeline` skill (Sunburst rule) to claude.ai so S9 reads it | S9 |
| 5 | CI yes/no (`budgeted-runner-deploy`): keep the template's PR-only workflow, or delete it | T0 |
| 6 | Cloudflare Web Analytics token (or "none for launch") | T0 (`content/site.php` `analytics`) |
| 7 | WhatsApp number and contact email for `/contacto` (else the page shows email only / hides) | S1 |
| 8 | Medical reviewer name/credential/registry when recruited (fills `reviewedBy`, flips the visible line) | any time, not blocking |
| 9 | App-side PR in embarazo.2.1 (canonicals, `/conoce` 301, `NEXT_PUBLIC_SITE_URL`, arrival counter) | the week the site goes live |
| 10 | Run `npm run gen:screenshots` in the app repo (or take real device screenshots) and drop them in `assets/img/app/` | S9 (fallback frame until then) |
| 11 | Google Search Console: verify `embarazo.com.py`, submit `/sitemap.xml`; remove app week/guide URLs after item 9 | after deploy |

---

## 8. Imagery (S9)

Slots (declared by D0 in `docs/imagery-brief.md`, generated by S9 under the pipeline skill):
home hero (21:9, warm illustrated, mother on a phone in a Paraguayan setting, no clinical
stock), 6 cluster hub headers (16:9), 42 week renders `bebe-<n>.webp` (1:1, consistent
illustrated style, the same style the app's `public/assets/semanas/` wants — generate once,
share both ways), 9 article card images for the pilot/guide articles, OG default 1200×630.
Budget maths (Sunburst): home hero high 2k = 3; 6 hub headers + OG at medium 2k = 10.5;
42 week renders + 9 article cards at medium 1k = 51 → **≈ 65 credits**. Week renders may go
to the manual Nano Banana route if S9 judges the illustrated series more consistent there
(prompts file, Anton pastes). Real app screenshots are never generated. All files through
webimg (`--name`, `--alt`), WebP ≤ 60 KB, manifest committed.

---

## 9. Build log index

| Phase | PR | Log |
|---|---|---|
| plan | this PR | — |
| D0 | — | `docs/design-decisions.md` |
| T0 | | `docs/log/t0.md` |
| T1 | | `docs/log/t1.md` |
| S1–S9 | | `docs/log/s<n>.md` |
| L | | `docs/log/link-pass.md` |

---

## 10. Backlog

`/precios/<estudio>` from the app's reviewed price data · `/cerca/<departamento>` when ≥ 5
published listings · `/profesionales` + sponsor deck · events mirror · "Recibilo por WhatsApp"
when the app ships weekly messages · `/nombres` with a Guaraní-names editorial angle ·
postpartum cluster · video embeds when `videos.ts` has real IDs · Guaraní `/gn/emergencia`
after native review · sponsor placements on price pages, labelled · Umami self-host if
Cloudflare analytics proves too coarse.

---

## 11. D0 — what the Opus design session produces (so T0/T1 can consume it)

```
design/
  tokens.css            the :root block for assets/css/site.css (colours, type scale, radii,
                        spacing, shadows, motion), mobile values first, desktop overrides
  components.html       one page rendering every component in every state at 360 px and
                        1024 px: header, bottom sticky CTA, week card, hub card, article card,
                        phone frame, bento tile, FAQ accordion, trust strip, disclaimer,
                        sources list, share button, week nav, calculator island, footer
  preview/
    home.html           the homepage, real copy, brand tokens, fallback hero
    semana-20.html      the week page exemplar (P-1)
    calculadora.html    the tool page exemplar (P-2)
    articulo.html       the article exemplar (P-3 licencia de maternidad)
    instalar.html       the conversion page
  README.md             how to open the previews (plain files; no build)
docs/design-decisions.md   ≤ 40 lines: the pattern choices and why, what was rejected
docs/imagery-brief.md      the slot list of §8 with art direction per slot
```
Optional, only if `/design-sync` is available in the session: push `design/components.html`
as cards to a claude.ai/design project named "Mi Bebé — embarazo.com.py". Never a
substitute for the files above; the files are what T0/T1 read.
