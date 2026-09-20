# Facts pulled from the app repo (antonmarklundcom/embarazo.2.1) — 2026-09-20

Read-only reference for every session in this repo. The app repo is **context only**;
nothing in this site repo imports from it at build time. When a fact here goes stale,
re-read the app repo and fix this file in the same PR.

## The product the site sells

- **Name:** Mi Bebé. Free, installable PWA (no store), made for Paraguay. es-PY voseo.
- **App origin:** `https://app.embarazo.com.py` (Next.js 15 on Hostinger Node.js).
- **Site origin (this repo):** `https://embarazo.com.py` (root domain, currently WordPress, replaced in place).
- **Two modes:** "Estoy embarazada" (week-by-week, tools, prenatal summary) and
  "Estoy planeando / buscando" (menstrual calendar, fertile-window estimate, preconception checklist).
- **Accounts optional.** Google sign-in for backup/sync + family sharing by WhatsApp link;
  "seguir sin cuenta" keeps everything on the phone. Photos are never uploaded.
- **Honest privacy line:** "sin cuenta, todo queda en tu teléfono; con cuenta, el servidor
  guarda un sobre que no puede leer". Never "no recolectamos datos".
- **No pop-up ads, no email capture, no forms on the site.** Founder rules.
- **Medical reviewer:** not yet recruited. Build no longer refuses without one; content
  carries a visible disclaimer instead (`DECISIONS.md` "disclaimer model", 2026-09-05).
  The site follows the same posture editorially.
- **Guaraní:** 78 jopara strings exist in the app, pending native review. Site shows them
  inline with `lang="gn"` only on the emergency article and the rights hub.

## App routes (public, for deep links and for "what the app has")

Weeks `/semana/1..42` · Guides `/guias/<slug>` · `/derechos` (rights browser with leave-date
math) · `/emergencia` (141 SEME, 911, alarm signs) · `/directorio` (gated on real listings) ·
`/planeando/{calendario,fertilidad,checklist,consultar}` · `/familia` · `/eventos` ·
`/recomendados` · `/preguntas` · `/privacidad` · `/terminos` · `/borrar-cuenta` · `/conoce`
(current public landing; the site replaces it) ·
Tools `/herramientas/{bebe-ia,carne,checklist,comer,contracciones,dental,diario,ejercicios,
fotos,kegel,nombres,pataditas,peso,precios,resumen,sintomas,sueno}`.

## The 8 app guides (each gets a canonical to a site article later)

| App slug | Site cluster / target URL |
|---|---|
| `dengue-zika-chikungunya-embarazo` | `/salud/dengue-en-el-embarazo` |
| `terere-mate-cocido-cafeina-embarazo` | `/alimentacion/terere-en-el-embarazo` |
| `que-llevar-al-sanatorio` | `/parto/que-llevar-al-sanatorio` |
| `despues-del-nacimiento-tramites` | `/tramites/despues-del-nacimiento` |
| `control-prenatal-ips-vs-privado` | `/tramites/control-prenatal-ips-vs-privado` |
| `senales-de-alarma-embarazo` | `/salud/senales-de-alarma` |
| `vacunas-en-el-embarazo-pai` | `/salud/vacunas-en-el-embarazo` |
| `derechos-embarazada-que-trabaja` | `/derechos/derechos-de-la-embarazada-que-trabaja` |

## Deep-link contract (already implemented app-side in `lib/onboarding/siteParams.ts`)

```
https://app.embarazo.com.py/?utm_source=site&utm_medium=<page-type>&utm_campaign=<slug>&w=<1..42>
https://app.embarazo.com.py/?utm_source=site&utm_medium=tool&fpp=<yyyy-mm-dd>      (or fum=)
https://app.embarazo.com.py/?utm_source=site&utm_medium=article&modo=planeando
```
The app prefills onboarding from `w`, `fpp`, `fum`, `modo` and drops them from the URL.
The site builds every CTA through ONE helper (`app_link()`), never by hand.

## Brand tokens (app `app/globals.css`, copy verbatim into the site tokens block)

```
cream #FBF7F1 · petrol #2F5D50 · petrol-dark #24463D · terracotta #C96342 · rose #E0A4A0
sage #6F8A66 · ink #322E29 · muted #7A7369 · line #EDE5DA · whatsapp #25D366
sand-bg #F8E2CB · sand-text #8A5A2E
pastel: rosa #F3DAD4 · celeste #D9E5EC · salvia #DFE8D8 · lavanda #E6E0F0 · arena #F8E2CB
radius card 16px · tile 14px · font Nunito Sans 400/500 (self-host woff2 on the site)
```
Terracotta is the single CTA colour. Nothing dark, nothing navy/hot-pink.

## Pregnancy math to port verbatim (app `lib/pregnancy.ts`, tests in `lib/pregnancy.test.ts`)

`GESTATION_DAYS = 280`, weeks 1..42, `getCurrentWeek(lmp, now)`, `getTrimester(week)`,
`getDueDate(lmp)`, `lmpFromDueDate(fpp)`, `lmpFromEcografia(...)`, `getCompletedGestation()`
("17 semanas y 2 días" convention; the friendly week is `completed + 1`). The calculator on the
site must produce the same numbers as the app for the same date. Port to
`assets/js/tools/pregnancy.js` with the same test vectors.

## Week data to import (app `lib/weeks.ts`, `RAW_WEEKS[]`)

Per week: friendly title, size comparison in the Paraguayan progression (semilla de chía →
mamón → palta → choclo → coco → sandía), length/weight where measurable, milestone, 100-word
body. The site seeds `content/semanas.php` from it once (T1 import script) and then extends
each week to 800–1,200 words; the app keeps its short version.

## Paraguayan facts already verified in the app (`lib/derechos.ts`, DECISIONS v5)

Ley 5508/2015: 18 weeks maternity leave (24 in the listed cases), lactation 90/60 min, paternity
2 weeks, fuero until 1 year. Ley 7383/2024: up to 4 paid hours for prenatal controls. Ley
5099/2013: MSPBS gratuidad. IPS: subsidio 100 %, reposo from week 38, ≥ 4 months of
contributions. CT art. 261+: bonificación familiar 5 %. Leave math: earliest start = FPP − 14
days; end = start + 126 days; IPS reposo from FPP − 21 days. **Re-verify before publishing**;
every legal page carries "vigente a <date>" and "no es asesoría legal".

## Existing site plan in the app repo

`docs/SITE-PLAN-EMBARAZO-COM-PY.md` (Aug/Sept 2026) holds the sitemap, keyword clusters,
page templates, five pilot pages and the canonical rules. `plan.md` in this repo supersedes its
§2/§2A/§8 (how it is built) and adopts its §1, §3, §4, §5, §6, §7.1 content, §9 verbatim.

## App-side follow-up PR (in embarazo.2.1, NOT this repo, ships the week the site goes live)

- `alternates.canonical` on app `/semana/[n]` and `/guias/[slug]` → site URLs; drop both from `app/sitemap.ts`.
- `/conoce` → 301 `https://embarazo.com.py/`.
- `NEXT_PUBLIC_SITE_URL` so the app can link "leé más en embarazo.com.py".
- Aggregate arrival counter `arrivals_from_site{page_type}` (needs a DECISIONS.md entry).
