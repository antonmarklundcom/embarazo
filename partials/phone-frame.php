<?php
/** Requires $phoneWeek (week record) and $phoneNumber. Optional $phoneImage:{src,alt}. Inputs consumed. */
declare(strict_types=1);
?>
<div class="phone" role="img" aria-label="<?= e(ui('foundation.phone') . ' · ' . $phoneWeek['title']) ?>"><div class="phone__screen">
<?php if (!empty($phoneImage['src'])): ?><img src="<?= e($phoneImage['src']) ?>" alt="<?= e($phoneImage['alt']) ?>" width="236" height="498">
<?php else: ?><div class="phone__mock">
<div class="phone__status"><span><?= e(site('name')) ?></span><span aria-hidden="true">◍ ◍ ▮</span></div>
<div class="phone__ring" style="<?= e('--progress:' . min(100, $phoneNumber / 40 * 100) . '%') ?>"><span><span class="phone__wk"><?= e(ui('foundation.week')) ?></span><span class="phone__wkn"><?= e((string) $phoneNumber) ?></span></span></div>
<div class="phone__card"><b><?= e(str_replace('{size}', $phoneWeek['size']['name'], ui('foundation.size'))) ?></b><?= e(strtr(ui('foundation.measure'), ['{length}' => (string) $phoneWeek['size']['lengthCm'], '{weight}' => (string) $phoneWeek['size']['weightG']])) ?></div>
<div class="phone__card"><?= e($phoneWeek['milestone']) ?></div>
<div class="phone__chips"><?php foreach (content('ui')['foundation']['phoneChips'] as $phLabel): ?><span class="phone__chip"><?= e($phLabel) ?></span><?php endforeach; ?></div>
<div class="phone__tabs"><?php foreach (content('ui')['foundation']['phoneTabs'] as $phLabel): ?><span><?= e($phLabel) ?></span><?php endforeach; ?></div>
</div><?php endif; ?></div></div>
<?php unset($phoneWeek, $phoneNumber, $phoneImage, $phLabel); ?>
