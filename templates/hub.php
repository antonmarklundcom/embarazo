<?php
/** $cluster: cluster key, or 'semana' (uses pages['/semana/'] intro/lead). */
declare(strict_types=1);
require_once __DIR__ . '/../lib/bootstrap.php';
$hbWeeks = ($cluster ?? '') === 'semana';
$hbRecord = $hbWeeks ? page_meta('/semana/') : (content('clusters')[$cluster ?? ''] ?? []);
if ($hbRecord === []) { require ROOT_DIR . '/404.php'; return; }
$hbRecord += page_meta('/' . $cluster . '/');
$hbRecord += ['metaDescription' => $hbRecord['description'] ?? '', 'kind' => 'medical'];
$page = ['title' => $hbRecord['seoTitle'] ?? $hbRecord['title'], 'description' => $hbRecord['metaDescription'], 'path' => '/' . $cluster . '/', 'sticky' => true,
    'noindex' => !empty($hbRecord['stub']) || !empty($hbRecord['noindex']), 'faq' => $hbRecord['faq'] ?? [],
    'breadcrumbs' => [['label' => $hbRecord['title'], 'path' => '/' . $cluster . '/']]];
if (!empty($hbRecord['updated'])) { $page['record'] = $hbRecord; $page['kind'] = $hbRecord['kind']; }
require ROOT_DIR . '/partials/head.php'; require ROOT_DIR . '/partials/header.php';
?>
<main id="main"><div class="wrap section section--tight">
<?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
<header class="hub-hero"><h1><?= e($hbRecord['h1'] ?? $hbRecord['title']) ?></h1><div class="prose">
<?php foreach ($hbRecord['intro'] ?? [$hbRecord['lead'] ?? ''] as $hbParagraph): ?><p class="lead"><?= rich($hbParagraph) ?></p><?php endforeach; ?></div></header>
<?php $hbPic = picture($hbRecord['image'] ?? [], '(min-width: 1200px) 1152px, calc(100vw - 32px)'); if ($hbPic !== ''): ?><figure class="hub-figure"><?= $hbPic ?></figure><?php endif; unset($hbPic); ?>
<?php if ($hbWeeks): ?>
<?php foreach (content('trimestres') as $hbNumber => $hbTrimester): ?><section class="section--tight"><h2><a class="link-arrow" href="<?= e('/trimestre/' . $hbNumber . '/') ?>"><?= e($hbTrimester['title']) ?></a></h2><?php $gridWeeks = $hbTrimester['weeks']; require ROOT_DIR . '/partials/week-grid.php'; ?></section><?php endforeach; ?>
<?php else: ?><section class="section--tight"><h2><?= e(ui('foundation.related')) ?></h2><div class="grid grid--2">
<?php foreach (content('articulos') as $hbArticle): if ($hbArticle['cluster'] === $cluster): ?><a class="article-card" href="<?= e($hbArticle['path']) ?>"><span class="article-card__thumb" aria-hidden="true"><?php $hbThumb = is_array($hbArticle['image'] ?? null) ? picture($hbArticle['image'], '72px', 'lazy', 'article-card__img') : ''; echo $hbThumb !== '' ? $hbThumb : '↗'; unset($hbThumb); ?></span><div class="article-card__body"><h3><?= e($hbArticle['title']) ?></h3><p><?= e($hbArticle['metaDescription']) ?></p></div></a><?php endif; endforeach; ?></div></section>
<?php endif; ?>
<div class="wrap--text section--tight"><?php $ctaOptions = ['medium' => 'hub']; require ROOT_DIR . '/partials/cta-primary.php'; ?></div>
<?php $faqItems = $hbRecord['faq'] ?? []; require ROOT_DIR . '/partials/faq.php'; ?>
<?php if (!$hbWeeks && !empty($hbRecord['related'])): ?><nav class="grid grid--3 section--tight" aria-label="<?= e(ui('foundation.related')) ?>"><?php foreach ($hbRecord['related'] as $hbRelated): ?><a class="hub-card hub-card--petrol" href="<?= e('/' . $hbRelated . '/') ?>"><h3><?= e(content('clusters')[$hbRelated]['title']) ?></h3></a><?php endforeach; ?></nav><?php endif; ?>
<?php if ($cluster === 'derechos' && !empty($hbRecord['guaraniStrip'])): $guaraniItems = $hbRecord['guarani'] ?? []; $guaraniReviewed = $hbRecord['guaraniReviewed'] ?? false; require ROOT_DIR . '/partials/guarani-strip.php'; endif; ?>
<div class="wrap--text section--tight"><?php $disclaimerRecord = $hbRecord; require ROOT_DIR . '/partials/disclaimer.php'; ?></div>
<?php $sourcesRecord = $hbRecord; require ROOT_DIR . '/partials/sources.php'; ?>
</div></main><?php require ROOT_DIR . '/partials/footer.php'; unset($hbWeeks, $hbRecord, $hbParagraph, $hbNumber, $hbTrimester, $hbArticle, $hbRelated); ?>
