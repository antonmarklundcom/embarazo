<?php
/** $gridWeeks:int[]; consumed. */
declare(strict_types=1); ?>
<ul class="week-grid"><?php foreach ($gridWeeks as $wgNumber): ?><li><a class="week-card" href="<?= e('/semana/' . $wgNumber . '/') ?>"><span class="week-card__n"><?= e(ui('foundation.week') . ' ' . $wgNumber) ?></span><span class="week-card__size"><?= e(content('semanas')[$wgNumber]['size']['name']) ?></span></a></li><?php endforeach; ?></ul>
<?php unset($gridWeeks, $wgNumber); ?>
