# Phase S1 — Product pages. Sonnet. Lane 2, parallel with S2–S9.
Include `prompts/_lane2-common.md`. Sections: `plan.md` §3.1, §6.1.
Owns: `app/**`, `app/comparacion/**`, `instalar/**`, `privacidad/**`, `preguntas-frecuentes/**`,
`familia/**`, `sobre/**`, `contacto/**`, their records in `content/pages.php`, `docs/log/s1.md`.
Rules: `/instalar` is the conversion page — device detection is CSS/UA-free: show both OS
sections with Android first, iPhone second, anchors `#android` `#iphone`; `HowTo` schema via
`howto[]`. `/app` bento in the mobile order from `docs/design-decisions.md`, every tile deep-
links through `app_link('app', '<feature>')`. `/app/comparacion` is honest: a table of
Paraguay content · offline · sin cuenta · data policy · price vs Flo, Preggers, BabyCenter;
no invented claims about competitors (say "según su sitio, <fecha>"). `/sobre` names the
reviewer slot as "en proceso" when null. `/contacto` shows only channels present in
`content/site.php`. Use the phone-frame partial with fallback; no screenshots generated.
Exit: 9 URLs render full copy, no stubs; FAQPage on `/preguntas-frecuentes`; HowTo on
`/instalar`; every CTA passes the verify href rule; Lighthouse mobile ≥ 95 ×4 on `/instalar`
(one run); verify green; PR merged; log.
