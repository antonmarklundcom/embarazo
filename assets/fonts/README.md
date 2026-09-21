# Nunito Sans (self-hosted)

Installed 2026-09-20 from the official `@fontsource/nunito-sans` 5.3.0 package (SIL Open Font License 1.1, see
`LICENSE-NunitoSans-OFL.txt`): six woff2 files, weights 400/500/700, subsets `latin` and `latin-ext` (about 83 KB in total).

- `partials/head.php` loads `assets/css/fonts.css` and preloads the two critical files as soon as `nunito-sans-400-latin.woff2` exists.
  Remove the files and the site falls back to system-ui with no failing requests.
- File names are `nunito-sans-<weight>-latin.woff2` and `nunito-sans-<weight>-latin-ext.woff2`.

## Known gap (Guaraní)

Nunito Sans supplies ₲ and the vowels ĩ ũ ỹ, but two Guaraní glyphs are not in these subsets and render from a fallback system font:
**ẽ** (U+1EBD) and **g̃** (g plus the combining tilde U+0303). Both live in the package's `vietnamese` subset
(`nunito-sans-vietnamese-<weight>-normal.woff2`, U+0300-0301, U+0303-0304, U+1EA0-1EF9). To fix it, add the three vietnamese files
(about 41 KB), declare them in `assets/css/fonts.css` with `unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1,
U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB`, and re-run `bash ./verify.sh --final`.
Native Guaraní review of the strings is still pending (docs/human-todo.md).
