#!/usr/bin/env node
/**
 * Renders the per-page Open Graph cards (1200x630 JPEG) that WhatsApp, Facebook and X
 * show when someone shares a week, a topic hub or an illustrated article.
 *
 *     node deploy/og-cards.mjs
 *     → assets/img/og/semana-<n>.jpg, tema-<cluster>.jpg, articulo-<slug>.jpg
 *
 * No new art: each card sets the page's existing illustration next to its title in
 * Nunito Sans, on the same cream ground as deploy/og-card.html (the site-wide default).
 * The templates pick a card up through og_card() in lib/seo.php only when its file exists,
 * so a page without one keeps og-default.jpg. Re-run after changing a title or an image.
 *
 * Needs PHP (to read content/) and Playwright's Chromium (PLAYWRIGHT_BROWSERS_PATH or
 * CHROMIUM_PATH). Not shipped: deploy/ is excluded from the zip.
 */
import { execFileSync } from "node:child_process";
import { mkdirSync, readFileSync } from "node:fs";
import { createRequire } from "node:module";
import { dirname, resolve } from "node:path";
import { fileURLToPath } from "node:url";

const ROOT = resolve(dirname(fileURLToPath(import.meta.url)), "..");
const OUT = resolve(ROOT, "assets/img/og");

const require = createRequire(import.meta.url);
let chromium;
for (const name of ["playwright", "playwright-core"]) {
  try { ({ chromium } = require(name)); break; } catch {}
  try {
    const globalRoot = execFileSync("npm", ["root", "-g"], { encoding: "utf8" }).trim();
    ({ chromium } = require(resolve(globalRoot, name)));
    break;
  } catch {}
}
if (!chromium) {
  console.error("Playwright is not installed (npm i -g playwright).");
  process.exit(2);
}

const data = JSON.parse(execFileSync("php", ["-r", `
  require ${JSON.stringify(ROOT + "/lib/bootstrap.php")};
  $o = [];
  foreach (content('semanas') as $n => $w) {
    if (!is_array($w['image'] ?? null)) continue;
    $o[] = ['key' => 'semana-' . $n, 'kind' => 'week', 'n' => $n, 'size' => $w['size']['name'] ?? '', 'img' => $w['image']['slug'], 'w' => max($w['image']['widths'] ?? [640])];
  }
  foreach (content('clusters') as $k => $c) {
    if (!is_array($c['image'] ?? null)) continue;
    $o[] = ['key' => 'tema-' . $k, 'kind' => 'wide', 'eyebrow' => 'Guías', 'title' => $c['title'], 'img' => $c['image']['slug'], 'w' => max($c['image']['widths'] ?? [1152])];
  }
  foreach (content('articulos') as $slug => $a) {
    if (!is_array($a['image'] ?? null)) continue;
    $o[] = ['key' => 'articulo-' . $slug, 'kind' => 'wide', 'eyebrow' => content('clusters')[$a['cluster']]['title'] ?? 'Guía', 'title' => $a['title'], 'img' => $a['image']['slug'], 'w' => max($a['image']['widths'] ?? [1152])];
  }
  echo json_encode($o, JSON_UNESCAPED_UNICODE);
`], { encoding: "utf8" }));

// Inlined as data: URLs — a page set with setContent() cannot load file:// fonts.
const woff = (file) => "data:font/woff2;base64," + readFileSync(resolve(ROOT, `assets/fonts/${file}`)).toString("base64");
const font = (w) => woff(`nunito-sans-${w}-latin.woff2`);
const fontExt = (w) => woff(`nunito-sans-${w}-latin-ext.woff2`);
const esc = (s) => String(s).replace(/[&<>"]/g, (c) => ({ "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;" })[c]);
const imgUrl = (slug, w) => "data:image/webp;base64," + readFileSync(resolve(ROOT, `assets/img/${slug}-${w}.webp`)).toString("base64");

const css = `
  @font-face { font-family: "Nunito Sans"; font-weight: 700; src: url("${font(700)}") format("woff2"); }
  @font-face { font-family: "Nunito Sans"; font-weight: 700; src: url("${fontExt(700)}") format("woff2"); unicode-range: U+0100-024F; }
  @font-face { font-family: "Nunito Sans"; font-weight: 500; src: url("${font(500)}") format("woff2"); }
  * { box-sizing: border-box; margin: 0; }
  html, body { width: 1200px; height: 630px; overflow: hidden; background: #FBF7F1; }
  .card { position: relative; width: 1200px; height: 630px; font-family: "Nunito Sans", system-ui, sans-serif; color: #322E29; }
  .copy { position: absolute; left: 72px; top: 0; bottom: 0; width: 560px; display: flex; flex-direction: column; justify-content: center; gap: 22px; }
  .mark { display: flex; align-items: center; gap: 14px; }
  .dot { width: 48px; height: 48px; border-radius: 50%; background: #2F5D50; color: #FBF7F1; font-weight: 700; font-size: 20px; display: grid; place-items: center; }
  .name { font-weight: 700; font-size: 36px; color: #2F5D50; }
  .eyebrow { font-weight: 700; font-size: 26px; color: #B24A2A; text-transform: uppercase; letter-spacing: .06em; }
  .big { font-weight: 700; font-size: 104px; line-height: 1; color: #2F5D50; letter-spacing: -.02em; }
  .title { font-weight: 700; font-size: 54px; line-height: 1.12; letter-spacing: -.01em; }
  .sub { font-weight: 500; font-size: 32px; line-height: 1.25; color: #6E675D; }
  .pill { align-self: flex-start; background: #B24A2A; color: #fff; font-weight: 700; font-size: 24px; padding: 10px 24px; border-radius: 999px; }
  .round { position: absolute; right: 64px; top: 55px; width: 520px; height: 520px; border-radius: 50%; background: #F3DAD4; overflow: hidden; }
  .round img { width: 100%; height: 100%; object-fit: cover; }
  .art { position: absolute; inset: 0; background-size: cover; background-position: right center; }
  .veil { position: absolute; inset: 0; background: linear-gradient(90deg, rgba(251,247,241,.97) 0%, rgba(251,247,241,.93) 42%, rgba(251,247,241,0) 70%); }
`;

function html(card) {
  const brand = `<div class="mark"><div class="dot">MB</div><div class="name">Mi Bebé</div></div>`;
  if (card.kind === "week") {
    const size = /embrión/.test(card.size) ? "Todavía no hay embrión" : `Tu bebé, del tamaño de ${card.size}`;
    return `<div class="card"><div class="round"><img src="${imgUrl(card.img, card.w)}" alt=""></div>
      <div class="copy">${brand}<div class="big">Semana ${card.n}</div><div class="sub">${esc(size)}</div><div class="pill">embarazo.com.py</div></div></div>`;
  }
  return `<div class="card"><div class="art" style="background-image:url('${imgUrl(card.img, card.w)}')"></div><div class="veil"></div>
    <div class="copy">${brand}<div class="eyebrow">${esc(card.eyebrow)}</div><div class="title">${esc(card.title)}</div><div class="pill">embarazo.com.py</div></div></div>`;
}

mkdirSync(OUT, { recursive: true });
const launch = { headless: true };
if (process.env.CHROMIUM_PATH) launch.executablePath = process.env.CHROMIUM_PATH;
const browser = await chromium.launch(launch);
const page = await browser.newPage({ viewport: { width: 1200, height: 630 }, deviceScaleFactor: 1 });
for (const card of data) {
  await page.setContent(`<!doctype html><html lang="es-PY"><head><meta charset="utf-8"><style>${css}</style></head><body>${html(card)}</body></html>`, { waitUntil: "load" });
  await page.evaluate(() => document.fonts.ready);
  await page.screenshot({ path: resolve(OUT, `${card.key}.jpg`), type: "jpeg", quality: 80 });
}
await browser.close();
console.log(`${data.length} cards → assets/img/og/`);
