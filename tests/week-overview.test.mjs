import { test } from 'node:test';
import assert from 'node:assert/strict';
import { createRequire } from 'node:module';
import { execFileSync } from 'node:child_process';
import { readFileSync } from 'node:fs';

const require = createRequire(import.meta.url);
const { chromium } = require(process.env.PLAYWRIGHT_MODULE_PATH || 'playwright');
const base = process.env.SITE_BASE_URL || 'http://127.0.0.1:8735';
const sizes = JSON.parse(execFileSync(process.env.PHP_BIN || 'php', ['-r', "require 'lib/bootstrap.php'; echo json_encode(array_map(fn($row) => $row['size'], content('semanas')));"], { cwd: new URL('../', import.meta.url), encoding: 'utf8' }));
const format = value => String(value).replace('.', ',');

test('overview defaults to babies, keeps estimates unchanged and switches images with one keyboard-accessible control', async () => {
  const browser = await chromium.launch({ headless: true });
  try {
    for (const width of [390, 1440]) {
      const context = await browser.newContext({ viewport: { width, height: 900 } });
      const page = await context.newPage();
      const errors = [];
      const imageRequests = [];
      page.on('pageerror', error => errors.push(error.message));
      page.on('request', request => { if (request.resourceType() === 'image') imageRequests.push(request.url()); });
      await page.goto(`${base}/semana/`);
      const root = page.locator('[data-week-overview]');
      const cards = root.locator('a.week-card');
      assert.equal(await cards.count(), 42);
      assert.equal(await root.locator('img').count(), 42);
      assert.equal(await root.getByRole('button').count(), 2);
      assert.equal(await root.getByRole('button', { name: 'Bebé', exact: true }).getAttribute('aria-pressed'), 'true');
      await cards.nth(8).scrollIntoViewIfNeeded();
      await cards.nth(8).locator('img').evaluate(image => image.decode());
      assert.equal(imageRequests.some(url => url.includes('/week-overview/referencia-')), false);
      for (let week = 1; week <= 42; week++) {
        const card = cards.nth(week - 1);
        assert.equal(await card.getAttribute('href'), `/semana/${week}/`);
        for (const [field, selector, suffix] of [['lengthCm', '[data-week-length]', 'cm'], ['weightG', '[data-week-weight]', 'g']]) {
          const value = sizes[week][field];
          assert.equal(await card.locator(selector).count(), value === null ? 0 : 1);
          if (value !== null) assert.equal(await card.locator(selector).textContent(), `${format(value)} ${suffix}, aproximadamente`);
        }
        assert.equal((await card.locator('img').getAttribute('alt')).length > 0, true);
        assert.equal(await card.locator('img').getAttribute('loading'), 'lazy');
      }
      const measurements = await root.locator('.week-card__measure').allTextContents();
      const food = root.getByRole('button', { name: 'Frutas y verduras', exact: true });
      await food.focus();
      await page.keyboard.press('Enter');
      assert.equal(await food.getAttribute('aria-pressed'), 'true');
      await cards.nth(8).scrollIntoViewIfNeeded();
      await cards.nth(8).locator('img').evaluate(image => image.decode());
      assert.equal(await cards.nth(8).locator('img').getAttribute('alt'), 'Ilustración de una aceituna como referencia aproximada del embarazo, sin escala.');
      assert.deepEqual(await root.locator('.week-card__measure').allTextContents(), measurements);
      assert.equal((await cards.nth(1).locator('img').getAttribute('src')).includes('calendario'), true);
      assert.equal((await cards.nth(2).locator('img').getAttribute('src')).includes('bebe-ilustrado-semana-3'), true);
      await root.getByRole('button', { name: 'Bebé', exact: true }).click();
      assert.equal((await cards.nth(8).locator('img').getAttribute('src')).includes('bebe-ilustrado-semana-9'), true);
      assert.equal(await page.evaluate(() => document.documentElement.scrollWidth <= innerWidth), true);
      assert.deepEqual(errors, []);
      await context.close();
    }
    const context = await browser.newContext({ javaScriptEnabled: false });
    const page = await context.newPage();
    await page.goto(`${base}/semana/`);
    assert.equal(await page.locator('[data-week-controls]').isVisible(), false);
    assert.equal(await page.locator('[data-week-overview] a.week-card').count(), 42);
    assert.equal(await page.locator('[data-week-overview] img').count(), 42);
    await page.goto(`${base}/trimestre/1/`);
    assert.equal(await page.locator('[data-week-controls]').count(), 0);
    assert.equal(await page.locator('.week-card__art').count(), 0);
    await context.close();
  } finally { await browser.close(); }
});

test('thumbnail map covers weeks 3–42 without inventing produce before week 4', () => {
  const plan = JSON.parse(readFileSync(new URL('../docs/week-overview-images.json', import.meta.url)));
  assert.deepEqual(plan.weeks.map(row => row.week), Array.from({ length: 40 }, (_, index) => index + 3));
  assert.equal(plan.weeks[0].comparison, null);
  assert.equal(plan.weeks.find(row => row.week === 19).basis, 'length');
  assert.equal(plan.weeks.find(row => row.week === 20).basis, 'weight');
});

test('all converted image formats and Open Graph assets are served within their budgets', async () => {
  const plan = JSON.parse(readFileSync(new URL('../docs/week-overview-images.json', import.meta.url)));
  assert.equal(plan.assets.length, 62);
  for (const asset of plan.assets) {
    assert.equal(asset.files.length, 5);
    for (const file of asset.files) {
      assert.equal(file.over_budget === true, false);
      assert.equal(file.bytes <= file.budget_kb * 1024, true);
      if (file.format !== 'jpg') {
        assert.equal([160, 320].includes(file.width), true);
        assert.equal(file.width, file.height);
      }
      const response = await fetch(`${base}/assets/img/week-overview/${file.file}`);
      assert.equal(response.status, 200, file.file);
      assert.equal((await response.arrayBuffer()).byteLength, file.bytes);
    }
  }
});
