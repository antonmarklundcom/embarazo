/** One-time seed import. Re-runs refresh seed facts, preserving editorial fields.
 * No TypeScript execution, dependencies, network, or app-repo writes.
 */
import { readFileSync, writeFileSync, existsSync } from 'node:fs';
import { fileURLToPath } from 'node:url';
import { execFileSync } from 'node:child_process';

const input = process.argv[2] ?? 'C:\\dev\\embarazo.2.1\\lib\\weeks.ts';
const output = fileURLToPath(new URL('../content/semanas.php', import.meta.url));
const source = readFileSync(input, 'utf8');
const raw = source.match(/const RAW_WEEKS:\s*RawWeek\[\]\s*=\s*(\[[\s\S]*?\n\]);/);
if (!raw) throw new Error('RAW_WEEKS literal not found');
// Tokenize only the literal grammar used by the seed; never eval app code.
const lexer = /\s+|"(?:\\.|[^"\\])*"|[A-Za-z_]\w*|-?\d+(?:\.\d+)?|[\[\]{},:]/y;
const tokens = [];
let offset = 0;
while (offset < raw[1].length) {
  lexer.lastIndex = offset;
  const match = lexer.exec(raw[1]);
  if (!match) throw new Error(`Unsupported seed syntax at offset ${offset}`);
  if (match[0].trim()) tokens.push(match[0]);
  offset = lexer.lastIndex;
}
let cursor = 0;
function value() {
  const token = tokens[cursor++];
  if (token === '[' || token === '{') {
    const array = token === '[';
    const result = array ? [] : {};
    const end = array ? ']' : '}';
    while (tokens[cursor] !== end) {
      if (cursor >= tokens.length) throw new Error('Unclosed seed literal');
      if (array) result.push(value());
      else {
        const key = tokens[cursor++];
        if (tokens[cursor++] !== ':') throw new Error('Expected colon');
        if (!['week', 'sizeComparison', 'lengthCm', 'weightG', 'milestone', 'tip'].includes(key)) throw new Error(`Unknown seed key: ${key}`);
        result[key] = value();
      }
      if (tokens[cursor] === ',') cursor++;
      else if (tokens[cursor] !== end) throw new Error('Expected comma');
    }
    cursor++;
    return result;
  }
  if (token?.startsWith('"')) return JSON.parse(token);
  if (/^-?\d+(?:\.\d+)?$/.test(token)) return Number(token);
  throw new Error(`Unsupported seed token: ${token}`);
}
const rows = value();
if (cursor !== tokens.length) throw new Error('Unexpected trailing seed tokens');
if (rows.length !== 42 || rows.some((row, i) => row.week !== i + 1)) throw new Error('Expected weeks 1..42 in order');
for (const row of rows) {
  if (typeof row.sizeComparison !== 'string' || typeof row.milestone !== 'string') throw new Error('Missing seed text');
  for (const key of ['lengthCm', 'weightG']) if (row[key] !== undefined && !(row[key] > 0)) throw new Error(`Invalid ${key}`);
}
const previous = existsSync(output) ? JSON.parse(execFileSync('php', ['-r', 'echo json_encode(require $argv[1], JSON_THROW_ON_ERROR);', output], { encoding: 'utf8' })) : {};
const today = new Intl.DateTimeFormat('en-CA', { timeZone: 'America/Asuncion', year: 'numeric', month: '2-digit', day: '2-digit' }).format(new Date());
const records = Object.fromEntries(rows.map(row => {
  const n = row.week;
  return [n, {
    title: `Semana ${n} de embarazo`, seoTitle: `Semana ${n} de embarazo: tu bebé y vos`,
    metaDescription: `Semana ${n} de embarazo en Paraguay: conocé el desarrollo de tu bebé, prepará tus preguntas para el control y seguí esta etapa con Mi Bebé.`,
    sections: { bebe: [], vos: [], paraguay: [] }, control: null, vaccine: null, rightsMilestone: null, season: null,
    faq: [], related: [], image: null, reviewedBy: null, sources: [],
    ...previous[n],
    size: { name: row.sizeComparison, lengthCm: row.lengthCm ?? null, weightG: row.weightG ?? null },
    milestone: row.milestone, updated: today,
  }];
}));
for (const record of Object.values(records)) delete record.trimester;
function php(value, depth = 0) {
  if (value === null) return 'null';
  if (typeof value === 'string') return "'" + value.replaceAll('\\', '\\\\').replaceAll("'", "\\'") + "'";
  if (typeof value !== 'object') return String(value);
  const entries = Object.entries(value);
  if (!entries.length) return '[]';
  const indent = '    '.repeat(depth + 1);
  return '[\n' + entries.map(([key, val]) => indent + (Array.isArray(value) ? '' : (/^\d+$/.test(key) ? key : php(key)) + ' => ') + php(val, depth + 1) + ',').join('\n') + '\n' + '    '.repeat(depth) + ']';
}
const header = `<?php
/**
 * Weeks keyed 1..42. Raw text only: render with e(); no embedded HTML.
 * title:string; seoTitle:string <=60; metaDescription:string 120..155, unique.
 * size:{name:string,lengthCm:?number,weightG:?number}; milestone:string.
 * sections:{bebe:string[],vos:string[],paraguay:string[]}; control/vaccine/
 * rightsMilestone/season:?string; faq:[{q:string,a:string}]; related:string[]
 * (article slugs, including planned ones); image:?string (site-relative path).
 * reviewedBy:null|{name:string,credentials:?string,registration:?string};
 * sources:[{title:string,publisher:string,url:?string,accessed:?ISO-date}]; updated:ISO-date.
 * Derive trimester with week_trimester(n), never store it. Missing measurements = null.
 * Seed-only rows deliberately have empty sections/sources; keep noindex until authored.
 * Source for seed size/milestone: app lib/weeks.ts (read-only import).
 * Re-import preserves editorial fields, refreshes size/milestone/updated; edit here.
 */
declare(strict_types=1);

return `;
writeFileSync(output, header + php(records) + ';\n', 'utf8');
console.log('Imported 42 weeks; editorial fields preserved.');
