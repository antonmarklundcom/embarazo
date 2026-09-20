# Phase S9 — Imagery. Sonnet. Lane 2 (start after S1–S3 merge if the watcher allows; otherwise fallbacks stay).
Include `prompts/_lane2-common.md`. Sections: `plan.md` §8, §1.11; read `docs/imagery-brief.md`.
Load `higgsfield-image-pipeline` FIRST, then `higgsfield-web-imagery`, then `webimg-pipeline`.
Owns: `assets/img/**`, `docs/imagery-manifest.json`, the `image` keys in `content/semanas.php`,
`content/clusters.php`, `content/articulos.php`, `content/pages.php['/']`, `docs/log/s9.md`.
Rules: Rule 0 preflight before any generation (manifest? files? CDN 200?). Model exactly as the
skill states: `gpt_image_2_5`, `variant: "sunburst"`, `quality: "medium"`, `resolution` 1k or
2k by rendered width, explicit in every call; `high` 2k only for the home hero (+ ≤ 3 flagship
slots you name in the manifest). Never any Nano Banana call: if a slot is clearly better there
(the 42-week illustrated series is the candidate), write the prompts to
`docs/imagery-prompts-manual.md` per Rule 1 and leave the styled fallback. Cost preflight + ledger check recorded in the manifest.
CDN 403 → commit the manifest with URLs, write `docs/decisions-needed.md`, end. Convert with
webimg (`--name`, `--alt` from the brief), WebP ≤ 60 KB, place, set `image` keys. App
screenshots are NOT generated: if `assets/img/app/` is empty, leave the phone-frame fallback
and note §7 item 10.
Exit: every slot in the brief either has a file + manifest row, or a manifest row with URL +
`download_status`; verify green; PR merged; log.
