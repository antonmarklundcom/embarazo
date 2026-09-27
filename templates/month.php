<?php
/** Route sets $n (1..9), or null for the /mes/ hub. Weeks come from week_month(); key changes from week milestones. */
declare(strict_types=1);
require_once __DIR__ . '/../lib/bootstrap.php';
$moMonths = content('meses');
if (($n ?? null) === null):
    $moRecord = page_meta('/mes/') + ['kind' => 'medical'];
    $page = ['title' => $moRecord['seoTitle'] ?? $moRecord['title'], 'description' => $moRecord['metaDescription'] ?? $moRecord['description'], 'path' => '/mes/',
        'record' => $moRecord, 'kind' => 'medical', 'sticky' => true, 'noindex' => !empty($moRecord['stub']) || !empty($moRecord['noindex']),
        'breadcrumbs' => [['label' => ui('month.hub'), 'path' => '/mes/']]];
    require ROOT_DIR . '/partials/head.php'; require ROOT_DIR . '/partials/header.php'; ?>
<main id="main"><article class="wrap wrap--text section section--tight">
<?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
<h1><?= e($moRecord['h1'] ?? $moRecord['title']) ?></h1>
<?php foreach ($moRecord['intro'] ?? [$moRecord['lead']] as $moParagraph): ?><p class="lead"><?= rich($moParagraph) ?></p><?php endforeach; ?>
<section class="section--tight"><table class="month-table"><caption class="sr-only"><?= e(ui('month.tableCaption')) ?></caption>
<thead><tr><th scope="col"><?= e(ui('month.colMonth')) ?></th><th scope="col"><?= e(ui('month.colWeeks')) ?></th><th scope="col"><?= e(ui('month.colTrimester')) ?></th></tr></thead><tbody>
<?php foreach ($moMonths as $moNumber => $moMonth): ?><tr><th scope="row"><a href="<?= e('/mes/' . $moNumber . '/') ?>"><?= e($moMonth['title']) ?></a></th><td><?= e(strtr(ui('month.range'), ['{a}' => (string) $moMonth['weeks'][0], '{b}' => (string) end($moMonth['weeks'])])) ?></td><td><a href="<?= e('/trimestre/' . $moMonth['trimester'] . '/') ?>"><?= e(content('trimestres')[$moMonth['trimester']]['title']) ?></a></td></tr><?php endforeach; ?>
</tbody></table></section>
<p><a class="link-arrow" href="/calculadora/"><?= e(ui('month.calc')) ?></a></p>
<?php $ctaOptions = ['medium' => 'hub']; require ROOT_DIR . '/partials/cta-primary.php'; $faqItems = $moRecord['faq'] ?? []; require ROOT_DIR . '/partials/faq.php'; ?>
<div class="section--tight"><?php $disclaimerRecord = $moRecord; require ROOT_DIR . '/partials/disclaimer.php'; ?></div>
<?php $sourcesRecord = $moRecord; require ROOT_DIR . '/partials/sources.php'; ?>
</article></main><?php require ROOT_DIR . '/partials/footer.php'; unset($moMonths, $moRecord, $moParagraph, $moNumber, $moMonth);
    return;
endif;
$moRecord = $moMonths[$n] ?? null;
if ($moRecord === null) { require ROOT_DIR . '/404.php'; return; }
$moRecord += page_meta('/mes/' . $n . '/');
$moWeeks = content('semanas');
$moTrimester = content('trimestres')[$moRecord['trimester']];
$page = ['title' => $moRecord['seoTitle'], 'description' => $moRecord['metaDescription'], 'path' => '/mes/' . $n . '/', 'record' => $moRecord, 'kind' => 'medical', 'sticky' => true,
    'noindex' => !empty($moRecord['stub']) || !empty($moRecord['noindex']), 'ogType' => 'article',
    'breadcrumbs' => [['label' => ui('month.hub'), 'path' => '/mes/'], ['label' => $moRecord['title'], 'path' => '/mes/' . $n . '/']]];
require ROOT_DIR . '/partials/head.php'; require ROOT_DIR . '/partials/header.php'; ?>
<main id="main"><article class="wrap wrap--text section section--tight">
<?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
<h1><?= e($moRecord['title']) ?></h1><p class="lead"><?= rich($moRecord['lead']) ?></p>
<p><?= e(ui('month.partOf')) ?> <a href="<?= e('/trimestre/' . $moRecord['trimester'] . '/') ?>"><?= e(mb_strtolower($moTrimester['title'])) ?></a> · <a href="/calculadora/"><?= e(ui('month.calc')) ?></a></p>
<section class="section--tight"><h2><?= e(ui('month.changes')) ?></h2><ol class="timeline"><?php foreach ($moRecord['highlights'] as $moWeek): ?><li><a class="timeline__wk" href="<?= e('/semana/' . $moWeek . '/') ?>"><?= e(ui('foundation.week') . ' ' . $moWeek) ?></a><span class="timeline__what"><?= e($moWeeks[$moWeek]['milestone']) ?></span></li><?php endforeach; ?></ol></section>
<section class="section--tight"><h2><?= e(ui('month.weeks')) ?></h2><?php $gridWeeks = $moRecord['weeks']; require ROOT_DIR . '/partials/week-grid.php'; ?></section>
<?php $ctaOptions = ['medium' => 'hub', 'campaign' => 'mes-' . $n]; require ROOT_DIR . '/partials/cta-primary.php'; $faqItems = $moRecord['faq']; require ROOT_DIR . '/partials/faq.php'; ?>
<nav class="week-nav" aria-label="<?= e(ui('month.nav')) ?>">
<?php if (isset($moMonths[$n - 1])): ?><a class="week-nav__link" rel="prev" href="<?= e('/mes/' . ($n - 1) . '/') ?>"><small><?= e(ui('foundation.previous')) ?></small><b><?= e($moMonths[$n - 1]['title']) ?></b></a><?php endif; ?>
<?php if (isset($moMonths[$n + 1])): ?><a class="week-nav__link week-nav__link--next" rel="next" href="<?= e('/mes/' . ($n + 1) . '/') ?>"><small><?= e(ui('foundation.next')) ?></small><b><?= e($moMonths[$n + 1]['title']) ?></b></a><?php endif; ?>
</nav>
<?php $relatedSlugs = related_for_weeks([], $moRecord['weeks'], 5); require ROOT_DIR . '/partials/related.php'; ?>
<div class="section--tight"><?php $disclaimerRecord = $moRecord + ['kind' => 'medical']; require ROOT_DIR . '/partials/disclaimer.php'; ?></div>
<?php $sourcesRecord = $moRecord; require ROOT_DIR . '/partials/sources.php'; ?>
</article></main><?php require ROOT_DIR . '/partials/footer.php'; unset($moMonths, $moRecord, $moWeeks, $moTrimester, $moWeek); ?>
