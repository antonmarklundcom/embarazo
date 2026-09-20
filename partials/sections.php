<?php
/** $bodySections:[{h2,body[],items?[{title,text}],table?{head[],rows[][]}}]; consumed. */
declare(strict_types=1);
foreach ($bodySections ?? [] as $bsSection): ?>
<section class="prose section--tight">
<?php if (!empty($bsSection['h2'])): ?><h2><?= e($bsSection['h2']) ?></h2><?php endif; ?>
<?php foreach ($bsSection['body'] ?? [] as $bsParagraph): ?><p><?= rich($bsParagraph) ?></p><?php endforeach; ?>
<?php if (!empty($bsSection['items'])): ?><ul class="keyfacts"><?php foreach ($bsSection['items'] as $bsItem): ?><li><span><?= e($bsItem['title'] ?? '') ?></span><b><?= rich($bsItem['text'] ?? '') ?></b></li><?php endforeach; ?></ul><?php endif; ?>
<?php if (!empty($bsSection['table'])): ?><div class="table-scroll" role="region" tabindex="0" aria-label="<?= e($bsSection['h2']) ?>"><table><thead><tr><?php foreach ($bsSection['table']['head'] as $bsCell): ?><th scope="col"><?= e($bsCell) ?></th><?php endforeach; ?></tr></thead><tbody>
<?php foreach ($bsSection['table']['rows'] as $bsRow): ?><tr><?php foreach ($bsRow as $bsCell): ?><td><?= e((string) $bsCell) ?></td><?php endforeach; ?></tr><?php endforeach; ?></tbody></table></div><?php endif; ?>
</section><?php endforeach; unset($bodySections, $bsSection, $bsParagraph, $bsItem, $bsCell, $bsRow); ?>
