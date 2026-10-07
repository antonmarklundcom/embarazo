# Facts pulled from the app repo (antonmarklundcom/embarazo.2.1) — 2026-09-20, re-checked 2026-09-24, 2026-10-06

Read-only reference for every session in this repo. The app repo is **context only**;
nothing in this site repo imports from it at build time. When a fact here goes stale,
re-read the app repo and fix this file in the same PR.

## The product the site sells

- **Name:** Mi Bebé. Free, installable PWA (no store), made for Paraguay. es-PY voseo.
- **App origin:** `https://app.embarazo.com.py` (Next.js 15 on Hostinger Node.js).
- **Site origin (this repo):** `https://embarazo.com.py` (root domain, currently WordPress, replaced in place).
- **Two modes:** "Estoy embarazada" (week-by-week, tools, prenatal summary) and
  "Estoy planeando / buscando" (menstrual calendar, fertile-window estimate, preconception checklist).
- **Accounts optional.** Sign in with Google **or email + password** (with email
  confirmation and password reset) for backup/sync + family sharing by WhatsApp link;
  "seguir sin cuenta" keeps everything on the phone.
- **Photos:** stay on the phone by default. Opt-in "Copia de tus fotos" (Ajustes) uploads
  them to private object storage, for the account holder only; turning it off deletes the
  server copies (if offline, as soon as there is a connection). **Nobody else sees them:**
  pareja and familia never get photos (the old Familia "fotos" switch is gone, 2026-10).
  Never write "las fotos nunca se suben", and never that family can see photos.
- **Honest privacy line:** "sin cuenta, todo queda en tu teléfono; con cuenta, tus registros
  se copian al servidor para respaldarlos". Synced health records are NOT end-to-end
  encrypted. Diary notes protected with a PIN are **not uploaded at all**: they stay
  encrypted on that one phone and do not come back on another device (2026-10 correction:
  never write that they "viajan cifradas"). Never write "un sobre que no puede leer" and
  never "no recolectamos datos". Source of truth: app `app/(app)/privacidad/page.tsx`.
- **What a companion sees:** pareja and familia see the week, the due date and the next
  control. Only the pareja, and only if the mamá turns it on in Familia, also sees her last
  weight and her last kick count. Never notes, symptoms or photos.
- **Account deletion:** removes everything of hers from the server. Two records stay, with no
  name, email or health data: the admin audit trail, and (if she used the AI baby image) how
  many images were generated that month and what they cost. Source: app `/borrar-cuenta`.
- **Push reminders:** optional weekly "semana nueva" and prenatal-control reminders (Ajustes).
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
`/recomendados` · `/preguntas` · `/privacidad` · `/terminos` · `/borrar-cuenta` ·
`/cuenta` (+ `/cuenta/olvide`, `/cuenta/restablecer`, `/cuenta/verificar`) · `/conoce`
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

## Deep-link contract (implemented app-side in `lib/onboarding/siteParams.ts`)

```
https://app.embarazo.com.py/?utm_source=site&utm_medium=<page-type>&utm_campaign=<slug>&w=<1..42>
https://app.embarazo.com.py/?utm_source=site&utm_medium=tool&utm_campaign=calculadora#fum=<yyyy-mm-dd>
https://app.embarazo.com.py/?utm_source=site&utm_medium=tool&utm_campaign=calculadora#fpp=<yyyy-mm-dd>
https://app.embarazo.com.py/?utm_source=site&utm_medium=article&modo=planeando
```
The app prefills onboarding from `w`, `fpp`, `fum`, `modo` and drops them from the URL.
**Personal dates go in the `#` fragment** (2026-10, F12): the browser never sends a fragment
to any server, so a date never reaches a request URL or an access log. The key is the date
she typed — `fum` for "fecha de última menstruación", `fpp` for "fecha probable de parto" —
so the app knows which method she used. Attribution (`utm_*`) and the coarse week `w` stay in
the query. The app still reads `?fpp=`/`?fum=` in the query for old links; the site no longer
emits them. Dates are civil `YYYY-MM-DD` and must exist (the app refuses 2026-02-30).
The site builds every CTA through ONE helper (`app_link()`), never by hand.

## Brand tokens (app `app/globals.css`, copy verbatim into the site tokens block)

```
cream #FBF7F1 · petrol #2F5D50 · petrol-dark #24463D · terracotta #B5553A · rose #E0A4A0
sage #6F8A66 · ink #322E29 · muted #7A7369 · line #EDE5DA · whatsapp #0F7F43
sand-bg #F8E2CB · sand-text #8A5A2E
pastel: rosa #F3DAD4 · celeste #D9E5EC · salvia #DFE8D8 · lavanda #E6E0F0 · arena #F8E2CB
radius card 16px · tile 14px · font Nunito Sans 400/500 (self-host woff2 on the site)
```
(The app darkened terracotta from #C96342 and WhatsApp from #25D366 for WCAG AA.)
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
body. The site seeded `content/semanas.php` from it once (T1) and then extended each week to
800–1,200 words; the app keeps its short version.

Since 2026-10 (F11) the app publishes a versioned JSON export (`npm run export:weeks` in the
app writes `contracts/weeks.v1.json`, contract `mibebe.weeks` version 1) and
`tools/import-weeks.mjs` here reads **that file**, not the TypeScript source.
`node tools/import-weeks.mjs <path> --check` is the read-only freshness check. The import is mechanical-only: it updates `size` (`name`, `lengthCm`, `weightG`), in place,
and nothing else. Milestones and every word of site prose are the site's own, reviewed text
and are never overwritten; `updated` changes only on a week whose numbers actually changed.

**Week numbering (F05):** the big week number (app and site) is the week in progress,
`floor(days / 7) + 1` — one ahead of the carné's completed weeks. Term starts at **37
completed weeks** (app week 38), full term at 39 completed (app week 40). Clinical thresholds
use completed weeks; copy must never call app week 37 "a término".

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
