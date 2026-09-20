# D0 review — 2026-09-20

Reviewed on `phase/d0-review`. Scope: the four requested checks only; no design or copy changes. Read AGENTS.md, plan.md §§1, 2, 3, 6 and 11, app facts, design decisions, README, tokens, stylesheet, component gallery and all five previews. A source title establishes a bibliographic lead, not proof that its text supports a precise claim. This is a repository trace audit, not fresh medical/legal verification.

## 1. CLASS CONTRACT

All ten partials have usable CSS selectors and actual example markup. Shared button styling is defined at `design/preview.css:183` and `design/preview.css:205`.

| T1 partial | CSS contract (design/preview.css) | Actual use (design/components.html) |
|---|---|---|
| cta-primary | `.cta-primary`, heading/paragraph/button descendants — :443 | :306 |
| cta-week | `.cta-week`, `.cta-week__n`, `.cta-week__body` — :456, :465, :477 | :336–341 |
| cta-tool | `.cta-tool`, heading/paragraph/button descendants — :483 | :365 |
| trust-strip | `.trust-strip`, list items, primary-CTA context — :495, :508, :521 | :310, :383 |
| disclaimer | `.disclaimer`, medical/legal variants, icon, pending/reviewer — :871, :885–889 | :716, :730, :736, :744 |
| sources | `.sources`, list/citation/link descendants, `.updated` — :913–924 | :775–786 |
| wa-share | `.wa-share`, `.wa-share__label`, `.btn--wa` — :930–931, :227 | :798–804 |
| week-nav | `.week-nav`, `.week-nav__link`, next variant — :933–954 | :817–825; missing previous uses a non-link span |
| phone-frame | `.phone`, `.phone__screen`, mock children and fallback — :669–749 | :558–583 |
| guarani-strip | `.gn`, `.gn__label`, definition list, `.gn__note` — :1069–1088 | :930–942 |

**PLAINLY WRONG**

- None. No missing or incomplete class contract under the requested existence/use test. Partial filenames need not equal their root class names (`phone-frame` → `.phone`, `guarani-strip` → `.gn`).

**NEEDS ANTON**

- None.

**PASS**

## 2. TOKENS

Extracted every `var(--...)` reference from `design/preview.css`, `design/components.html` and the five `design/preview/*.html` files with Node, then compared the distinct names to declarations in `design/tokens.css`. Result: **77 distinct names, 77 defined, zero undefined**. Definitions begin at `design/tokens.css:16`; desktop overrides begin at :150.

Extracted inventory (including intentional negative type-scale steps):

```text
--accent --accent-dark --accent-text --accent-tint --alert --alert-bg --bg
--ctabar-h --dur --dur-fast --ease --focus --focus-offset --focus-width
--font-body --font-display --font-mono --gutter --header-h --ink
--leading-body --leading-heading --leading-tight --line --line-strong
--measure --measure-narrow --muted --on-accent --on-petrol --petrol
--petrol-dark --petrol-tint --radius-card --radius-l --radius-pill --radius-s
--radius-tile --radius-xs --rose --sage --sage-text --shadow-bar
--shadow-lift --shadow-soft --space-2xl --space-2xs --space-3xs --space-l
--space-m --space-s --space-xl --space-xs --step--1 --step--2 --step-0
--step-1 --step-2 --step-3 --step-4 --step-5 --step-6 --surface
--surface-sunken --tap --tone-arena --tone-arena-text --tone-celeste
--tone-lavanda --tone-rosa --tone-salvia --weight-bold --weight-medium
--weight-regular --whatsapp-text --wrap --wrap-text
```

**PLAINLY WRONG**

- None. No obvious token-name typo. `--step--1` and `--step--2` are explicitly defined at `design/tokens.css:86–87`, not misspellings.

**NEEDS ANTON**

- None. Palette approval and contrast measurement are outside this token-reference check; documented darker values are not undefined tokens.

**PASS**

## 3. FACT TRACING

Direct traces: `docs/app-facts.md:86–90` supports Ley 5508/2015, 18/24 weeks, 90/60 minutes, two weeks of paternity leave, one-year protection, Ley 7383/2024 and four paid hours, Ley 5099/2013 and MSPBS gratuity, IPS 100%, week 38, four contribution months, and CT art. 261+ / 5%. This covers their repeated appearances in `design/preview/articulo.html:7,53–56,62,64,70,73–74,78–83,116–118,124–125,147–158,176,187,196,235,254,273–283`. The worked dates trace to those rules and are checked in §4.

The article's own list at `design/preview/articulo.html:273–283` names the three laws, IPS subsidy guidance and the Labour Code, and identifies IPS/BACN. The extra thresholds at :65–72 (before week 35, under 2 kg, three cases, one month per additional child), :150 (monthly frequency), :152–154 (7/24 months, more than 10 workers), and :157 (salary-minimum/per-child basis) have a named legal source but are not reproduced in app-facts. They are bibliographically traceable, with verification limitations recorded below.

For the week preview, `docs/app-facts.md:71–73` supports the 19+0–19+6/friendly-week-20 convention and 280 days = 40 weeks; :27–28 supports 42 app weeks and 141 SEME/911; :87–88 supports the law numbers, four paid hours and MSPBS gratuity. Its own list at `design/preview/semana-20.html:272–279` identifies MSPBS, CLAP/OPS, WHO and BACN, but does not supply source text or links for exact clinical figures.

For installation, `docs/app-facts.md:9,14–17,27,32–33,51–55` supports free PWA/no store, optional accounts, Google backup, the conditional privacy statement, 42 weeks and **17** enumerated tool routes. The 17-tool count at `design/preview/instalar.html:166` therefore is supported; full offline availability is a separate claim.

**PLAINLY WRONG**

- F1 — `design/preview/instalar.html:60,231`: unconditional “tus datos quedan en tu teléfono” drops the account distinction explicitly required by `docs/app-facts.md:14–17`. The same page gives the correct distinction at :169–171. The objective defect is the contradictory scope of the short claim; no copy was changed.

**NEEDS ANTON**

- F2 — `design/preview/articulo.html:164–165,207,216,265`: MTESS's full office name, complaint/inspection role and referral claims have no entry in app-facts or the page's own source list. The free legal advice availability at :168–169 is likewise unsupported. Supply a traceable official source.
- F3 — `design/preview/articulo.html:229,236,243,248` and `design/preview/semana-20.html:230,237,244`: 6/5/6-minute and 5/6/7-minute reading estimates, and the eight-article count, trace to neither permitted evidence set. Eight rights articles is planned in plan.md §3.4, but is not established as published content by app-facts or this page's sources. Confirm these as preview estimates or derive them from the eventual content.
- F4 — `design/preview/articulo.html:65–72,150,152–158`: the precise additional legal thresholds listed above have named-law leads only. The bibliography at :273–283 has no links, relevant provisions or supporting excerpts. Confirm the exact provisions and monthly/age/headcount qualifications before treating these figures as verified; absence of evidence here is not a finding that the figures are false.
- F5 — `design/preview/articulo.html:107–109,297`: leave-date calculation is documented, but saving the three dates with a reminder and offline operation are not established in app-facts or this page's legal sources.
- F6 — `design/preview/semana-20.html:59–69` and `design/preview/instalar.html:68`: banana comparison, 25.6 cm, 300 g and the week-20 measurement-method switch cannot be verified from `docs/app-facts.md:79–82`, which describes fields without the week-20 record. The week page names WHO growth charts at :276 but supplies no relevant table/page or evidence for crown-to-heel length. Installation has no sources list. Obtain the actual supported week record/source.
- F7 — `design/preview/semana-20.html:103–112,118–126,149,163,187–188,220`: exact clinical figures needing a verifiable passage are morphology at weeks 20–24 / poorer visibility after 24, four heart chambers, duration 20–40 minutes, first movements at 18–22 or about 16, formal counting from 28, fever threshold 38°C, expected birth at 37–42, sex visible from 16, and second trimester 14–27. The broad source titles at :272–277 are leads, not demonstrated support for those numbers; app-facts does not state them. Confirm gestational-age convention as well as the figures.
- F8 — `design/preview/semana-20.html:134–140,169–170`: four hours **per month** adds a qualification absent from app-facts (named Ley 7383 is a lead); the October–March dengue window has no identified supporting source. Ley 5099 is documented for MSPBS, not the extension to IPS in the free-care FAQ. Verify the extra scope instead of inferring it from MSPBS gratuity.
- F9 — `design/preview/instalar.html:7,55,158,228`: less than 5 MB and two-tap installation have no support in app-facts and no page sources. Confirm a measured storage definition and actual device flow. `design/preview/instalar.html:86` also supplies no evidence for Android being the majority in Paraguay.
- F10 — `design/preview/instalar.html:60,69,161–168,231,248` and `design/preview/semana-20.html:96,293`: complete offline operation after the first visit, including all 42 weeks/guides/17 tools, is not documented in app-facts. Neither are installation claims about automatic updates with no download, no permissions, export on phone change (:208), and local-data deletion on uninstall (:215–216). Confirm these product behaviors; PWA status alone does not prove them.
- F11 — `design/preview/instalar.html:93–102,112–118,130–133,183–193,199–201`: browser-specific installation behavior (including Safari-only, Chrome prompt timing, in-app-browser exclusions and equivalent menu actions) has no trace in app-facts or a page source list. Obtain supported browser/version guidance rather than treating this review as verification of those instructions.

Source consultation/update dates and the phone's illustrative 9:41 clock are document/mock metadata, not verified real-world events. Source titles alone were not silently promoted to legal or clinical proof. No external correctness audit or copy rewrite was performed.

**FAIL**

## 4. LEAVE ARITHMETIC

Applied `docs/app-facts.md:89–90` using UTC midnight and 86,400,000 ms/day in Node v24.19.0. Computed earliest start = FPP − 14; end = start + 126; IPS reposo = FPP − 21.

| FPP | Earliest start | End | IPS reposo | End − start | End − FPP | Preview |
|---|---|---|---|---|---|---|
| 2026-12-07 | 2026-11-23 | 2027-03-29 | 2026-11-16 | 126 days | 112 days | `design/preview/articulo.html:95`: exact match |
| 2027-01-15 | 2027-01-01 | 2027-05-07 | 2026-12-25 | 126 days | 112 days | `design/preview/articulo.html:96`: exact match |

Also computed 18 × 7 = 126 days and 2 × 7 = 14 days, agreeing with :53–54, :62 and :73. The formulas printed at :100–101 agree exactly. (280 − 21) / 7 = 37 completed weeks, which is friendly week 38 under `docs/app-facts.md:73`; thus :82–83 does not establish an arithmetic defect. No inclusive-day subtraction was introduced: the requested rule explicitly says start + 126.

**PLAINLY WRONG**

- None; both worked examples and all three printed formulas at `design/preview/articulo.html:95–101` match the reference rules.

**NEEDS ANTON**

- None for arithmetic. This PASS does not independently validate the underlying legal rules.

**PASS**
