<?php
/** Route sets $n:1..3. Week membership is derived in content/trimestres.php. */
declare(strict_types=1);
require_once __DIR__ . '/../lib/bootstrap.php';
$tmRecord = content('trimestres')[$n ?? 0] ?? null;
if ($tmRecord === null) { require ROOT_DIR . '/404.php'; return; }
$tmRecord += page_meta('/trimestre/' . $n . '/');
$page = ['title' => $tmRecord['seoTitle'], 'description' => $tmRecord['metaDescription'], 'path' => '/trimestre/' . $n . '/', 'record' => $tmRecord, 'kind' => 'medical', 'sticky' => true,
    'noindex' => !empty($tmRecord['stub']) || !empty($tmRecord['noindex']),
    'breadcrumbs' => [['label' => ui('foundation.weeks'), 'path' => '/semana/'], ['label' => $tmRecord['title'], 'path' => '/trimestre/' . $n . '/']]];
require ROOT_DIR . '/partials/head.php'; require ROOT_DIR . '/partials/header.php'; ?>
<main id="main"><article class="wrap wrap--text section section--tight">
<?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
<h1><?= e($tmRecord['title']) ?></h1><p class="lead"><?= rich($tmRecord['lead']) ?></p>
<section class="section--tight"><h2><?= e(ui('foundation.timeline')) ?></h2><ol class="timeline"><?php foreach ($tmRecord['timeline'] as $tmEntry): ?><li><a class="timeline__wk" href="<?= e('/semana/' . $tmEntry['week'] . '/') ?>"><?= e(ui('foundation.week') . ' ' . $tmEntry['week']) ?></a><span class="timeline__what"><?= rich($tmEntry['what']) ?></span></li><?php endforeach; ?></ol></section>
<section class="section--tight"><h2><?= e(ui('foundation.weeks')) ?></h2><?php $gridWeeks = $tmRecord['weeks']; require ROOT_DIR . '/partials/week-grid.php'; ?></section>
<?php $ctaOptions = ['medium' => 'trimester']; require ROOT_DIR . '/partials/cta-primary.php'; $faqItems = $tmRecord['faq']; require ROOT_DIR . '/partials/faq.php'; ?>
<div class="section--tight"><?php $disclaimerRecord = $tmRecord + ['kind' => 'medical']; require ROOT_DIR . '/partials/disclaimer.php'; ?></div>
<?php $sourcesRecord = $tmRecord; require ROOT_DIR . '/partials/sources.php'; ?>
</article></main><?php require ROOT_DIR . '/partials/footer.php'; unset($tmRecord, $tmEntry); ?>
