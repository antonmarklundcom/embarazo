# T0 human follow-up

1. Supply the six licensed Nunito Sans WOFF2 files listed in `assets/fonts/README.md` (400, 500, 700; latin and latin-ext), including the upstream license. Confirm Guaraní marks and U+20B2 coverage. Until then the site uses its system font fallback; no font preloads are emitted.
2. Confirm the WhatsApp number and contact email; phone and all contact values remain null. The floating WhatsApp button stays hidden.
3. Decide on one cookieless analytics provider and configure it locally, or explicitly choose none. Analytics remains null; no tracking script is shipped. Do not put credentials in this log.
4. Recruit a medical reviewer; no reviewer identity or endorsement is claimed.
5. Manager: run `bash tools/install-hooks.sh` to activate the workflow guard, then perform the PHP server click-through and manage the commit/PR/merge. The installer was not run by the worker.
6. T1: replace the homepage stub, complete the foundation and adapt template components to the design tokens. The original CSS component rules were retained; T0 is not the final design implementation.

The 1200×630 `assets/img/og-default.png` and SVG favicon were generated locally in petrol on cream. No replacement PNG is pending.
