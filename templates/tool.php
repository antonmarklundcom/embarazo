<?php
/**
 * Renders one tool from content/tools.php. Every /herramientas/<slug>/index.php
 * builds its own calculator markup into $toolCalcHtml (via output buffering,
 * the same pattern templates/article.php uses for $sections) and then requires
 * this file — the shared chrome (breadcrumbs, hero, SEO copy, FAQ, related
 * services, CTA) is common to all six tools; the calculator itself is not,
 * because the six field sets have nothing in common.
 *
 *   $slug         string  required — looked up in content('tools')
 *   $toolCalcHtml string  required — pre-rendered calculator/quiz markup,
 *                         already escaped by the page that built it
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

/* The reference tables and their review date come from the market module
   (lib/market/<market>.php), so a calculator page reads the same numbers the
   JS calculator does and neither hardcodes a country's rules. */
$lastReviewed = market_last_reviewed();

$page = [
    'title'       => $tool['seoTitle'] !== '' ? $tool['seoTitle'] : $tool['title'],
    'description' => $tool['metaDescription'],
    'path'        => $tool['path'],
    'breadcrumbs' => [
        ['label' => ui('nav.tools'), 'path' => '/herramientas/'],
        ['label' => $tool['title'], 'path' => $tool['path']],
    ],
    'faq' => $tool['faq'],
    'tool' => $tool,
];

require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main">

  <section class="hero">
    <div class="wrap">
      <?php require ROOT_DIR . '/partials/breadcrumbs.php'; ?>
      <div class="hero__copy">
        <p class="eyebrow"><?= e($tool['hero']['eyebrow']) ?></p>
        <h1><?= e($tool['hero']['h1']) ?></h1>
        <p class="lead"><?= e($tool['hero']['lead']) ?></p>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap stack">
      <p class="note tool-reviewed">
        <?= e(ui('tools.reviewed_prefix')) ?>
        <?= e($lastReviewed) ?>. <?= e(ui('tools.orientativo')) ?>
      </p>

      <?= $toolCalcHtml ?>
    </div>
  </section>

  <?php if ($tool['intro'] !== []): ?>
    <section class="section section--surface">
      <div class="wrap prose">
        <?php foreach ($tool['intro'] as $paragraph): ?>
          <p><?= e($paragraph) ?></p>
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



  

  <script src="<?= e(asset('/assets/js/market/' . market_id() . '.js')) ?>" defer></script>
  <script src="<?= e(asset('/assets/js/tools/tools-shared.js')) ?>" defer></script>
  <script src="<?= e(asset('/assets/js/tools/' . $slug . '.js')) ?>" defer></script>
</main>
<?php require ROOT_DIR . '/partials/footer.php'; ?>

