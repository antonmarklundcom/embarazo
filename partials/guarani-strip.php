<?php
/** $guaraniItems:[{es,gn}], $guaraniReviewed:true only after native review. Inputs consumed. */
declare(strict_types=1);
?>
<?php if (($guaraniReviewed ?? false) && !empty($guaraniItems)): ?><aside class="gn"><h2 class="gn__label"><?= e(ui('foundation.guarani')) ?></h2><dl><?php foreach ($guaraniItems as $gnItem): ?><dt><?= e($gnItem['es']) ?></dt><dd lang="gn"><?= e($gnItem['gn']) ?></dd><?php endforeach; ?></dl></aside><?php endif; ?>
<?php unset($guaraniItems, $guaraniReviewed, $gnItem); ?>
