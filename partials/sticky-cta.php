<?php
/** Once per CONTENT page, after main/footer; $page path and optional weekNumber. */
declare(strict_types=1);
$scWeek = $page['weekNumber'] ?? null;
?>
<input class="ctabar-switch" type="checkbox" id="ctabar-dismiss" aria-label="<?= e(ui('foundation.dismiss')) ?>">
<div class="ctabar"><span class="ctabar__text"><b><?= e(site('name')) ?></b><?= e(ui('foundation.stickyText')) ?></span>
<a class="btn btn--primary" href="<?= e(app_link($scWeek === null ? 'content' : 'week', trim($page['path'], '/') . '-sticky', $scWeek === null ? [] : ['w' => $scWeek])) ?>"><?= e(content('cta')['primary']) ?></a>
<label class="ctabar__close" for="ctabar-dismiss"><span aria-hidden="true">×</span><span class="sr-only"><?= e(ui('foundation.dismiss')) ?></span></label></div><div class="ctabar-spacer" aria-hidden="true"></div>
<?php unset($scWeek); ?>
