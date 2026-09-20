<?php
/** Requires $n; optional $ctaOptions:{campaign}; consumed. */
declare(strict_types=1);
$cwOptions = $ctaOptions ?? [];
?>
<aside class="cta-week">
<span class="cta-week__n" aria-hidden="true"><?= e((string) $n) ?></span>
<div class="cta-week__body"><h3><?= e(ui('foundation.weekTitle')) ?></h3><p><?= e(ui('foundation.weekText')) ?></p>
<a class="btn btn--primary" href="<?= e(app_link('week', $cwOptions['campaign'] ?? 'semana-' . $n, ['w' => $n])) ?>"><?= e(str_replace('{n}', (string) $n, content('cta')['week'])) ?></a></div>
</aside>
<?php unset($cwOptions, $ctaOptions); ?>
