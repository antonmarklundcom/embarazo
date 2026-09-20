<?php
/** $path selects pages. Optional features[{key,title,text,appPath,tone,extra?}], howto[{os,steps[]}], faq. */
declare(strict_types=1);
require_once __DIR__ . '/../lib/bootstrap.php';
$pgRecord = page_meta($path ?? '/');
if ($pgRecord === []) { require ROOT_DIR . '/404.php'; return; }
$page = ['title' => $pgRecord['seoTitle'] ?? $pgRecord['title'], 'description' => $pgRecord['metaDescription'] ?? $pgRecord['description'], 'path' => $path,
    'faq' => $pgRecord['faq'] ?? [], 'howto' => $pgRecord['howto'] ?? [], 'noindex' => $pgRecord['noindex'] ?? false,
    'breadcrumbs' => $path === '/' ? [] : [['label' => $pgRecord['title'], 'path' => $path]], 'sticky' => $path === '/blog/'];
if (!empty($pgRecord['stub'])) { $page['noindex'] = true; require ROOT_DIR . '/templates/page-stub.php'; unset($pgRecord); return; }
require ROOT_DIR . '/partials/head.php'; require ROOT_DIR . '/partials/header.php'; ?>
<main id="main"><section class="hero wrap"><?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?><div class="hero__inner"><div class="hero__copy">
<h1><?= e($pgRecord['h1'] ?: $pgRecord['title']) ?></h1><p class="lead"><?= rich($pgRecord['lead'] ?? '') ?></p>
<?php if (empty($page['sticky'])): ?><div class="hero__actions"><a class="btn btn--primary btn--lg" href="<?= e(app_link('product', trim($path, '/') . '-hero')) ?>"><?= e(content('cta')['primary']) ?></a></div><?php require ROOT_DIR . '/partials/trust-strip.php'; endif; ?>
</div><?php if (!empty($pgRecord['phoneWeek'])): ?><div class="hero__art"><?php $phoneNumber = (int) $pgRecord['phoneWeek']; $phoneWeek = content('semanas')[$phoneNumber]; $phoneImage = $pgRecord['phoneImage'] ?? null; require ROOT_DIR . '/partials/phone-frame.php'; ?></div><?php endif; ?></div></section>
<div class="wrap wrap--text"><?php $bodySections = $pgRecord['sections'] ?? []; require ROOT_DIR . '/partials/sections.php'; ?></div>
<?php if (!empty($pgRecord['features'])): ?><section class="section wrap"><h2><?= e($pgRecord['featuresTitle'] ?? ui('foundation.features')) ?></h2><div class="bento">
<?php foreach ($pgRecord['features'] as $pgIndex => $pgFeature):
    $pgTone = in_array($pgFeature['tone'], ['rosa','celeste','salvia','lavanda','arena'], true) ? $pgFeature['tone'] : 'celeste';
    $pgCampaign = trim($path, '/') . '-bento-' . $pgFeature['key'];
    if (isset($pgFeature['path'])) {
        if (!preg_match('~\A/(?!/)[A-Za-z0-9/-]*(?:#[A-Za-z0-9-]+)?\z~', $pgFeature['path'])) {
            throw new InvalidArgumentException('Bento site links must be local paths.');
        }
        $pgHref = $pgFeature['path'];
    } elseif (in_array(trim($pgFeature['appPath'] ?? '', '/'), ['privacidad', 'terminos', 'borrar-cuenta'], true)) {
        $pgHref = app_page_link($pgFeature['appPath'], 'product', $pgCampaign);
    } else {
        $pgHref = app_link('product', $pgCampaign, $pgFeature['extra'] ?? []);
    }
?>
<a class="bento__tile <?= e('bento__tile--' . $pgTone . ($pgIndex === 0 ? ' bento__tile--wide' : '')) ?>" href="<?= e($pgHref) ?>"><span class="bento__icon" aria-hidden="true"><?= e($pgFeature['icon'] ?? '↗') ?></span><h3><?= e($pgFeature['title']) ?></h3><p><?= e($pgFeature['text']) ?></p><span class="link-arrow"><?= e($pgFeature['label'] ?? content('cta')['tool']) ?></span></a>
<?php endforeach; unset($pgCampaign, $pgHref); ?></div></section><?php endif; ?>
<?php if (!empty($pgRecord['howto'])): ?><section class="section wrap wrap--text"><h2><?= e(ui('foundation.steps')) ?></h2>
<?php foreach ($pgRecord['howto'] as $pgOs): ?><details class="os" id="<?= e(strtolower($pgOs['os'])) ?>"<?= stripos($pgOs['os'], 'android') !== false ? ' open' : '' ?>><summary><?= e($pgOs['os']) ?></summary><div class="os__body"><ol class="steps">
<?php foreach ($pgOs['steps'] as $pgStep): ?><li><?php if (is_string($pgStep)): ?><?= rich($pgStep) ?><?php else: ?><h3><?= e($pgStep['title']) ?></h3><?php foreach ($pgStep['body'] as $pgParagraph): ?><p><?= rich($pgParagraph) ?></p><?php endforeach; endif; ?></li><?php endforeach; ?></ol></div></details><?php endforeach; ?></section><?php endif; ?>
<div class="wrap wrap--text section--tight"><?php $faqItems = $pgRecord['faq'] ?? []; require ROOT_DIR . '/partials/faq.php'; ?></div>
<?php if (!empty($pgRecord['sources'])): ?><div class="wrap wrap--text section--tight"><?php $sourcesRecord = $pgRecord; require ROOT_DIR . '/partials/sources.php'; ?></div><?php endif; ?>
<?php require ROOT_DIR . '/partials/cta-band.php'; ?>
</main><?php require ROOT_DIR . '/partials/footer.php'; unset($pgRecord, $pgIndex, $pgFeature, $pgTone, $pgOs, $pgStep, $pgParagraph); ?>
