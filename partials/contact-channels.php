<?php
/** The configured contact channels (contact_channels()); rendered on /contacto/ only. Copy comes from ui('contactPage.*'). */
declare(strict_types=1);
$ccChannels = contact_channels();
if ($ccChannels === []) { return; }
?>
<section class="section wrap wrap--text section--tight"><h2><?= e(ui('contactPage.heading')) ?></h2>
<p><?= e(ui('contactPage.intro')) ?></p>
<ul class="keyfacts"><?php foreach ($ccChannels as $ccChannel): ?><li><span><?= e(ui('contactPage.' . $ccChannel['key'])) ?></span><b><a href="<?= e($ccChannel['href']) ?>"><?= e($ccChannel['text']) ?></a></b></li><?php endforeach; ?></ul>
<p><?= rich(ui('contactPage.note')) ?></p></section>
<?php unset($ccChannels, $ccChannel); ?>
