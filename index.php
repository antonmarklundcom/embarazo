<?php
declare(strict_types=1);
require __DIR__ . '/lib/bootstrap.php';
$home = page_meta('/');
$page = ['title' => $home['title'], 'description' => $home['description'], 'path' => '/', 'faq' => $home['faq'], 'trust' => $home['trust'], 'sticky' => false];
require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main" class="home-page">
<section class="hero wrap home-hero"><div class="hero__inner"><div class="hero__copy">
<p class="eyebrow"><?= e($home['eyebrow']) ?></p><h1><?= e($home['h1']) ?></h1><p class="lead"><?= rich($home['lead']) ?></p>
<div class="hero__actions"><a class="btn btn--primary btn--lg" data-home-app data-base="<?= e(app_link('home', 'hero')) ?>" href="<?= e(app_link('home', 'hero')) ?>"><?= e($home['primary']) ?></a><a class="home-hero__learn" href="/app/"><?= e($home['secondary']) ?> →</a></div>
<?php require ROOT_DIR . '/partials/trust-strip.php'; ?>
<p class="home-account"><?= e($home['accountNote']) ?></p>
<div class="home-week" aria-labelledby="home-week-label"><label id="home-week-label" for="home-week"><?= e($home['explore']['label']) ?></label><div class="home-week__row"><select id="home-week" data-home-week aria-describedby="home-week-hint"><option value=""><?= e($home['explore']['placeholder']) ?></option><?php foreach (content('semanas') as $n => $week): ?><option value="<?= e((string) $n) ?>"><?= e($week['title']) ?></option><?php endforeach; ?></select><a class="btn btn--secondary" data-home-guide href="/semana/"><?= e($home['explore']['guideLabel']) ?></a></div><p id="home-week-hint"><?= rich($home['explore']['hint']) ?></p><p class="sr-only" data-home-status role="status" aria-atomic="true"></p></div>
</div><div class="hero__art home-preview"><div><p class="home-preview__label"><?= e($home['previewLabel']) ?></p><?php $phoneNumber = $home['phoneWeek']; $phoneWeek = content('semanas')[$phoneNumber]; require ROOT_DIR . '/partials/phone-frame.php'; ?></div></div></div></section>
<section class="section wrap home-care"><div class="home-section-head"><h2><?= e($home['guidesTitle']) ?></h2><p><?= e($home['guidesLead']) ?></p></div><div class="grid grid--3"><?php foreach ($home['guides'] as $guide): ?><a class="home-guide" href="<?= e($guide['path']) ?>"><span class="home-guide__eyebrow"><?= e($guide['label']) ?></span><h3><?= e($guide['title']) ?></h3><p><?= e($guide['text']) ?></p><span class="link-arrow"><?= e($guide['action']) ?></span></a><?php endforeach; ?></div></section>
<section class="section section--surface"><div class="wrap"><div class="home-section-head"><h2><?= e($home['proofTitle']) ?></h2><p><?= rich($home['proofLead']) ?></p></div><div class="grid grid--3"><?php foreach ($home['proofs'] as $proof): ?><div class="home-value"><h3><?= e($proof['title']) ?></h3><p><?= rich($proof['text']) ?></p></div><?php endforeach; ?></div></div></section>
<section class="section wrap"><div class="home-section-head"><h2><?= e($home['featuresTitle']) ?></h2><p><?= rich($home['featuresLead']) ?></p></div><div class="bento"><?php foreach ($home['features'] as $i => $feature): ?><a class="bento__tile <?= e('bento__tile--' . $feature['tone'] . ($i === 0 ? ' bento__tile--wide' : '')) ?>" href="<?= e(app_page_link($feature['appPath'], 'home', 'bento-' . $feature['key'])) ?>"><span class="bento__icon" aria-hidden="true"><?= e($feature['icon']) ?></span><h3><?= e($feature['title']) ?></h3><p><?= e($feature['text']) ?></p><span class="link-arrow"><?= e($feature['label']) ?></span></a><?php endforeach; ?></div></section>
<section class="section section--arena"><div class="wrap grid grid--2"><div><h2><?= e($home['weekTitle']) ?></h2><p><?= rich($home['weekText']) ?></p><a class="link-arrow" href="/semana/"><?= e($home['weekLink']) ?></a></div><div><?php $gridWeeks = $home['weeks']; require ROOT_DIR . '/partials/week-grid.php'; ?></div></div></section>
<section class="section wrap wrap--text"><?php $faqItems = $home['faq']; $faqTitle = $home['faqTitle']; require ROOT_DIR . '/partials/faq.php'; ?></section>
<section class="section section--tight wrap wrap--text"><div class="cta-primary"><h2><?= e($home['closingTitle']) ?></h2><p><?= rich($home['closingText']) ?></p><a class="btn btn--primary btn--lg" data-home-app data-base="<?= e(app_link('home', 'cierre')) ?>" href="<?= e(app_link('home', 'cierre')) ?>"><?= e($home['primary']) ?></a><?php require ROOT_DIR . '/partials/trust-strip.php'; ?></div></section>
</main><?php require ROOT_DIR . '/partials/footer.php'; ?>
