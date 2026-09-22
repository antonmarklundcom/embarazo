<?php
/**
 * The configured contact channels (contact_channels()); rendered on /contacto/ only.
 * Copy comes from ui('contactPage.*').
 *
 * Each channel is a button, not a line of text: on a phone the number IS the
 * action, and a tap target the size of a sentence is a tap target people miss.
 * WhatsApp keeps its own colour (.btn--wa) so it reads as WhatsApp, while the
 * page's primary red button stays the app — the channels sit beside that
 * hierarchy rather than competing with it.
 */
declare(strict_types=1);
$ccChannels = contact_channels();
if ($ccChannels === []) { return; }
?>
<section class="section wrap wrap--text section--tight"><h2><?= e(ui('contactPage.heading')) ?></h2>
<p><?= e(ui('contactPage.intro')) ?></p>
<div class="channels">
<?php foreach ($ccChannels as $ccChannel): ?>
<a class="btn <?= $ccChannel['key'] === 'whatsapp' ? 'btn--wa' : 'btn--secondary' ?> btn--lg channels__btn" href="<?= e($ccChannel['href']) ?>"<?= $ccChannel['key'] === 'whatsapp' ? ' rel="noopener"' : '' ?>>
<span class="channels__label"><?= e(ui('contactPage.' . $ccChannel['key'])) ?></span>
<span class="channels__value"><?= e($ccChannel['text']) ?></span></a>
<?php endforeach; ?>
</div>
<p class="channels__note"><?= rich(ui('contactPage.note')) ?></p></section>
<?php unset($ccChannels, $ccChannel); ?>
