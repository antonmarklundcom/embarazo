<?php
/** $slug selects articulos; legacy blog supports $sections/$faq in caller scope. */
declare(strict_types=1);
require_once __DIR__ . '/../lib/bootstrap.php';
$arRecord = content('articulos')[$slug ?? ''] ?? null;
if ($arRecord === null) {
    foreach (content('blog') as $arEntry) {
        if (($arEntry['slug'] ?? '') === ($slug ?? '')) {
            $arRecord = $arEntry + ['cluster' => 'blog', 'path' => '/blog/' . $slug . '/', 'metaDescription' => $arEntry['description'], 'sections' => $sections ?? [], 'faq' => $faq ?? [], 'lead' => $arEntry['description'], 'kind' => 'product', 'updated' => $arEntry['date']];
            $arRecord['datePublished'] = $arEntry['date']; break;
        }
    }
}
if ($arRecord === null) { require ROOT_DIR . '/404.php'; return; }
$arRecord += page_meta($arRecord['path']);
$page = ['title' => $arRecord['seoTitle'] ?: $arRecord['title'], 'description' => $arRecord['metaDescription'], 'path' => $arRecord['path'], 'record' => $arRecord, 'kind' => $arRecord['kind'], 'ogType' => 'article', 'sticky' => true,
    'noindex' => !empty($arRecord['stub']) || !empty($arRecord['noindex']),
    'breadcrumbs' => [['label' => content('clusters')[$arRecord['cluster']]['title'] ?? ui('foundation.blog'), 'path' => '/' . $arRecord['cluster'] . '/'], ['label' => $arRecord['title'], 'path' => $arRecord['path']]]];
if (is_string($arRecord['image'] ?? null) && $arRecord['image'] !== '') { $page['ogImage'] = $arRecord['image']; }
elseif (isset(content('articulos')[$slug ?? '']) && ($arOg = og_card('articulo-' . $slug)) !== null) { $page['ogImage'] = $arOg; $page['ogImageAlt'] = $arRecord['image']['alt'] ?? $arRecord['title']; }
require ROOT_DIR . '/partials/head.php'; require ROOT_DIR . '/partials/header.php';
?>
<main id="main"><article class="wrap wrap--text section section--tight">
<?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
<h1><?= e($arRecord['title']) ?></h1><p class="lead"><?= rich($arRecord['lead']) ?></p><?php $arPic = picture(is_array($arRecord['image'] ?? null) ? $arRecord['image'] : [], '(min-width: 720px) 640px, calc(100vw - 32px)', 'eager'); if ($arPic !== ''): ?><figure class="article-figure"><?= $arPic ?></figure><?php endif; unset($arPic); ?>
<?php $bodySections = $arRecord['sections'] ?? []; require ROOT_DIR . '/partials/sections.php'; ?>
<?php if (!empty($arRecord['steps'])): ?><section class="prose section--tight"><h2><?= e(ui('foundation.steps')) ?></h2><ol class="steps"><?php foreach ($arRecord['steps'] as $arStep): ?><li><h3><?= e($arStep['title']) ?></h3><?php foreach ($arStep['body'] as $arParagraph): ?><p><?= rich($arParagraph) ?></p><?php endforeach; ?></li><?php endforeach; ?></ol></section><?php endif; ?>
<?php if (!empty($arRecord['appHandoff'])): $ctaOptions = $arRecord['appHandoff'] + ['title' => ui('foundation.handoff'), 'campaign' => $slug]; require ROOT_DIR . '/partials/cta-tool.php'; else: require ROOT_DIR . '/partials/cta-primary.php'; endif; require ROOT_DIR . '/partials/trust-strip.php'; ?>
<?php $faqItems = $arRecord['faq'] ?? []; require ROOT_DIR . '/partials/faq.php'; ?>
<?php $relatedSlugs = $arRecord['related'] ?? []; $relatedHub = $arRecord['cluster']; require ROOT_DIR . '/partials/related.php'; ?>
<?php if ($arRecord['path'] === '/salud/senales-de-alarma/'): $guaraniItems = $arRecord['guarani'] ?? []; $guaraniReviewed = $arRecord['guaraniReviewed'] ?? false; require ROOT_DIR . '/partials/guarani-strip.php'; endif; ?>
<?php require ROOT_DIR . '/partials/wa-share.php'; ?>
<div class="section--tight"><?php $disclaimerRecord = $arRecord; require ROOT_DIR . '/partials/disclaimer.php'; ?></div>
<?php $sourcesRecord = $arRecord; require ROOT_DIR . '/partials/sources.php'; ?>
</article></main><?php require ROOT_DIR . '/partials/footer.php'; unset($arRecord, $arEntry, $arStep, $arParagraph); ?>
