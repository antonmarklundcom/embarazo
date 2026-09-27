<?php
/** Route sets $origin (guarani|espanol|biblico or null for the /nombres/ hub) and $gender (f|m|u or null). Names and meanings are the app seed's, verbatim. */
declare(strict_types=1);
require_once __DIR__ . '/../lib/bootstrap.php';
$nmData = content('nombres');
$nmCopy = content('nombres-hub');
$nmOrigin = $origin ?? null;
$nmGender = $gender ?? null;
$nmUrl = static fn(?string $o, ?string $g = null): string => '/nombres/' . ($o === null ? '' : $nmData['originSlugs'][$o] . '/') . ($g === null ? '' : $nmData['genderSlugs'][$g] . '/');
$nmOf = static fn(?string $o, ?string $g = null): array => array_values(array_filter($nmData['names'], static fn(array $n): bool => ($o === null || $n['origin'] === $o) && ($g === null || $n['gender'] === $g)));
if ($nmOrigin !== null && !isset($nmCopy['origins'][$nmOrigin])) { require ROOT_DIR . '/404.php'; return; }
if ($nmGender !== null && !in_array([$nmOrigin, $nmGender], $nmData['genderPages'], true)) { require ROOT_DIR . '/404.php'; return; }
$nmText = $nmOrigin === null ? $nmCopy['hub'] : $nmCopy['origins'][$nmOrigin];
$nmList = $nmOf($nmOrigin, $nmGender);
$nmPath = $nmUrl($nmOrigin, $nmGender);
$nmTitle = $nmGender === null ? $nmText['title'] : strtr($nmCopy['genderTitle'], ['{origin}' => $nmText['title'], '{gender}' => $nmCopy['genderLabels'][$nmGender]]);
$nmRecord = ['title' => $nmTitle, 'kind' => 'product', 'updated' => $nmData['updated'], 'reviewedBy' => null, 'metaDescription' => $nmText['metaDescription']];
$nmCrumbs = [['label' => $nmCopy['hub']['title'], 'path' => '/nombres/']];
if ($nmOrigin !== null) { $nmCrumbs[] = ['label' => $nmText['title'], 'path' => $nmUrl($nmOrigin)]; }
if ($nmGender !== null) { $nmCrumbs[] = ['label' => $nmCopy['genderLabels'][$nmGender], 'path' => $nmPath]; }
$page = ['title' => $nmGender === null ? $nmText['seoTitle'] : $nmTitle, 'description' => $nmGender === null ? $nmText['metaDescription'] : $nmTitle . ' — ' . $nmText['metaDescription'],
    'path' => $nmPath, 'record' => $nmRecord, 'kind' => 'product', 'sticky' => true, 'noindex' => false, 'breadcrumbs' => $nmCrumbs];
require ROOT_DIR . '/partials/head.php'; require ROOT_DIR . '/partials/header.php'; ?>
<main id="main"><article class="wrap wrap--text section section--tight">
<?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
<h1><?= e($nmGender === null ? $nmText['h1'] : $nmTitle) ?></h1>
<p class="lead"><?= rich(str_replace('{count}', (string) count($nmList), $nmText['lead'])) ?></p>
<?php if ($nmOrigin === null): ?>
<div class="grid grid--3 section--tight"><?php foreach ($nmCopy['origins'] as $nmKey => $nmOriginText): $nmSome = $nmOf($nmKey); ?><a class="hub-card hub-card--petrol" href="<?= e($nmUrl($nmKey)) ?>"><h2><?= e($nmOriginText['title']) ?></h2><p><?= e(str_replace('{n}', (string) count($nmSome), ui('names.count')) . ': ' . implode(', ', array_column(array_slice($nmSome, 0, 4), 'name')) . '…') ?></p></a><?php endforeach; ?></div>
<?php else: ?>
<?php $nmGroups = $nmGender === null ? array_keys($nmCopy['genderLabels']) : [$nmGender]; ?>
<?php if ($nmGender === null): ?><nav class="chips" aria-label="<?= e(ui('names.filter')) ?>"><?php foreach ($nmGroups as $nmG): $nmCount = count($nmOf($nmOrigin, $nmG)); if ($nmCount > 0): ?><a class="chip" href="<?= e(in_array([$nmOrigin, $nmG], $nmData['genderPages'], true) ? $nmUrl($nmOrigin, $nmG) : '#' . $nmData['genderSlugs'][$nmG]) ?>"><?= e($nmCopy['genderLabels'][$nmG] . ' (' . $nmCount . ')') ?></a> <?php endif; endforeach; ?></nav><?php endif; ?>
<?php foreach ($nmGroups as $nmG): $nmGroup = $nmOf($nmOrigin, $nmG); if ($nmGroup === []) { continue; } ?>
<section class="section--tight" id="<?= e($nmData['genderSlugs'][$nmG]) ?>"><?php if ($nmGender === null): ?><h2><?= e($nmCopy['genderLabels'][$nmG]) ?></h2><?php endif; ?><ul class="name-list">
<?php foreach ($nmGroup as $nmName): ?><li><b><?= e($nmName['name']) ?></b>: <?= e($nmName['meaning']) ?></li><?php endforeach; ?>
</ul></section><?php endforeach; ?>
<?php if ($nmGender !== null): ?><p><a class="link-arrow" href="<?= e($nmUrl($nmOrigin)) ?>"><?= e(str_replace('{origin}', mb_strtolower($nmText['title']), ui('names.back'))) ?></a></p><?php endif; ?>
<nav class="section--tight" aria-label="<?= e(ui('names.others')) ?>"><h2><?= e(ui('names.others')) ?></h2><p><?php foreach ($nmCopy['origins'] as $nmKey => $nmOriginText): if ($nmKey === $nmOrigin) { continue; } ?><a class="link-arrow" href="<?= e($nmUrl($nmKey)) ?>"><?= e($nmOriginText['title']) ?></a><br><?php endforeach; ?></p></nav>
<?php endif; ?>
<?php $ctaOptions = ['appPath' => 'herramientas/nombres', 'medium' => 'tool', 'campaign' => trim($nmPath, '/') === 'nombres' ? 'nombres' : str_replace('/', '-', trim($nmPath, '/')), 'title' => ui('names.ctaTitle'), 'text' => ui('names.ctaText')]; require ROOT_DIR . '/partials/cta-primary.php'; ?>
</article></main><?php require ROOT_DIR . '/partials/footer.php'; unset($nmData, $nmCopy, $nmOrigin, $nmGender, $nmUrl, $nmOf, $nmText, $nmList, $nmPath, $nmTitle, $nmRecord, $nmCrumbs, $nmKey, $nmOriginText, $nmSome, $nmGroups, $nmG, $nmCount, $nmGroup, $nmName); ?>
