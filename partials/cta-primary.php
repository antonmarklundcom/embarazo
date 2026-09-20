<?php
/** Optional $ctaOptions:{medium,campaign,extra,title,text}; consumed after rendering. */
declare(strict_types=1);
$cpOptions = $ctaOptions ?? [];
?>
<aside class="cta-primary">
<h2><?= e($cpOptions['title'] ?? ui('foundation.primaryTitle')) ?></h2>
<?php if (!empty($cpOptions['text'])): ?><p><?= rich($cpOptions['text']) ?></p><?php endif; ?>
<a class="btn btn--primary btn--lg" href="<?= e(app_link($cpOptions['medium'] ?? 'product', $cpOptions['campaign'] ?? trim($page['path'] ?? '/', '/'), $cpOptions['extra'] ?? [])) ?>"><?= e(content('cta')['primary']) ?></a>
<?php require ROOT_DIR . '/partials/trust-strip.php'; ?>
</aside>
<?php unset($cpOptions, $ctaOptions); ?>
