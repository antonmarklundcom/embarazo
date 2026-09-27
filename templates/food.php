<?php
/** Route sets $slug (a food in content/comer.php), or null for the /alimentacion/puedo-comer/ hub. Text is the app seed's, verbatim. */
declare(strict_types=1);
require_once __DIR__ . '/../lib/bootstrap.php';
$fdData = content('comer');
$fdHub = content('comer-hub');
$fdFoods = array_filter($fdData['foods'], static fn(array $f): bool => $f['published']);
$fdSource = static function (string $source): array {
    $parts = explode(' — ', $source, 2);
    return ['title' => count($parts) === 2 ? $parts[1] : $source, 'publisher' => $parts[0], 'url' => null, 'accessed' => null];
};
$fdHubPath = '/alimentacion/puedo-comer/';
if (($slug ?? null) === null):
    if ($fdFoods === []) { require ROOT_DIR . '/404.php'; return; }
    $fdRecord = $fdHub + ['kind' => 'medical', 'reviewedBy' => null, 'updated' => $fdData['updated']];
    $page = ['title' => $fdHub['seoTitle'], 'description' => $fdHub['metaDescription'], 'path' => $fdHubPath, 'record' => $fdRecord, 'kind' => 'medical', 'sticky' => true, 'noindex' => false,
        'breadcrumbs' => [['label' => content('clusters')['alimentacion']['title'], 'path' => '/alimentacion/'], ['label' => $fdHub['title'], 'path' => $fdHubPath]]];
    require ROOT_DIR . '/partials/head.php'; require ROOT_DIR . '/partials/header.php'; ?>
<main id="main"><article class="wrap wrap--text section section--tight">
<?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
<h1><?= e($fdHub['h1']) ?></h1><p class="lead"><?= rich($fdHub['lead']) ?></p>
<nav class="chips" aria-label="<?= e(ui('food.filter')) ?>"><?php foreach ($fdHub['verdicts'] as $fdVerdict => $fdLabel): $fdCount = count(array_filter($fdFoods, static fn(array $f): bool => $f['verdict'] === $fdVerdict)); if ($fdCount > 0): ?><a class="chip" href="<?= e('#' . $fdVerdict) ?>"><?= e($fdLabel['label'] . ' (' . $fdCount . ')') ?></a> <?php endif; endforeach; ?></nav>
<?php foreach ($fdHub['verdicts'] as $fdVerdict => $fdLabel): $fdGroup = array_filter($fdFoods, static fn(array $f): bool => $f['verdict'] === $fdVerdict); if ($fdGroup === []) { continue; } ?>
<section class="section--tight" id="<?= e($fdVerdict) ?>"><h2><?= e($fdLabel['heading']) ?></h2><ul class="food-list">
<?php foreach ($fdGroup as $fdSlug => $fdFood): ?><li><?php if ($fdFood['page']): ?><a href="<?= e($fdHubPath . $fdSlug . '/') ?>"><b><?= e($fdFood['name']) ?></b></a><?php else: ?><b><?= e($fdFood['name']) ?></b><?php endif; ?>: <?= e($fdFood['reason']) ?></li><?php endforeach; ?>
</ul></section><?php endforeach; ?>
<?php $ctaOptions = ['appPath' => 'herramientas/comer', 'medium' => 'tool', 'campaign' => 'puedo-comer', 'title' => ui('food.ctaTitle'), 'text' => ui('food.ctaText')]; require ROOT_DIR . '/partials/cta-primary.php'; $faqItems = $fdHub['faq']; require ROOT_DIR . '/partials/faq.php'; ?>
<div class="section--tight"><?php $disclaimerRecord = $fdRecord; require ROOT_DIR . '/partials/disclaimer.php'; ?></div>
<?php $sourcesRecord = $fdRecord; require ROOT_DIR . '/partials/sources.php'; ?>
</article></main><?php require ROOT_DIR . '/partials/footer.php'; unset($fdData, $fdHub, $fdFoods, $fdSource, $fdHubPath, $fdRecord, $fdVerdict, $fdLabel, $fdCount, $fdGroup, $fdSlug, $fdFood);
    return;
endif;
$fdFood = $fdFoods[$slug] ?? null;
if ($fdFood === null || !$fdFood['page']) { require ROOT_DIR . '/404.php'; return; }
$fdPath = $fdHubPath . $slug . '/';
$fdVerdictLabel = $fdHub['verdicts'][$fdFood['verdict']]['label'];
// The title names the food the way a person types it: "Fiambres y embutidos fríos (jamón, salame,
// mortadela)" becomes "fiambres y embutidos fríos"; the full seed name stays in the body.
$fdShort = trim((string) preg_replace('/\s*\([^)]*\)/u', '', $fdFood['name']));
$fdShort = mb_strtolower(mb_substr($fdShort, 0, 1)) . mb_substr($fdShort, 1);
$fdRecord = ['title' => str_replace('{food}', $fdShort, ui('food.title')), 'kind' => 'medical', 'updated' => $fdData['updated'],
    'reviewedBy' => $fdFood['reviewedBy'] === null ? null : ['name' => $fdFood['reviewedBy'], 'credentials' => null, 'registration' => null],
    'sources' => [$fdSource($fdFood['source'])]];
$fdDescription = $fdVerdictLabel . '. ' . $fdFood['reason'];
if (mb_strlen($fdDescription) > 155) { $fdDescription = rtrim(mb_substr($fdDescription, 0, 154), " ,;:.") . '…'; }
$page = ['title' => $fdRecord['title'], 'description' => $fdDescription, 'path' => $fdPath, 'record' => $fdRecord + ['metaDescription' => $fdDescription], 'kind' => 'medical', 'sticky' => true, 'noindex' => false, 'ogType' => 'article',
    'breadcrumbs' => [['label' => content('clusters')['alimentacion']['title'], 'path' => '/alimentacion/'], ['label' => $fdHub['title'], 'path' => $fdHubPath], ['label' => $fdFood['name'], 'path' => $fdPath]]];
require ROOT_DIR . '/partials/head.php'; require ROOT_DIR . '/partials/header.php'; ?>
<main id="main"><article class="wrap wrap--text section section--tight">
<?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
<h1><?= e($fdRecord['title']) ?></h1>
<p class="lead"><span class="chip"><?= e($fdVerdictLabel) ?></span> <?= e($fdFood['reason']) ?></p>
<div class="prose section--tight"><p><b><?= e($fdFood['name']) ?>.</b> <?= e($fdFood['detail']) ?></p>
<?php if ($fdFood['synonyms'] !== []): ?><p><?= e(ui('food.synonyms') . ' ' . implode(', ', $fdFood['synonyms']) . '.') ?></p><?php endif; ?>
<p><a class="link-arrow" href="<?= e($fdHubPath) ?>"><?= e(ui('food.all')) ?></a></p></div>
<?php $ctaOptions = ['appPath' => 'herramientas/comer', 'medium' => 'tool', 'campaign' => 'puedo-comer-' . $slug, 'title' => ui('food.ctaTitle'), 'text' => ui('food.ctaText')]; require ROOT_DIR . '/partials/cta-primary.php'; ?>
<div class="section--tight"><?php $disclaimerRecord = $fdRecord; require ROOT_DIR . '/partials/disclaimer.php'; ?></div>
<?php $sourcesRecord = $fdRecord; require ROOT_DIR . '/partials/sources.php'; ?>
</article></main><?php require ROOT_DIR . '/partials/footer.php'; unset($fdData, $fdHub, $fdFoods, $fdSource, $fdHubPath, $fdFood, $fdShort, $fdPath, $fdVerdictLabel, $fdRecord, $fdDescription); ?>
