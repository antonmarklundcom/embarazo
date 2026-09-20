<?php
/** Builds escaped $toolCalcHtml for templates/tool.php; requires $slug. */
declare(strict_types=1);
require_once dirname(__DIR__, 3) . '/lib/bootstrap.php';
if (!isset($slug, content('tools')[$slug])) {
    http_response_code(404);
    exit;
}
$record = content('tools')[$slug];
$copy = $record['ui'];
$pregnancy = $slug === 'calculadora';
$destination = app_link($record['handoff']['medium'], $slug, $pregnancy ? [] : ['modo' => 'planeando']);
ob_start();
?>
<div class="calc" id="calc">
<?php if ($pregnancy): ?>
  <div class="calc__modes" role="tablist" aria-label="<?= e($copy['modeLabel']) ?>">
    <?php foreach (['fum', 'fpp'] as $mode): ?>
    <button class="calc__mode" type="button" role="tab" id="tab-<?= e($mode) ?>" aria-selected="<?= $mode === 'fum' ? 'true' : 'false' ?>" tabindex="<?= $mode === 'fum' ? '0' : '-1' ?>" aria-controls="panel-fecha" data-mode="<?= e($mode) ?>"><?= e($copy['modes'][$mode]['tab']) ?></button>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
  <p class="calc__error" id="calc-error" role="alert" hidden><span id="calc-error-text"></span></p>
  <div id="panel-fecha"<?= $pregnancy ? ' role="tabpanel" aria-labelledby="tab-fum"' : '' ?>>
    <label class="field" id="field-fecha" for="calc-fecha">
      <span class="field__label" id="calc-label"><?= e($pregnancy ? $copy['modes']['fum']['label'] : $copy['dateLabel']) ?></span>
      <span class="field__hint" id="calc-hint"><?= e($pregnancy ? $copy['modes']['fum']['hint'] : $copy['dateHint']) ?></span>
      <input type="date" id="calc-fecha" autocomplete="off" aria-describedby="calc-hint calc-error">
    </label>
  </div>
<?php if (!$pregnancy): ?>
  <label class="field" for="calc-cycle"><span class="field__label"><?= e($copy['cycleLabel']) ?></span>
    <span class="field__hint" id="cycle-hint"><?= e($copy['cycleHint']) ?></span>
    <input type="number" id="calc-cycle" min="21" max="35" step="1" value="28" inputmode="numeric" aria-describedby="cycle-hint calc-error">
  </label>
<?php endif; ?>
  <button class="btn btn--primary btn--lg btn--block" type="button" id="calc-go" disabled><?= e($copy['calculate']) ?></button>
  <noscript><p><?= e($copy['noScript']) ?></p></noscript>
<?php if (!$pregnancy): ?><p class="calc__notice"><strong><?= e($copy['notice']) ?></strong></p><?php endif; ?>
  <div class="calc__result" id="calc-result" hidden aria-live="polite" aria-atomic="true">
    <div class="result-card">
      <?php if ($pregnancy): ?><strong class="result-card__wk"><span id="r-week"></span><small><?= e($copy['weekLabel']) ?></small></strong><?php endif; ?>
      <ul class="result-card__rows">
        <?php foreach ($copy['rows'] as $id => $label): ?><li><span><?= e($label) ?></span><b id="r-<?= e($id) ?>"></b></li><?php endforeach; ?>
      </ul>
    </div>
    <aside class="cta-tool">
      <h2><?= e($copy['handoffTitle']) ?></h2><p><?= e($copy['handoffText']) ?></p>
      <a class="btn btn--primary btn--block" id="r-cta" data-base="<?= e($destination) ?>" href="<?= e($destination) ?>"><?= e($copy['handoffButton']) ?></a>
    </aside>
    <?php if ($pregnancy): ?><p><a class="link-arrow" id="r-weeklink" href="/semana/"><?= e($copy['weeksLink']) ?></a></p><?php endif; ?>
  </div>
</div>
<script type="application/json" id="tool-copy"><?= json_encode($copy, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR) ?></script>
<script src="<?= e(asset('/assets/js/tools/pregnancy.js')) ?>" defer></script>
<?php
$toolCalcHtml = ob_get_clean();
