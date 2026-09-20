<?php
/** Optional $ctaOptions:{medium,campaign,extra,title,text}; consumed. */
declare(strict_types=1);
$ctOptions = $ctaOptions ?? [];
?>
<aside class="cta-tool"><h2><?= e($ctOptions['title'] ?? ui('foundation.toolTitle')) ?></h2>
<?php if (!empty($ctOptions['text'])): ?><p><?= e($ctOptions['text']) ?></p><?php endif; ?>
<a class="btn btn--primary" href="<?= e(app_link($ctOptions['medium'] ?? 'tool', $ctOptions['campaign'] ?? trim($page['path'] ?? '/', '/'), $ctOptions['extra'] ?? [])) ?>"><?= e(content('cta')['tool']) ?></a></aside>
<?php unset($ctOptions, $ctaOptions); ?>
