<?php
/** Route sets $n (1..42). Seed-only records remain noindex. */
declare(strict_types=1);
require_once __DIR__ . '/../lib/bootstrap.php';
$wkRecord = content('semanas')[$n ?? 0] ?? null;
if ($wkRecord === null) { require ROOT_DIR . '/404.php'; return; }
$wkRecord += page_meta('/semana/' . $n . '/');
$wkTrimester = week_trimester($n);
$page = ['title' => $wkRecord['seoTitle'], 'description' => $wkRecord['metaDescription'], 'path' => '/semana/' . $n . '/',
    'kind' => 'medical', 'record' => $wkRecord, 'weekNumber' => $n, 'sticky' => true,
    'noindex' => !array_filter($wkRecord['sections'] ?? []) || !empty($wkRecord['stub']) || !empty($wkRecord['noindex']), 'ogType' => 'article',
    'breadcrumbs' => [['label' => ui('foundation.weeks'), 'path' => '/semana/'], ['label' => content('trimestres')[$wkTrimester]['title'], 'path' => '/trimestre/' . $wkTrimester . '/'], ['label' => $wkRecord['title'], 'path' => '/semana/' . $n . '/']]];
if (is_string($wkRecord['image'] ?? null) && $wkRecord['image'] !== '') { $page['ogImage'] = $wkRecord['image']; }
require ROOT_DIR . '/partials/head.php'; require ROOT_DIR . '/partials/header.php';
?>
<main id="main"><article class="wrap wrap--text section section--tight">
<?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
<?php $wkMonth = week_month($n); ?>
<h1><?= e($wkRecord['title']) ?></h1><p class="lead"><?= e(content('trimestres')[$wkTrimester]['title']) ?><?= $wkMonth === null ? '' : ' · ' . e(str_replace('{m}', (string) $wkMonth, ui('foundation.month'))) ?> · <?= e(strtr(ui('foundation.completed'), ['{n}' => (string) $n, '{completed}' => (string) ($n - 1)])) ?></p>
<div class="size-panel"><span class="size-panel__n"><?= e((string) $n) ?></span><span class="size-panel__what"><?= e(str_replace('{size}', $wkRecord['size']['name'], ui('foundation.size'))) ?></span><span class="size-panel__sub"><?= e(strtr(ui('foundation.measure'), ['{length}' => fmt_measure($wkRecord['size']['lengthCm']), '{weight}' => fmt_measure($wkRecord['size']['weightG'])])) ?></span></div>
<?php $wkPic = picture(is_array($wkRecord['image'] ?? null) ? $wkRecord['image'] : [], '(min-width: 720px) 480px, calc(100vw - 32px)', 'eager'); if ($wkPic !== ''): ?><figure class="week-figure"><?= $wkPic ?></figure><?php endif; unset($wkPic); ?>
<?php foreach (['bebe', 'vos'] as $wkKey): ?><section class="prose section--tight"><h2><?= e(ui('foundation.' . $wkKey)) ?></h2>
<?php if ($wkKey === 'bebe'): ?><p><?= rich($wkRecord['milestone']) ?></p><?php endif; ?>
<?php foreach ($wkRecord['sections'][$wkKey] as $wkParagraph): ?><p><?= rich($wkParagraph) ?></p><?php endforeach; ?>
<?php if ($wkKey === 'vos'): ?><a class="link-arrow" href="/salud/senales-de-alarma/"><?= e(ui('foundation.alarm')) ?></a><?php endif; ?></section><?php endforeach; ?>
<?php require ROOT_DIR . '/partials/cta-week.php'; ?>
<section class="prose section--tight"><h2><?= e(ui('foundation.paraguay')) ?></h2>
<?php foreach ($wkRecord['sections']['paraguay'] as $wkParagraph): ?><p><?= rich($wkParagraph) ?></p><?php endforeach; ?>
<?php foreach (['control', 'vaccine', 'rightsMilestone', 'season'] as $wkKey): if (!empty($wkRecord[$wkKey])): ?><h3><?= e(ui('foundation.' . $wkKey)) ?></h3><p><?= rich($wkRecord[$wkKey]) ?></p><?php endif; endforeach; ?></section>
<?php $faqItems = $wkRecord['faq']; require ROOT_DIR . '/partials/faq.php'; ?>
<div class="section--tight"><?php $ctaOptions = ['campaign' => 'semana-' . $n . '-cierre']; require ROOT_DIR . '/partials/cta-week.php'; require ROOT_DIR . '/partials/trust-strip.php'; ?></div>
<?php require ROOT_DIR . '/partials/week-nav.php'; $relatedSlugs = $wkRecord['related']; require ROOT_DIR . '/partials/related.php'; require ROOT_DIR . '/partials/wa-share.php'; ?>
<div class="section--tight"><?php $disclaimerRecord = $wkRecord + ['kind' => 'medical']; require ROOT_DIR . '/partials/disclaimer.php'; ?></div>
<?php $sourcesRecord = $wkRecord; require ROOT_DIR . '/partials/sources.php'; ?>
</article></main><?php require ROOT_DIR . '/partials/footer.php'; unset($wkMonth, $wkRecord, $wkTrimester, $wkKey, $wkParagraph); ?>
