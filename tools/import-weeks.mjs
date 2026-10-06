/** Week measurements from the app's versioned export (F11, 2026-10 review).
 *
 *   node tools/import-weeks.mjs [path/to/weeks.v1.json]          update content/semanas.php
 *   node tools/import-weeks.mjs [path/to/weeks.v1.json] --check  read-only freshness check
 *
 * The app writes contracts/weeks.v1.json (`npm run export:weeks` there). This script used
 * to parse the app's TypeScript and broke on the first identifier; when it worked it
 * overwrote the site's reviewed milestones and stamped every week as freshly updated.
 *
 * Now it is mechanical-only: `size.name`, `size.lengthCm` and `size.weightG` follow the
 * app. Milestones and every word of prose are the site's own and are never written; a
 * milestone that differs from the app's is listed so a person can decide. `updated`
 * changes only on a week whose measurements changed. No network, no app-repo writes,
 * nothing evaluated.
 */
import { readFileSync, writeFileSync } from 'node:fs';
import { fileURLToPath } from 'node:url';
import { execFileSync } from 'node:child_process';

const args = process.argv.slice(2);
const check = args.includes('--check');
const input = args.find((arg) => !arg.startsWith('--')) ?? fileURLToPath(new URL('../../embarazo.2.1/contracts/weeks.v1.json', import.meta.url));
const output = fileURLToPath(new URL('../content/semanas.php', import.meta.url));

const data = JSON.parse(readFileSync(input, 'utf8'));
if (data.contract !== 'mibebe.weeks' || data.version !== 1) {
  throw new Error(`Expected contract mibebe.weeks version 1, got ${data.contract} ${data.version}`);
}
const rows = data.weeks;
if (!Array.isArray(rows) || rows.length !== 42 || rows.some((row, i) => row.week !== i + 1)) {
  throw new Error('Expected weeks 1..42 in order');
}
for (const row of rows) {
  if (typeof row.sizeComparison !== 'string' || row.sizeComparison === '') throw new Error(`Week ${row.week}: missing size`);
  for (const key of ['lengthCm', 'weightG']) {
    if (row[key] !== null && !(typeof row[key] === 'number' && row[key] > 0)) throw new Error(`Week ${row.week}: invalid ${key}`);
  }
}

const source = readFileSync(output, 'utf8');
const previous = JSON.parse(execFileSync('php', ['-r', 'echo json_encode(require $argv[1], JSON_THROW_ON_ERROR | JSON_PRESERVE_ZERO_FRACTION);', output], { encoding: 'utf8' }));

const today = new Intl.DateTimeFormat('en-CA', { timeZone: 'America/Asuncion', year: 'numeric', month: '2-digit', day: '2-digit' }).format(new Date());
const changed = [];
const milestoneDiffers = [];
const records = {};
for (const row of rows) {
  const record = previous[row.week];
  if (!record) throw new Error(`content/semanas.php has no week ${row.week}`);
  const size = { name: row.sizeComparison, lengthCm: row.lengthCm, weightG: row.weightG };
  const old = record.size ?? {};
  if (old.name !== size.name || old.lengthCm !== size.lengthCm || old.weightG !== size.weightG) {
    changed.push(row.week);
    records[row.week] = { ...record, size, updated: today };
  } else {
    records[row.week] = record;
  }
  if (record.milestone !== row.milestone) milestoneDiffers.push(row.week);
}

if (milestoneDiffers.length) {
  console.log(`Milestones that differ from the app (kept as the site has them): ${milestoneDiffers.join(', ')}`);
}
if (check) {
  if (changed.length) {
    console.error(`Stale measurements in content/semanas.php for weeks: ${changed.join(', ')}`);
    process.exit(1);
  }
  console.log('Week measurements match the app export.');
  process.exit(0);
}
if (!changed.length) {
  console.log('No measurement changed; content/semanas.php left as it is.');
  process.exit(0);
}

function phpValue(value) {
  if (value === null) return 'null';
  if (typeof value === 'string') return "'" + value.replaceAll('\\', '\\\\').replaceAll("'", "\\'") + "'";
  return String(value);
}

// Edit in place, week by week: only the `size` block and the `updated` line of a week
// whose measurements changed. Regenerating the file would reformat every hand-edited
// line in it (a dry run turned a one-week change into a 2,400-line diff).
const weekStart = /^ {4}(\d+) => \[$/gm;
const starts = [...source.matchAll(weekStart)].map((m) => ({ week: Number(m[1]), index: m.index }));
let next = source;
for (const week of [...changed].sort((a, b) => b - a)) {
  const at = starts.findIndex((s) => s.week === week);
  if (at < 0) throw new Error(`Week ${week} not found in content/semanas.php`);
  const from = starts[at].index;
  const to = at + 1 < starts.length ? starts[at + 1].index : next.lastIndexOf('\n];');
  let block = next.slice(from, to);
  const size = records[week].size;
  const sizePattern = /^( {8})'size' => \[\n(?: {12}'(?:name|lengthCm|weightG)' => [^\n]*,\n){3} {8}\],$/m;
  if (!sizePattern.test(block)) throw new Error(`Week ${week}: size block not in the expected shape`);
  block = block.replace(sizePattern, (_, indent) =>
    `${indent}'size' => [\n${indent}    'name' => ${phpValue(size.name)},\n${indent}    'lengthCm' => ${phpValue(size.lengthCm)},\n${indent}    'weightG' => ${phpValue(size.weightG)},\n${indent}],`);
  const updatedPattern = /^( {8})'updated' => '\d{4}-\d{2}-\d{2}',$/m;
  if (!updatedPattern.test(block)) throw new Error(`Week ${week}: updated line not found`);
  block = block.replace(updatedPattern, `$1'updated' => '${today}',`);
  next = next.slice(0, from) + block + next.slice(to);
}

// Refuse to write anything that does not read back as exactly the intended records.
writeFileSync(output + '.tmp', next, 'utf8');
const readBack = JSON.parse(execFileSync('php', ['-r', 'echo json_encode(require $argv[1], JSON_THROW_ON_ERROR | JSON_PRESERVE_ZERO_FRACTION);', output + '.tmp'], { encoding: 'utf8' }));
if (JSON.stringify(readBack) !== JSON.stringify(records)) {
  throw new Error(`Edited file does not match the intended records; left untouched (see ${output}.tmp)`);
}
writeFileSync(output, next, 'utf8');
execFileSync('rm', ['-f', output + '.tmp']);
execFileSync('php', [fileURLToPath(new URL('../assets/js/tools/export-weeks.php', import.meta.url))], { stdio: 'inherit' });
console.log(`Updated measurements for weeks ${changed.join(', ')}; everything else preserved.`);
