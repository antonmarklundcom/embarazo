# `design/` — the D0 design system for embarazo.com.py

Plain files. No build, no framework, no package manager, no network. **Open any `.html` in this
folder by double-clicking it** — `file://` works, that is the point.

```
design/
  tokens.css      the :root contract — T0 copies this into assets/css/site.css
  preview.css     the component library; @imports tokens.css
  components.html every component, every state, at 360 px and 1024 px
  preview/
    home.html         the homepage
    semana-20.html    the week exemplar (P-1)
    calculadora.html  the tool exemplar (P-2) — the only page with JavaScript
    articulo.html     the article exemplar (P-3, licencia de maternidad)
    instalar.html     the conversion page
```

## Look at it the way it was designed

Mobile first at **360 px**. Desktop is a widening, not a different design. In Chrome or Firefox:
`F12` → device toolbar → set the width to 360. Everything below 720 px is the mobile layout; 720 px
is the only layout breakpoint, and 1024 px is where the nav becomes a row and the type grows.

Start with `components.html` — it has an index and explains each component's states and the rules
that govern it. Then read the five previews as finished pages.

## What is real and what is not

**Real:** all the copy (es-PY voseo, the pilot content from `plan.md` §6 and the app plan's §9), the
week-20 figures and the 42 size comparisons (from the app's `lib/weeks.ts`), the Ley 5508/7383
numbers (from the app's `lib/derechos.ts`), the Guaraní strings (from the app, jopara, pending native
review), and the calculator — it computes, and it agrees with the app.

Try it: [`preview/calculadora.html?hoy=2026-09-20&fum=2026-03-02`](preview/calculadora.html?hoy=2026-09-20&fum=2026-03-02)
→ semana 29 · 28 semanas y 6 días · FPP 7 de diciembre de 2026. The `hoy` parameter exists so the
result is reproducible; without it the calculator uses today's date. `?fum=` and `?fpp=` prefill and
run it.

**Not real:** the `href`s between previews point at sibling files rather than at real routes, so
"Derechos", "Salud" and every article all land on `articulo.html`. There are no images anywhere —
every image slot renders its designed fallback, which is the intended shipping state until S9 (see
`docs/imagery-brief.md`). The phone frame is not a screenshot: it is the app's week screen rendered
in HTML and CSS, and it stays as the permanent fallback when real screenshots arrive.

## What T0 and T1 take from here

- **T0** copies the `:root` block of `tokens.css` verbatim into `assets/css/site.css`, and
  self-hosts Nunito Sans (400 / 500 / 700 woff2) into `assets/fonts/` with `font-display: swap`.
- **T1** splits `preview.css` into the site stylesheet **keeping every class name** — the class names
  are the contract with `partials/*.php`. `.cta-primary`, `.cta-week`, `.cta-tool`, `.trust-strip`,
  `.phone`, `.faq`, `.disclaimer`, `.sources`, `.week-nav`, `.gn`, `.calc` map one-to-one onto the
  partials listed in `plan.md` §2.
- **S4** lifts the `<script>` block at the foot of `calculadora.html` to
  `assets/js/tools/pregnancy.js` unchanged. It is a port of the app's `lib/pregnancy.ts`, with the
  same constants and the same "semanas cumplidas" convention, and its test vectors are the app's.
- **S9** reads `docs/imagery-brief.md`, not this folder.

Rules the previews encode and the build must not quietly drop: one CTA per screen height; every app
link built through `app_link()` so it carries `utm_source=site`; no forms, no pop-ups, no cookie
banner; no JavaScript on content pages; 44 px tap targets; WCAG AA contrast on the actually-painted
background, not on cream. `docs/design-decisions.md` says why.
