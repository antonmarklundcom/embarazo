<?php
/** Hidden until a confirmed WhatsApp number exists. */
declare(strict_types=1);
$fabLink = whatsapp_link(ui('cta.whatsapp_long'));
if ($fabLink === null) { return; }
?>
<a class="wa-fab" href="<?= e($fabLink) ?>" rel="noopener"><?= e(ui('cta.whatsapp_long')) ?></a>
<?php unset($fabLink); ?>
