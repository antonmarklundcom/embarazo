# Phase D0 — Design system + HTML preview for embarazo.com.py. Opus session (high), interactive, lane 0.

You are designing the marketing + SEO site that sells **Mi Bebé**, a free installable
pregnancy PWA made for Paraguay (`https://app.embarazo.com.py`). This repo
(`antonmarklundcom/embarazo`) is the site. The app repo (`antonmarklundcom/embarazo.2.1`)
is context only — read `docs/app-facts.md` here instead of cloning it, unless you need a
specific file it names (`lib/weeks.ts`, `app/globals.css`, `app/conoce/page.tsx`).

Read ONLY: this file, `plan.md` §1, §2, §6, §11, and `docs/app-facts.md`. Then load the
skills `nextjs-national-lead-gen` (pattern menu + conversion patterns only; the stack is
HTML+PHP, not Next) and `higgsfield-web-imagery` (art direction; do NOT generate images in
this phase). Do not read the app repo's 265 kB DECISIONS.md.

## What to produce (all files, committed on branch `phase/d0` — nothing is "shown", it is written)

Exactly the tree in `plan.md` §11: `design/tokens.css`, `design/components.html`,
`design/preview/{home,semana-20,calculadora,articulo,instalar}.html`, `design/README.md`,
`docs/design-decisions.md`, `docs/imagery-brief.md`. Plain HTML + one shared CSS file
(`design/preview.css` that imports `tokens.css`), no build, no framework, no external
scripts, fonts self-hosted or system-fallback. Each preview must open from disk and be
right at 360 px first; desktop is a widening.

## Design brief

- **Sells the app on every page, softly.** Content pages carry ONE visible CTA per screen
  height, through the four variants in `plan.md` §2 (`content/cta.php`): primary button
  "Abrir Mi Bebé — es gratis", contextual week card, tool hand-off, and the trust strip
  "Gratis · sin tienda · funciona sin datos · tus datos quedan en tu teléfono". Product pages
  carry the hard CTA. A **sticky bottom CTA bar on mobile** is allowed once per page and
  must be dismissible and hidden under `prefers-reduced-motion`-independent rules (no
  animation needed).
- **Brand = the app's** (tokens in `docs/app-facts.md`): cream ground, petrol structure,
  terracotta as the single CTA colour, pastel section tints (arena, lavanda, celeste, rosa,
  salvia), Nunito Sans. Warm, illustrated, never clinical, never dark, never navy/pink.
- **Patterns allowed:** split hero with a phone frame showing the real week screen; bento
  feature grid on `/app` (define mobile order first); editorial big-type hubs; timeline for
  trimesters. **Not allowed:** glassmorphism, marquee, count-ups, parallax, carousels,
  pop-ups, cookie banners, email capture, forms.
- **Performance is a design constraint:** LCP < 1.5 s on a mid Android over 3G. No hero
  video, one hero image (or the fallback: a tinted panel with the week's size comparison in
  big type), system font fallback declared, no JS on content pages except the CTA/share
  button, the calculator is the only interactive island (write its real JS: FUM or FPP →
  week + "N semanas y X días" + FPP, using Naegele 280 days; port the app's `lib/pregnancy.ts`
  logic faithfully).
- **Copy:** es-PY voseo, honest privacy line, no superlatives, no medical imperatives without
  a source line. Use the real pilot content from `plan.md` §6 and the app repo plan's §9
  (titles/descriptions/H2s for `/semana/20`, `/calculadora`, `/derechos/licencia-de-maternidad`,
  `/instalar`). Write real paragraphs, not lorem.
- **Components to render in `components.html`** (each at 360 and 1024, each state): header
  with 6-item nav collapsing to a sheet, sticky CTA bar, primary/week/tool CTA, trust strip,
  week card (hub), hub card, article card, blog card, phone frame with a screenshot slot +
  fallback, bento tile ×5 tones, FAQ accordion (`<details>`, no JS), disclaimer (medical /
  legal variants, with and without reviewer line), sources list, WhatsApp share button, week
  prev/next nav, trimester timeline, calculator island (idle / result / error), Guaraní
  strip (`lang="gn"`), breadcrumbs, footer, 404.
- **`design/tokens.css`** is the contract T0 copies into `assets/css/site.css` `:root`. Name
  tokens the way the template does (`--bg`, `--surface`, `--ink`, `--muted`, `--accent`,
  `--accent-text`, `--font-display`, `--font-body`, `--radius-*`, `--space-*`, type scale
  1.25) plus the pastel tones. Keep `--accent-text` AA (4.5:1) on `--bg` and `--surface`.
- **`docs/imagery-brief.md`**: every image slot from `plan.md` §8 with ratio, px, art
  direction, the alt-text pattern and the planned file name. Model: whatever the
  `higgsfield-image-pipeline` skill names (today `nano_banana_pro`). Do not generate anything.
- **`docs/design-decisions.md`** ≤ 40 lines: what you chose, what you rejected, the mobile
  order of the bento, the CTA placement per page type.

## Optional: Claude Design
If the `/design-sync` skill is available in this session, after the files exist push
`design/components.html` (and the previews) as cards to a claude.ai/design design-system
project named "Mi Bebé — embarazo.com.py". If it is not available, skip it and say so in
`docs/design-decisions.md`; the files are the deliverable either way.

## Rules
- Anton is in the session: ask at most **three** questions, all at the start, then build. If
  he does not answer, take the `plan.md` §1 defaults and continue.
- Commit as you go; when all files exist and every preview opens and looks right at 360 px,
  open PR `phase/d0` → `main` titled "D0 design system + HTML previews" and stop. Do not
  spawn anything. Do not touch `plan.md` §1–§10 (append to §9 only). Do not start T0.
- Never use Fable for anything here. No subagents needed; if you fan out the five previews,
  use Sonnet subagents and review every file yourself before committing.

Exit: 9 files exist; each preview validates as HTML, passes an axe-core-style manual
check (headings in order, contrast, focus visible, tap targets ≥ 44 px), and the
calculator produces the app's numbers for FUM 2026-03-01 on 2026-09-20 (semana 29 ·
28 semanas y 6 días · FPP 2026-12-06). PR open.
