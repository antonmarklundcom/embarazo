import { test } from 'node:test';
import assert from 'node:assert/strict';
import { createRequire } from 'node:module';

const require = createRequire(import.meta.url);
const { chromium } = require(process.env.PLAYWRIGHT_MODULE_PATH || 'playwright');
const base = process.env.SITE_BASE_URL || 'http://127.0.0.1:8735';

test('device-aware installation retains manual choice, deep links, QR and no-JS fallback', async () => {
  const browser = await chromium.launch({ headless: true });
  try {
    for (const [device, userAgent, width] of [
      ['desktop', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) Chrome/130.0 Safari/537.36', 1440],
      ['iphone', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_5 like Mac OS X) AppleWebKit/605.1.15 Version/17.5 Mobile Safari/604.1', 390],
      ['android', 'Mozilla/5.0 (Linux; Android 14) AppleWebKit/537.36 Chrome/130.0 Mobile Safari/537.36', 390],
    ]) {
      const context = await browser.newContext({ userAgent, viewport: { width, height: 900 } });
      const page = await context.newPage();
      const errors = [];
      page.on('pageerror', error => errors.push(error.message));
      await page.goto(`${base}/instalar/`);
      await page.locator(`[data-install-device="${device}"][aria-pressed="true"]`).waitFor();
      assert.equal(await page.locator('.install-qr').isVisible(), device === 'desktop');
      if (device === 'desktop') assert.equal(await page.locator('.install-qr').evaluate(image => image.complete && image.naturalWidth > 0), true);
      await page.locator('[data-install-device="iphone"]').click();
      assert.equal(await page.locator('#iphone').getAttribute('open'), '');
      assert.equal(await page.locator('.install-qr').isVisible(), false);
      await page.locator('[data-install-device="android"]').click();
      assert.equal(await page.locator('#android').getAttribute('open'), '');
      await page.goto(`${base}/instalar/#iphone`);
      await page.locator('[data-install-device="iphone"][aria-pressed="true"]').waitFor();
      assert.equal(await page.evaluate(() => document.documentElement.scrollWidth <= window.innerWidth), true);
      assert.deepEqual(errors, []);
      await context.close();
    }
    const context = await browser.newContext({ javaScriptEnabled: false });
    const page = await context.newPage();
    await page.goto(`${base}/instalar/`);
    assert.equal(await page.locator('#iphone summary').isVisible(), true);
    assert.equal(await page.locator('#android summary').isVisible(), true);
    assert.equal(await page.locator('.install-qr').isVisible(), true);
    await context.close();
  } finally { await browser.close(); }
});
