<?php
/** $gridWeeks:int[]; consumed. */
declare(strict_types=1);
$wgVisual = !empty($gridVisual); ?>
<ul class="week-grid"><?php foreach ($gridWeeks as $wgNumber): $wgRecord = content('semanas')[$wgNumber]; ?><li><a class="week-card" href="<?= e('/semana/' . $wgNumber . '/') ?>">
<?php if ($wgVisual): $wgArt = content('week-overview')['weeks'][$wgNumber] ?? null; ?>
<span class="week-card__art">
<?php if ($wgArt !== null):
    $wgBaby = $wgArt['baby']; $wgFood = $wgArt['comparison'] ?? $wgBaby;
    $wgBabyBase = '/assets/img/week-overview/' . $wgBaby['slug'];
    $wgFoodBase = '/assets/img/week-overview/' . $wgFood['slug']; ?>
<picture data-week-picture>
<?php foreach (['avif', 'webp'] as $wgFormat):
    $wgBabySet = asset($wgBabyBase . '-160.' . $wgFormat) . ' 160w, ' . asset($wgBabyBase . '-320.' . $wgFormat) . ' 320w';
    $wgFoodSet = asset($wgFoodBase . '-160.' . $wgFormat) . ' 160w, ' . asset($wgFoodBase . '-320.' . $wgFormat) . ' 320w'; ?>
<source type="<?= e('image/' . $wgFormat) ?>" srcset="<?= e($wgBabySet) ?>" data-baby-srcset="<?= e($wgBabySet) ?>" data-food-srcset="<?= e($wgFoodSet) ?>" sizes="(min-width: 1024px) 200px, (min-width: 720px) 180px, 42vw">
<?php endforeach; ?>
<img src="<?= e(asset($wgBabyBase . '-160.webp')) ?>" data-baby-src="<?= e(asset($wgBabyBase . '-160.webp')) ?>" data-food-src="<?= e(asset($wgFoodBase . '-160.webp')) ?>" alt="<?= e($wgBaby['alt']) ?>" data-baby-alt="<?= e($wgBaby['alt']) ?>" data-food-alt="<?= e($wgFood['alt']) ?>" width="320" height="320" loading="lazy" decoding="async">
</picture>
<?php else: echo picture($wgRecord['image'] ?? [], '(min-width: 720px) 180px, 42vw', 'lazy'); endif; ?>
</span>
<?php endif; ?>
<span class="week-card__n"><?= e(ui('foundation.week') . ' ' . $wgNumber) ?></span>
<span class="week-card__size"><?= e($wgRecord['size']['name']) ?></span>
<?php if ($wgVisual): ?>
<?php if ($wgRecord['size']['lengthCm'] !== null): ?><span class="week-card__measure" data-week-length><?= e(strtr(ui('foundation.measureLength'), ['{length}' => fmt_measure($wgRecord['size']['lengthCm'])])) ?></span><?php endif; ?>
<?php if ($wgRecord['size']['weightG'] !== null): ?><span class="week-card__measure" data-week-weight><?= e(strtr(ui('foundation.measureWeight'), ['{weight}' => fmt_measure($wgRecord['size']['weightG'])])) ?></span><?php endif; ?>
<?php endif; ?>
</a></li><?php endforeach; ?></ul>
<?php unset($gridWeeks, $gridVisual, $wgNumber, $wgVisual, $wgRecord, $wgArt, $wgBaby, $wgFood, $wgBabyBase, $wgFoodBase, $wgFormat, $wgBabySet, $wgFoodSet); ?>
