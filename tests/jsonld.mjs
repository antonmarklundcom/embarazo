import assert from 'node:assert/strict';
import { readFileSync } from 'node:fs';
import { spawnSync } from 'node:child_process';
import { fileURLToPath } from 'node:url';
import path from 'node:path';

// No packages: Node 24 fetch, plus the local PHP route contract.
const args = process.argv.slice(2);
const base = args[0]?.startsWith('http') ? args.shift() : 'http://127.0.0.1:8730';
const option = name => args.includes(name) ? args[args.indexOf(name) + 1] : null;
const repo = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '..');
const root = option('--root') || repo;
// PHP may be a .cmd shim on Windows. Send paths as data on stdin, never shell arguments.
const phpPaths = [path.join(repo, 'deploy/routes.php'), root].map(v => `base64_decode('${Buffer.from(v).toString('base64')}')`);
const result = spawnSync('php', [], {
  input: `<?php $argv = [${phpPaths.join(',')}]; require $argv[0];`,
  encoding: 'utf8', shell: process.platform === 'win32',
});
assert.equal(result.status, 0, result.stderr || 'route contract failed');
const routes = result.stdout.trim().split(/\r?\n/).map(line => line.split('\t'));
const decode = value => value.replaceAll('&amp;', '&').replaceAll('&quot;', '"').replaceAll('&#039;', "'").replaceAll('&lt;', '<').replaceAll('&gt;', '>');
const cache = new Map();
async function get(route) {
  if (!cache.has(route)) {
    const response = await fetch(new URL(route, base), {redirect:'manual'});
    cache.set(route, {status:response.status, html:await response.text()});
  }
  return cache.get(route);
}
let failures = 0, blocks = 0;
const fail = message => { failures++; console.error(`FAIL ${message}`); };
const sitemap = await get('/sitemap.xml');
assert.equal(sitemap.status, 200, 'sitemap status');
const listed = [...sitemap.html.matchAll(/<loc>(.*?)<\/loc>/gs)].map(m => new URL(decode(m[1])).pathname);
const indexable = new Set([...listed, ...routes.filter(r => r[2] === 'indexable').map(r => r[0])]);
function validate(block) {
  assert.ok(block && typeof block === 'object', 'JSON-LD object');
  if (Array.isArray(block)) { block.forEach(validate); return; }
  if (block['@graph']) { block['@graph'].forEach(validate); return; }
  const types = [].concat(block['@type'] || []);
  assert.ok(types.length, 'missing @type');
  for (const type of types) {
    const required = {
      Organization:['name','url'], WebSite:['url'], SoftwareApplication:['name','applicationCategory','operatingSystem','offers'],
      HowTo:['step'], MedicalWebPage:['headline'], Article:['headline'], FAQPage:['mainEntity'],
      BreadcrumbList:['itemListElement'], WebApplication:['name','url'],
    }[type] || [];
    for (const key of required) assert.ok(block[key] && (!Array.isArray(block[key]) || block[key].length), `${type}.${key}`);
    if (type === 'SoftwareApplication') assert.ok([].concat(block.offers).every(o => o.price === 0 || o.price === '0'), 'offers.price must be 0');
    if (['MedicalWebPage','Article'].includes(type)) {
      assert.ok(block.datePublished || block.dateModified, `${type}: date`);
      assert.ok(block.author || block.publisher, `${type}: author/publisher`);
    }
    if (type === 'FAQPage') for (const q of block.mainEntity) assert.ok(q.name && q.acceptedAnswer?.text, 'FAQ question and accepted answer');
    if (type === 'BreadcrumbList') block.itemListElement.forEach((item,i) => assert.equal(item.position, i+1, 'breadcrumb position'));
  }
}
for (const route of indexable) {
  try {
    const {status,html} = await get(route);
    assert.equal(status,200, 'indexable status');
    assert.ok(!/<meta\b[^>]*name=["']robots["'][^>]*noindex/i.test(html), 'indexable URL has noindex');
    const scripts = [...html.matchAll(/<script\b[^>]*type=["']application\/ld\+json["'][^>]*>([\s\S]*?)<\/script>/gi)];
    assert.ok(scripts.length, 'missing JSON-LD');
    for (const script of scripts) { validate(JSON.parse(script[1])); blocks++; }
  } catch (error) { fail(`${route}: ${error.message}`); }
}
console.log(`JSON-LD: checked ${blocks} blocks on ${indexable.size} pages`);

if (option('--audit')) {
  const {collections: data, records: sourceRecords} = JSON.parse(readFileSync(option('--audit'), 'utf8'));
  const counts = new Map();
  const volume = (kind, message) => {
    counts.set(kind, (counts.get(kind) || 0) + 1);
    console.log(`${args.includes('--final') ? 'FAIL' : 'WARN'} ${kind}: ${message}`);
    if (args.includes('--final')) failures++;
  };
  const titles = new Map(), descriptions = new Map();
  for (const [route, expected, flag] of routes) {
    const {status,html} = await get(route);
    if (status !== Number(expected)) fail(`${route}: status ${status}, expected ${expected}`);
    if (expected !== '200' || ['/robots.txt','/sitemap.xml'].includes(route)) continue;
    if (!/<html\s+lang="es-PY"/i.test(html)) fail(`${route}: lang must be es-PY`);
    let bytes = Buffer.byteLength(html);
    const css = new Set([...html.matchAll(/<link\b[^>]*rel="stylesheet"[^>]*href="([^"]+)"/gi)].map(m=>decode(m[1])));
    for (const href of css) {
      if (new URL(href,base).origin !== new URL(base).origin) { fail(`${route}: external CSS cannot be budgeted`); continue; }
      bytes += Buffer.byteLength((await get(href)).html);
    }
    if (bytes > 250 * 1024) fail(`${route}: HTML+CSS ${bytes} bytes exceeds 250 KB`);
    for (const match of html.matchAll(/<a\b[^>]*href="([^"]+)"[^>]*>/gi)) {
      const href = decode(match[1]);
      if ((/app\.embarazo\.com\.py/i.test(href) || /class="[^"]*\bbtn--primary\b/.test(match[0])) && !/^https:\/\/app\.embarazo\.com\.py\/(?:privacidad\/|terminos\/|borrar-cuenta\/)?\?utm_source=site(?:&|$)/.test(href)) fail(`${route}: invalid app CTA ${href}`);
    }
    if (flag === 'stub' && !/name="robots" content="noindex, follow"/.test(html)) fail(`${route}: stub lacks noindex`);
    if (flag === 'indexable' || indexable.has(route)) {
      if ([...html.matchAll(/<h1\b/gi)].length !== 1) fail(`${route}: expected exactly one h1`);
      if ([...html.matchAll(/<link\b[^>]*rel="canonical"[^>]*href="[^"]+"/gi)].length !== 1) fail(`${route}: expected one canonical`);
      for (const [pattern,seen,label] of [[/<title>(.*?)<\/title>/is,titles,'title'],[/<meta name="description" content="([^"]+)"/i,descriptions,'description']]) {
        const value = html.match(pattern)?.[1]?.trim();
        if (!value || seen.has(value)) fail(`${route}: missing or duplicate ${label}`);
        seen.set(value,route);
      }
    }
  }
  const links = async route => new Set([...(await get(route)).html.matchAll(/<a\b[^>]*href="([^"]+)"/gi)].map(m=>decode(m[1]).split('#')[0]));
  const articles = Object.values(data.articles);
  for (const entry of sourceRecords) {
    const {type, key, record} = entry;
    if (type === 'weeks' && args.includes('--final')) {
      const filled = ['bebe', 'vos', 'paraguay'].every(section => record.sections?.[section]?.length);
      if (!filled || (record.sources?.length || 0) < 2) {
        volume('week readiness', `${key}: all three sections and at least 2 sources required`);
      }
    } else if (entry.indexable && (type === 'weeks' || ['medical','legal'].includes(record.kind)) && !record.sources?.length) {
      fail(`sources: ${type}/${key} is indexable but has empty sources`);
    }
  }
  for (const [type,records] of Object.entries(data)) for (const [key,record] of Object.entries(records)) {
    const known = new Set(Object.keys(type === 'hubs' ? data.hubs : data.articles));
    for (const slug of record.related || []) {
      const exists = type === 'tools' ? routes.some(([route]) => route === slug) : known.has(slug);
      if (!slug.startsWith('planned:') && !exists) volume('related slug', `${type}/${key}: ${slug}`);
    }
  }
  for (const [key,article] of Object.entries(data.articles)) {
    const hrefs = await links(article.path);
    if (!hrefs.has(`/${article.cluster}/`)) volume('article hub',key);
    if (articles.filter(a=>a.path!==article.path && hrefs.has(a.path)).length < 2) volume('article related',key);
  }
  for (let n=1;n<=42;n++) {
    const route = `/semana/${n}/`, response = await get(route), hrefs = await links(route);
    if (response.status !== 200) fail(`${route}: week must return 200`);
    const trimester = n<=13 ? 1 : n<=27 ? 2 : 3;
    if ((n>1 && !hrefs.has(`/semana/${n-1}/`)) || (n<42 && !hrefs.has(`/semana/${n+1}/`)) || !hrefs.has(`/trimestre/${trimester}/`)) volume('week navigation',route);
    if (!articles.some(a=>hrefs.has(a.path))) volume('week article',route);
    if (!Object.values(data.weeks[n]?.sections || {}).some(section => section.length) && listed.includes(route)) fail(`${route}: seed week appears in sitemap`);
  }
  for (const cluster of Object.keys(data.hubs)) {
    const hrefs = await links(`/${cluster}/`);
    if (articles.filter(a=>a.cluster===cluster && hrefs.has(a.path)).length<5) volume('hub children',cluster);
  }
  for (const hub of ['/semana/','/trimestre/1/','/trimestre/2/','/trimestre/3/']) {
    const hrefs = await links(hub);
    if ([...hrefs].filter(href => /^\/semana\/\d+\/$/.test(href)).length < 5) volume('hub children',hub);
  }
  for (const [kind,count] of counts) console.log(`VOLUME ${kind}: ${count}`);
}
if (failures) console.error(`Foundation: ${failures} failure(s)`);
process.exitCode = failures ? 1 : 0;
