import { spawnSync } from 'node:child_process';
import { fileURLToPath } from 'node:url';
import path from 'node:path';

// Node 24, no dependencies. Only the supplied local origin is fetched.
const args = process.argv.slice(2);
const base = new URL(args.shift() || 'http://127.0.0.1:8730');
const repo = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '..');
const root = args.includes('--root') ? args[args.indexOf('--root') + 1] : repo;
const phpPaths = [path.join(repo, 'deploy/routes.php'), root].map(v => `base64_decode('${Buffer.from(v).toString('base64')}')`);
const result = spawnSync('php', [], {
  input: `<?php $argv = [${phpPaths.join(',')}]; require $argv[0];`,
  encoding: 'utf8', shell: process.platform === 'win32',
});
if (result.status !== 0) throw new Error(result.stderr || 'route contract failed');
const routes = result.stdout.trim().split(/\r?\n/).map(line => line.split('\t'));
const indexable = new Set(routes.filter(r => r[2] === 'indexable').map(r => r[0]));
const decode = s => s.replace(/&(#x[\da-f]+|#\d+|amp|quot|apos|lt|gt);/gi, (all, v) => {
  if (v[0] === '#') return String.fromCodePoint(parseInt(v.slice(v[1].toLowerCase() === 'x' ? 2 : 1), v[1].toLowerCase() === 'x' ? 16 : 10));
  return {amp:'&', quot:'"', apos:"'", lt:'<', gt:'>'}[v.toLowerCase()] || all;
});
const attributes = (tag, name) => {
  const m = tag.match(new RegExp(`\\s${name}\\s*=\\s*(?:"([^"]*)"|'([^']*)'|([^\\s>]+))`, 'i'));
  return m ? decode(m[1] ?? m[2] ?? m[3]) : null;
};
let failures = 0, links = 0, fragments = 0;
const fail = message => { failures++; console.error(`FAIL ${message}`); };
const cache = new Map();
async function get(target) {
  if (!cache.has(target)) {
    try {
      const response = await fetch(new URL(target, base), {redirect:'manual', signal:AbortSignal.timeout(15000)});
      cache.set(target, {status:response.status, html:await response.text()});
    } catch (error) { cache.set(target, {status:0, html:'', error:error.message}); }
  }
  return cache.get(target);
}
const sitemap = await get('/sitemap.xml');
if (sitemap.status !== 200) fail(`sitemap: HTTP ${sitemap.status}`);
const home = await get('/');
const canonicalTag = [...home.html.matchAll(/<link\b[^>]*>/gi)].map(m => m[0]).find(tag => attributes(tag, 'rel') === 'canonical');
const siteOrigin = canonicalTag ? new URL(attributes(canonicalTag, 'href'), base).origin : base.origin;
const listed = [...sitemap.html.matchAll(/<loc>(.*?)<\/loc>/gs)].map(m => {
  const url = new URL(decode(m[1]));
  if (url.origin !== siteOrigin || url.search || url.hash) fail(`sitemap noncanonical URL: ${url}`);
  return url.pathname;
});
const occurrences = new Map();
for (const route of listed) occurrences.set(route, (occurrences.get(route) || 0) + 1);
for (const route of indexable) if (occurrences.get(route) !== 1) fail(`sitemap: ${route} occurs ${occurrences.get(route) || 0} times`);
for (const route of occurrences.keys()) if (!indexable.has(route)) fail(`sitemap: nonindexable or unknown ${route}`);
console.log(`Sitemap: ${listed.length} URLs; ${indexable.size} indexable routes; exact membership and uniqueness checked`);
const pages = new Set([...indexable, ...listed, ...routes.filter(r => r[1] === '200' && r[2] === 'stub' && !['/robots.txt','/sitemap.xml'].includes(r[0])).map(r => r[0])]);
const graph = new Map(), inbound = new Map([...pages].map(p => [p, new Set()]));
for (const page of pages) {
  const response = await get(page);
  if (response.status !== 200) fail(`page ${page}: HTTP ${response.status} ${response.error || ''}`);
  const html = response.html.replace(/<!--[\s\S]*?-->|<script\b[^>]*>[\s\S]*?<\/script>/gi, '');
  if (indexable.has(page) && /<meta\b[^>]*\bnoindex\b/i.test(html)) fail(`indexable page has noindex: ${page}`);
  const tags = [...html.matchAll(/<[a-z][^>]*>/gi)].map(m => m[0]);
  const ids = new Set(tags.map(tag => attributes(tag, 'id')).filter(v => v !== null));
  const edges = new Set(); graph.set(page, edges);
  for (const tag of tags) {
    const href = attributes(tag, 'href');
    if (href === null || !/^(?:\/(?!\/)|#)/.test(href)) continue;
    links++;
    const url = new URL(href, new URL(page, base));
    if (url.origin !== base.origin) { fail(`internal link escapes local origin on ${page}: ${href}`); continue; }
    const target = url.pathname + url.search;
    const targetResponse = await get(target);
    if (targetResponse.status !== 200) fail(`broken link on ${page}: ${href} -> HTTP ${targetResponse.status} ${targetResponse.error || ''}`);
    if (url.hash && url.pathname === page) {
      fragments++;
      let id;
      try { id = decodeURIComponent(url.hash.slice(1)); } catch { id = url.hash.slice(1); }
      if (!ids.has(id)) fail(`missing same-page fragment on ${page}: ${href}`);
    }
    if (/^<a\b/i.test(tag) && pages.has(url.pathname)) {
      edges.add(url.pathname);
      if (page !== url.pathname) inbound.get(url.pathname).add(page);
    }
  }
}
const depths = new Map([['/', 0]]), queue = ['/'];
for (let i = 0; i < queue.length; i++) for (const target of graph.get(queue[i]) || []) {
  if (!depths.has(target)) { depths.set(target, depths.get(queue[i]) + 1); queue.push(target); }
}
const orphans = [...indexable].filter(p => !inbound.get(p)?.size);
for (const page of orphans) fail(`orphan: ${page}`);
for (const page of pages) if (!depths.has(page) || depths.get(page) > 3) fail(`click depth ${depths.get(page) ?? 'unreachable'}: ${page}`);
console.log(`Navigation: maximum click depth ${Math.max(...depths.values())}; ${orphans.length} indexable orphans`);
console.log(`Links: checked ${pages.size} pages, ${links} internal links (${cache.size} unique fetches), ${fragments} same-page fragments; ${failures} failures`);
process.exitCode = failures ? 1 : 0;
