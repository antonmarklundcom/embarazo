import assert from 'node:assert/strict';
import { readFileSync } from 'node:fs';
import { fileURLToPath } from 'node:url';
import path from 'node:path';

// Measured in the manager-repaired sheet: the main tokens and the 64rem override.
// Pin the known-good count; deriving an expected count from the input hides regressions.
const expectedRoots = 2;
export function checkCss(css) {
  let stripped = '';
  for (let i = 0; i < css.length;) {
    if (css.startsWith('/*', i)) {
      const end = css.indexOf('*/', i + 2);
      assert.notEqual(end, -1, 'unclosed CSS comment');
      const nested = css.indexOf('/*', i + 2);
      assert.ok(nested === -1 || nested > end, 'nested comment opener: CSS may be swallowed by a comment');
      stripped += ' ';
      i = end + 2;
    } else if (css[i] === '"' || css[i] === "'") {
      // Ignore literal braces/comment markers in strings, including escaped quotes.
      const quote = css[i++];
      let closed = false;
      while (i < css.length) {
        if (css[i] === '\\') { i += 2; continue; }
        if (css[i++] === quote) { closed = true; break; }
      }
      assert.ok(closed, 'unclosed CSS string');
      stripped += '""';
    } else {
      stripped += css[i++];
    }
  }
  assert.ok(!stripped.includes('/*') && !stripped.includes('*/'), 'stray CSS comment marker');
  let depth = 0, blocks = 0;
  for (const char of stripped) {
    if (char === '{') { depth++; blocks++; }
    if (char === '}') { depth--; assert.ok(depth >= 0, 'unmatched closing CSS brace'); }
  }
  assert.equal(depth, 0, 'unclosed CSS brace');
  const roots = [...stripped.matchAll(/:root\s*\{/g)].length;
  assert.equal(roots, expectedRoots, `expected ${expectedRoots} :root blocks, found ${roots}`);
  return { roots, blocks };
}

if (process.argv[1] && path.resolve(process.argv[1]) === fileURLToPath(import.meta.url)) {
  const file = process.argv[2] || fileURLToPath(new URL('../assets/css/site.css', import.meta.url));
  try {
    const { roots, blocks } = checkCss(readFileSync(file, 'utf8'));
    console.log(`CSS sanity: PASS (${roots} root blocks, ${blocks} balanced blocks, no stray comment markers)`);
  } catch (error) {
    console.error(`CSS sanity: FAIL ${file}: ${error.message}`);
    process.exitCode = 1;
  }
}
