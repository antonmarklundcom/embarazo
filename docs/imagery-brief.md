# Imagery brief — the slots D0 declares, for S9 to fill

Written in D0 (2026-09-20). **Nothing was generated in this phase.** S9 generates against this file
under `higgsfield-image-pipeline` Rules 0–2 (preflight, manifest first, ledger, allowlist) and
places every file through `webimg` with `--name` and `--alt`.

## Model — Anton's 2026-09-20 override

`gpt_image_2_5`, variant **`sunburst`**, quality **`medium`**, resolution chosen per slot by rendered
width. Quality `high` at 2k is permitted for the home hero and up to three further flagship slots;
**this brief spends it on the home hero only** and explicitly declines the other three, which keeps
the phase at ≈65 credits (plan §8). No session calls any Nano Banana model. Where Nano Banana Pro
would be clearly better, the prompt goes to `docs/imagery-prompts-manual.md` for Anton to paste into
the Higgsfield UI himself — one such slot is flagged below.

Run the cost preflight (`get_cost: true`) before the first batch and report the real numbers; the
credit figures here are the plan's estimate, not a measured price.

Real app screenshots are **never** generated. They come from the app repo's `npm run gen:screenshots`
or from a real device (human-inputs #10). Until they land, `partials/phone-frame.php` renders the CSS
mock built in D0 — it is a finished component, not a placeholder, so no slot is blocked on it.

## House style — repeat in every prompt, verbatim

> Warm flat editorial illustration, soft organic shapes, visible paper-grain texture, gentle
> hand-drawn line work. Palette strictly: cream #FBF7F1 ground, deep petrol green #2F5D50, terracotta
> #C96342 accent, and soft pastels — blush #F3DAD4, sky #D9E5EC, sage #DFE8D8, lavender #E6E0F0,
> sand #F8E2CB. Flat lighting, no gradients beyond a single soft wash, no drop shadows. Paraguayan
> subtropical setting: mango and lapacho trees, a tereré thermos and guampa, tiled patio floors,
> corrugated roofs, strong midday light. People are warm-brown-skinned Paraguayan women and families,
> drawn with dignity and calm, never distressed, never clinical.
>
> Negative: photorealism, 3-D render, stock-photo look, hospital white, medical equipment, navy blue,
> hot pink, neon, glossy highlights, lens flare, text, letters, numbers, watermarks, logos, UI
> elements, hands with wrong finger counts, fetus anatomy, blood, needles, sad or frightened faces.

**Rule 1 of the imagery skill holds:** illustrative people are fine, fabricated evidence is not. No
image is ever captioned as a named person, a staff member, a testimonial avatar, or a real sanatorio.
No image asserts a fact — the facts live in the copy, with a source.

## Alt-text pattern

es-PY, a descriptive sentence of what is actually shown, the Paraguayan context named where natural,
no "imagen de", no keyword stuffing, no claim the picture cannot support. Pattern:
`<sujeto y acción>, <lugar o contexto paraguayo>`. Decorative-only images get `alt=""` and are
declared as such — but no slot in this brief is decorative: each one earns a sentence.

---

## Slot 1 — Home hero · **the one `high` 2k of the build**

| | |
|---|---|
| File | `assets/img/hero/embarazo-paraguay-mi-bebe.webp` |
| Ratio · px | 21:9 · generate 2048×878, serve 1152 / 768 / 480 |
| Quality | **`high` 2k** (3 credits) — the LCP element on the most-linked page |
| Rendered | up to 1152 px wide on desktop, 328 px at 360 |
| Alt | `Una mujer embarazada mira su celular sentada en un patio paraguayo, con un termo de tereré al lado.` |

Art direction: a pregnant woman in her late twenties sitting on a tiled patio step in the late
afternoon, phone in one hand, guampa and thermos beside her, a mango tree and a low wall behind. She
is calm and unhurried — this is the "you are not alone with this" image, not an advertising smile.
Composition leaves the left third quiet so the H1 can sit over it on desktop; the right third holds
the figure. Warm sand and sage dominate; terracotta appears only as a small accent (her top, or the
thermos strap).

**Performance gate:** ≤ 120 KB after conversion, explicit `width`/`height`, `fetchpriority="high"`,
no lazy-load. If it cannot come in under 120 KB at acceptable quality, **ship the `size-panel`
fallback instead** — `design/preview/home.html` is already designed around it and LCP < 1.5 s on a
mid Android over 3G outranks having a picture.

---

## Slot 2 — Six cluster hub headers

| | |
|---|---|
| Ratio · px | 16:9 · generate 2048×1152, serve 1152 / 768 / 480 |
| Quality | `medium` **2k** (1.5 credits each · 9 total) |
| Rendered | up to 1152 px wide |

| Cluster | File | Motif | Tone to lead with |
|---|---|---|---|
| derechos | `assets/img/hubs/derechos-embarazo-paraguay.webp` | A pregnant woman at a desk with a folder and a stamped form; a calendar on the wall | lavanda |
| tramites | `assets/img/hubs/tramites-embarazo-paraguay.webp` | A hand holding a carné perinatal and a cédula in a queue under a tin roof | arena |
| salud | `assets/img/hubs/salud-en-el-embarazo.webp` | A midwife's hands measuring a belly with a tape, warm room, no equipment | celeste |
| alimentacion | `assets/img/hubs/alimentacion-en-el-embarazo.webp` | A table with a thermos, guampa, yuyos in a bundle, mandioca and a mango | salvia |
| parto | `assets/img/hubs/parto-en-paraguay.webp` | A packed hospital bag by a door at night, slippers beside it | petrol tint |
| planear | `assets/img/hubs/planear-el-embarazo.webp` | A couple looking at a wall calendar together in a kitchen | rosa |

Alt pattern per hub: `<lo que se ve>, ilustración del tema <cluster> en Paraguay.` Each header is
tinted to its cluster tone in CSS, so the illustration must read on a light ground and must not carry
its own background colour block.

---

## Slot 3 — 42 week renders · **flagged for the manual Nano Banana Pro route**

| | |
|---|---|
| Files | `assets/img/semanas/bebe-1.webp` … `bebe-42.webp` |
| Ratio · px | 1:1 · 1024×1024 |
| Quality | `medium` **1k** (1 credit each · 42 total) if generated in-session |
| Rendered | 328 px at 360, 480 px on desktop — 1k is already 2× |

Each render is the week's **size comparison object**, not a fetus: the Paraguayan progression from
`lib/weeks.ts` (semilla de chía → semilla de amapola → grano de sésamo → … → banana at 20 → mazorca
de choclo → mamón → coco → sandía). One object, centred, on the week's pastel tone, in the house
style. Never anatomy, never a rendered baby.

Alt pattern: `El tamaño de tu bebé en la semana <n>: <objeto>.` — e.g.
`El tamaño de tu bebé en la semana 20: una banana.`

> **Flagged to the manual route.** Forty-two images have to look like one illustrator drew them in one
> afternoon; that is exactly what a reference Element plus Nano Banana Pro is good at, and it is free
> for Anton in the UI where it costs 42 credits here. The standalone, self-contained prompt — no
> `<<<element_id>>>` placeholder, palette and style restated in words — is in
> `docs/imagery-prompts-manual.md`. **If Anton does not want to run it, S9 generates the series with
> `gpt_image_2_5` Sunburst `medium` 1k as specified above**; do not block the phase on this. Either
> way the series is generated once and shared back to the app's `public/assets/semanas/`.
>
> Until any render exists, week pages use the `size-panel` fallback — the week number and the size
> comparison in big type on the arena tone. It is already built and it is genuinely good, so shipping
> weeks without renders is acceptable.

---

## Slot 4 — Nine article card images (the pilots and the expanded app guides)

| | |
|---|---|
| Ratio · px | 16:9 · 1024×576 |
| Quality | `medium` **1k** (1 credit each · 9 total) |
| Rendered | 72 px square as a card thumb (centre crop), up to 640 px as an article header |

| Article | File |
|---|---|
| `/derechos/licencia-de-maternidad` | `assets/img/articulos/licencia-de-maternidad-paraguay.webp` |
| `/derechos/derechos-de-la-embarazada-que-trabaja` | `assets/img/articulos/derechos-embarazada-que-trabaja.webp` |
| `/tramites/carne-perinatal` | `assets/img/articulos/carne-perinatal-paraguay.webp` |
| `/tramites/despues-del-nacimiento` | `assets/img/articulos/tramites-despues-del-nacimiento.webp` |
| `/tramites/control-prenatal-ips-vs-privado` | `assets/img/articulos/control-prenatal-ips-o-privado.webp` |
| `/salud/dengue-en-el-embarazo` | `assets/img/articulos/dengue-en-el-embarazo.webp` |
| `/salud/senales-de-alarma` | `assets/img/articulos/senales-de-alarma-embarazo.webp` |
| `/salud/vacunas-en-el-embarazo` | `assets/img/articulos/vacunas-en-el-embarazo-pai.webp` |
| `/alimentacion/terere-en-el-embarazo` | `assets/img/articulos/terere-en-el-embarazo.webp` |

One clear object or gesture per card, centred so a square crop never loses the subject — a stamped
form, a carné, a thermos and guampa, a mosquito-screened window, a vaccination card. **`senales-de-alarma`
must stay calm:** a phone showing a call in progress on a bedside table, not an alarmed face. That
article is read by someone already frightened.

Alt pattern: `<objeto o gesto>, ilustración del artículo sobre <tema>.`

---

## Slot 5 — Default Open Graph card

| | |
|---|---|
| File | `assets/img/og/embarazo-com-py-og.webp` (plus a PNG fallback for older crawlers) |
| Ratio · px | 1.91:1 · **1200×630 exactly** |
| Quality | `medium` **2k** (1.5 credits), downscaled to 1200×630 |
| Alt | `Mi Bebé, la app de embarazo hecha en Paraguay.` |

Generate the illustration **without any text** and let the site composite the wordmark and the line
"La app de embarazo hecha en Paraguay" in Nunito Sans over it, so the type is crisp and editable.
Cream ground, the hero's patio motif simplified, terracotta accent, generous left margin for the
lockup. Page-specific OG cards are out of scope for this build; every page falls back to this one.

---

## Budget

| Batch | Model · quality · res | Count | Credits |
|---|---|---|---|
| Home hero | `gpt_image_2_5` sunburst · high · 2k | 1 | 3 |
| Hub headers + OG | `gpt_image_2_5` sunburst · medium · 2k | 7 | 10.5 |
| Week renders | `gpt_image_2_5` sunburst · medium · 1k *(or 0 via the manual route)* | 42 | 42 *(or 0)* |
| Article cards | `gpt_image_2_5` sunburst · medium · 1k | 9 | 9 |
| **Total** | | **59** | **≈64.5** *(≈22.5 if the weeks go manual)* |

## Gates before S9 reports done

- Every file through `webimg` with `--name` and `--alt`; no filename or alt typed by hand afterwards.
- WebP ≤ 60 KB below the fold, hero ≤ 120 KB, explicit `width`/`height` on every `<img>`, everything
  below the fold `loading="lazy"`.
- `docs/imagery-manifest.json` committed, with the slot, file, alt, ratio, px, model, quality,
  resolution and prompt for every image — written *before* generating, per the pipeline skill.
- Any slot left unfilled keeps its fallback and is listed in `docs/log/s9.md`. An empty slot is a
  fine outcome; an invented one is not.
