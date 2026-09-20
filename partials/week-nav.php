<?php
/** Requires $n in 1..42; uses the same trimester boundaries as the content. */
declare(strict_types=1);
?>
<nav class="week-nav" aria-label="<?= e(ui('foundation.weekNav')) ?>">
<?php if ($n > 1): ?><a class="week-nav__link" rel="prev" href="<?= e('/semana/' . ($n - 1) . '/') ?>"><small><?= e(ui('foundation.previous')) ?></small><b><?= e(content('semanas')[$n - 1]['title']) ?></b></a><?php endif; ?>
<?php if ($n < 42): ?><a class="week-nav__link week-nav__link--next" rel="next" href="<?= e('/semana/' . ($n + 1) . '/') ?>"><small><?= e(ui('foundation.next')) ?></small><b><?= e(content('semanas')[$n + 1]['title']) ?></b></a><?php endif; ?>
</nav><a class="link-arrow" href="<?= e('/trimestre/' . week_trimester($n) . '/') ?>"><?= e(content('trimestres')[week_trimester($n)]['title']) ?></a>
