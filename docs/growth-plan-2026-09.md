# Growth plan — September 2026 (19 items, site + app)

Executor: one Claude Code session (Opus 5.5) with BOTH repos attached:
`antonmarklundcom/embarazo` (site, PHP) and `antonmarklundcom/embarazo.2.1` (app, Next.js).
Never use Fable/Mythos for this plan, its subagents or any Routine.

Goal: more installs from Google, more users coming back each week, and numbers that show
which channel works. The Google Play badge on the site is deliberately NOT in this plan
(the Play listing does not exist yet).

## Rules that apply to every item

- Read `AGENTS.md` in each repo first; they win over this file on conventions.
- Site: content lives in `content/*.php`, pages are three-line route files, no forms, no
  email capture, no pop-ups, no tracking beyond one cookieless script. Every law, office,
  price or phone number needs a `sources[]` entry. Clinical text is class (B) in
  `AGENTS.md`: concrete, conservative, ranges, no doses; log each new page in
  `docs/facts-to-verify.md` as pending medical review. Never invent a source URL.
- App: never rename `mibebe.*` storage keys, the Dexie DB name, SW cache names or route
  paths. No `middleware.ts`. `DECISIONS.md` gets one short entry per item that makes a
  product decision (the app's `AGENTS.md` restriction is for Codex workers, not this session).
- Anything that is the SAME fact in both repos (food verdicts, names, week sizes) comes from
  the app's typed seed (`lib/seed/*.json`, `lib/weeks.ts`) and is copied into the site by a
  script, never retyped by hand.
- No image generation. Where an item needs new images, write the art brief into the PR
  body and `docs/` and stop that part; Anton generates images only when he writes
  "Generate image". Reusing images already in either repo is fine.
- One branch + one PR per batch below. Gates before every push:
  - Site: `php -l` on touched PHP, `./verify.sh`, `./deploy/make-zip.sh` then
    `./verify.sh --root dist/<slug>-<date>`. The site repo has no CI; green = these pass.
    Never add `.github/workflows/` there.
  - App: `npx tsc --noEmit`, `npm run lint`, `npm test`, `npm run validate:content`,
    `PHOTO_STORAGE_ENDPOINT=https://bucket.example.test NEXT_PUBLIC_SUPPORT_EMAIL=hola@mibebe.example.py npm run build`,
    plus the Playwright specs the change touches (Chromium is at `/opt/pw-browsers`).
    `npm run test:db` needs MySQL; say so if it cannot run.
- Merge when green: app PRs when `ci.yml` is green on the head commit; site PRs when the
  local gates pass. Merge commit, delete nothing else. Fix red CI yourself; never skip or
  disable a test. Subscribe to each PR you open and keep a check-in scheduled until merged.
- After each merge, append one line per item to the "Log" section at the bottom of this
  file (in the site repo) with the PR link.

## Batch 0 — prerequisite

- App PR antonmarklundcom/embarazo.2.1#121 (canonicals to the site, `/conoce` 301,
  `assetlinks.json`). If it is not merged yet, drive it to green and merge it first:
  items 16 and 18 build on it.

## Batch A — small, app (one PR): items 7, 12, 13-check, 20-check

- **7. Week illustrations in the app.** `components/WeekHeroImage.tsx` loads
  `/assets/semanas/bebe-${week}.webp`, and `public/assets/semanas/` is empty. The site has
  all 42 at `assets/img/tamano-bebe-semana-<n>-<fruit>-{320,640}.{avif,webp}`. Add a script
  in the app (`scripts/import-site-week-art.mjs`) that copies the 640 webp from a sibling
  site checkout to `public/assets/semanas/bebe-<n>.webp` (keep the app's filename contract),
  run it, commit the files, update the component comment, `KNOWN-ISSUES.md` and the
  imagery manifest. Check the image under the hero on weeks 1, 20 and 42 with Playwright.
- **12. "Cerca tuyo" tab.** It is empty until real listings exist. If the directory seed has
  no published entries, hide the tab from `components/BottomNav.tsx` behind the existing
  flag/content check (not a deletion); the route stays reachable. Keep the nav at a
  consistent tab count; add a unit test for the rule.
- **13. Línea 155 after a low mood.** `components/MoodCheckIn.tsx` already shows a
  persistent Línea 155 card. Verify it appears right after a low entry on a real render; if
  it does, record "already done" in the log and change nothing.
- **20a. "tu sanatorio" sweep.** A grep finds no "tu sanatorio" left. Re-check for
  equivalents that assume private care ("tu clínica", "tu obstetra privado") in user-facing
  copy; neutralise to "el hospital o sanatorio" only where it is wrong for public-hospital
  users. If nothing is found, log "already done".

## Batch B — measurement, app (one PR): items 16, 17, 18

Extend the existing anonymous counters (`lib/stats/contentStats.ts`, `/api/v1/stats`,
admin views). Same privacy shape as today: no user id, no IP, day granularity. Add a
`DECISIONS.md` entry and re-check `docs/ANDROID-LAUNCH.md` §3.1 (Data safety) still holds.

- **16. Arrivals from the site** by `utm_medium` (page type: week, tool, article, hub,
  home). `lib/onboarding/siteParams.ts` already reads the params; count once per install,
  not per visit.
- **17. Activation and return.** Counters for: onboarding finished; first tool used; opened
  again 7+ days after onboarding (device-local flag, sends one bare increment). Show the
  three in `/admin` as a weekly table.
- **18. Clinic QR source.** Read `?src=<slug>` (lowercase, `[a-z0-9-]{1,40}`, otherwise
  dropped) alongside the UTM params; count per `src` per day. Add a short doc
  (`docs/QR-CLINICS.md`) with the URL shape Anton prints on cards.

## Batch C — site, small (one PR): items 19 and 3

- **19. Cloudflare Web Analytics.** Already integrated: `content/site.php`
  `'analytics' => ['cloudflare' => '<token>']`. Anton has not given a token: do NOT invent
  one. Make sure the switch, `verify.sh` coverage and the privacy page wording are ready,
  and put "paste the token here" in `docs/human-todo.md`. Code only.
- **3. "X meses de embarazo" pages, months 1–9.** New hub `/meses/` + `/meses/<n>/`
  (or the path shape the site's routing already favours; check `router.php` and
  `content/semanas.php`). Each page: the week range for that month (use the same
  week→month rule the week pages already state), the trimester, 3–5 key changes drawn from
  the week records, and links to every week in it plus the calculator. Add to the sitemap,
  nav depth ≤ 2, JSON-LD like the week pages. Answer the query in the first 100 words.

## Batch D — site, content (one PR each): items 4, 1, 2

- **4. Early symptoms and "¿estoy embarazada?".** Two cluster articles under `/salud/`:
  "síntomas de embarazo en las primeras semanas" and "¿estoy embarazada? cuándo hacer el
  test". Class (B) clinical text, alarm signs link to `/salud/senales-de-alarma`, deep link
  to the app with `modo=planeando` where it fits. 800–1,500 words each.
- **1. "¿Puedo comer…?" pages.** Generate from the app's `lib/seed/food.json` via a site
  script (`tools/import-food.php` or similar) into `content/comer.php`: hub
  `/alimentacion/puedo-comer/` with search-free A–Z list and filters by verdict, plus one
  page per food whose record has enough text (skip thin ones; no near-duplicate pages).
  Verdict, reason and source come verbatim from the seed. Title shape
  "¿Puedo comer <food> embarazada? | Mi Bebé". CTA to the app's `/herramientas/comer`.
- **2. Baby names.** From `lib/seed/names.json`: hub `/nombres/` and pages by origin and
  gender (e.g. `/nombres/guaranies/`, `/nombres/guaranies/nena/`). Not one page per name
  (thin). Meaning text verbatim from the seed; add to `docs/facts-to-verify.md` for a native
  Guaraní check. CTA to the app's `/herramientas/nombres`.

## Batch E — app, sharing and retention (one PR each): items 6, 11, 8, 14, 10

- **6. Share buttons on the site** (site PR): WhatsApp share link on week pages and the
  calculator result ("Estoy de N semanas"), plain `https://wa.me/?text=` anchor, no script
  SDKs, no tracking. The OG image already exists per week; check it renders in the preview.
- **11. Shareable week card in the app.** `components/ShareCard.tsx` draws a canvas card.
  Restyle it in the app's tokens with the week illustration from item 7, the baby nickname
  if set, and "Semana N · <size>". Keep the CSP e2e for canvas green.
- **8. Weekly push opt-in at the end of onboarding.** Push exists (`lib/push/*`,
  `DEFAULT_CATEGORIES = ["recordatorios"]`). Add a last onboarding step "¿Te aviso cuando
  empieza tu semana nueva?" with Sí / Ahora no. Permission is requested only on "Sí" (never
  on load). iOS without install gets the existing honest copy. e2e for both answers.
- **14. Rating prompt.** The in-app "¿Cómo te está yendo?" routes to WhatsApp today. Add a
  config switch (`NEXT_PUBLIC_PLAY_STORE_URL`): when set AND running inside the TWA
  (`document.referrer` starts with `android-app://`), happy answers go to the Play listing;
  otherwise behaviour is unchanged. Unset by default.
- **10. Daily tips 33 → 100+.** `lib/dailyTips.ts` `{ id, text, trimester }`. Write 70+ new
  es-PY voseo tips, spread over trimesters 1–3 and 0, class (B) rules, no doses, no
  duplicates of existing ones. Log them in `docs/decisions-needed.md` for medical review.

## Batch F — images needed, prepare only: item 15

- **15. Ejercicios.** 12 entries are unpublished until step images exist
  (`public/assets/ejercicios/README.md`). Write a precise art brief per exercise (pose,
  framing, style matching the app illustrations, filenames the code expects) into that
  README and the PR body, plus a script that places and optimises the files once they
  exist. Do not generate images. Also give the tile its own icon in
  `components/ToolIcon.tsx` (KNOWN-ISSUES item).

## Batch G — large, app: item 9 "Ya nació" baby mode (split into PRs)

The app has no life after the birth today. Plan it in `docs/` first (one page), then build:
1. Model: a "nació" date on the pregnancy record (`lib/types.ts`, Dexie migration adding
   the field only, no rename), a "Ya nació" action on Hoy near week 37+.
2. Home for 0–12 months: baby age in weeks/months, the PAI vaccine calendar (from the
   existing vaccine content, sourced), the newborn paperwork (reuse
   `despues-del-nacimiento` content), feeding and sleep basics (class B), alarm signs for a
   newborn linking to `/emergencia`.
3. Push: switch weekly messages to baby-age messages after the birth.
4. Site: one hub `/bebe/` later, only after the app part ships.

## Batch H — item 20b Guaraní (prepare only)

Guaraní stays hidden until a native speaker reviews it (`docs/GUARANI-REVIEW.md`). Code
work: make sure every `gn` string is exported in the review file, the switch to show
Guaraní is one flag, and the site's font subset note is in `docs/human-todo.md`. Do not
enable it.

## Report to Anton after each batch

Under 15 lines: PR links, merged or not, what changed for a user, anything waiting on him
(tokens, images, reviewers).

## Log

- 7 — done: the site's 42 week illustrations are in the app hero, framed rather than composited because they are opaque (`lib/hero/weekArt.ts`); the transparent renders wait on Anton's approval — antonmarklundcom/embarazo.2.1#122
- 12 — done: "Cerca tuyo" leaves the bottom nav while no listing or event is published (4 tabs today); routes stay — antonmarklundcom/embarazo.2.1#122
- 13 — already done: the Línea 155 card shows right after a low mood (verified on a real render), no change — antonmarklundcom/embarazo.2.1#122
- 20a — already done: no user-facing copy assumes private care, no change — antonmarklundcom/embarazo.2.1#122
- 16 — done: arrivals from the site counted by `utm_medium`, once per install; `/admin/metricas` "Llegadas desde el sitio" — antonmarklundcom/embarazo.2.1#123
- 17 — done: onboarding finished (by channel), first tool, opened again 7+ days later; weekly table in `/admin/metricas` — antonmarklundcom/embarazo.2.1#123
- 18 — done: `?src=<slug>` counted per card per day; URL to print in `docs/QR-CLINICS.md` (app) — antonmarklundcom/embarazo.2.1#123
- 19 — done (code only): Cloudflare switch checked by `verify.sh` in both positions, privacy page wording; token waits on Anton (`docs/human-todo.md` 3) — antonmarklundcom/embarazo#22
- 3 — done: `/mes/` hub and `/mes/1/` … `/mes/9/`, weeks from `week_month()`, key changes from week milestones — antonmarklundcom/embarazo#22
- 4 — already done: `/planear/primeros-sintomas/` and `/planear/test-de-embarazo-cuando/` (~1,070 words each, class B, alarm link, `modo=planeando` hand-off) cover both articles; no near-duplicates under `/salud/`
- 1 — built, not live: `tools/import-food.php` + `/alimentacion/puedo-comer/` hub and pages, gated on `reviewedBy` like the app (DECISIONS PR-19); 0 of 62 foods reviewed, so nothing publishes yet (`docs/human-todo.md` 3b) — antonmarklundcom/embarazo#23

