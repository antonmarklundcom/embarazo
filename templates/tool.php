<?php
/**
 * Renders one tool from content/tools.php. Three-line routes set $slug.
 * The island adapter builds escaped markup; this template supplies content chrome.
 *
 *   $slug         string  required — looked up in content('tools')
 *   $toolCalcHtml string  optional — pre-rendered, already escaped island markup
 */

declare(strict_types=1);

/** @var string $slug */
/** @var string $toolCalcHtml */
require_once __DIR__ . '/../lib/bootstrap.php';
$tool = content('tools')[$slug ?? ''] ?? null;

if ($tool === null) {
    http_response_code(404);
    require ROOT_DIR . '/404.php';
    return;
}

$tool += page_meta($tool['path']);
if (!isset($toolCalcHtml)) {
    require ROOT_DIR . '/assets/js/tools/island.php';
}

$page = [
    'title'       => $tool['seoTitle'] !== '' ? $tool['seoTitle'] : $tool['title'],
    'description' => $tool['metaDescription'],
    'path'        => $tool['path'],
    'noindex'     => !empty($tool['stub']) || !empty($tool['noindex']),
    'breadcrumbs' => [
        ['label' => $tool['title'], 'path' => $tool['path']],
    ],
    'faq' => $tool['faq'],
    'tool' => $tool,
    'sticky' => true,
];

require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main" class="tool-page">

  <section class="hero">
    <div class="wrap">
      <?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
      <div class="hero__copy">
        <p class="eyebrow"><?= e($tool['hero']['eyebrow']) ?></p>
        <h1><?= e($tool['hero']['h1']) ?></h1>
        <p class="lead"><?= rich($tool['hero']['lead']) ?></p>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap stack">
      <?= $toolCalcHtml ?>
    </div>
  </section>

  <?php if ($tool['intro'] !== []): ?>
    <section class="section section--surface">
      <div class="wrap prose">
        <?php foreach ($tool['intro'] as $index => $paragraph): ?>
          <?php if (isset($tool['ui']['introHeadings'][$index])): ?><h2><?= e($tool['ui']['introHeadings'][$index]) ?></h2><?php endif; ?>
          <p><?= rich($paragraph) ?></p>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endif; ?>
  <?php if ($tool['faq'] !== []): ?>
    <section class="section">
      <div class="wrap">
        <?php $faqItems = $tool['faq']; ?>
        <?php require ROOT_DIR . '/partials/faq.php'; ?>
      </div>
    </section>
  <?php endif; ?>
  <section class="section"><div class="wrap">
    <p><a class="link-arrow" href="/semana/"><?= e($tool['ui']['weeksLink']) ?></a></p>
    <?php $disclaimerRecord = $tool; require ROOT_DIR . '/partials/disclaimer.php'; ?>
    <?php $sourcesRecord = $tool; require ROOT_DIR . '/partials/sources.php'; ?>
  </div></section>

  <script src="<?= e(asset('/assets/js/market/' . market_id() . '.js')) ?>" defer></script>
  <script src="<?= e(asset('/assets/js/tools/tools-shared.js')) ?>" defer></script>
  <script src="<?= e(asset('/assets/js/tools/' . $slug . '.js')) ?>" defer></script>
</main>
<?php require ROOT_DIR . '/partials/footer.php'; ?>
