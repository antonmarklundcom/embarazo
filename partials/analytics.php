<?php
/**
 * Cookieless analytics, off by default. plan.md section 1.6 allows exactly one script and no consent banner:
 * Cloudflare Web Analytics. Enable it by setting in content/site.php
 *     'analytics' => ['cloudflare' => '<32-character token from the Cloudflare dashboard>'],
 * Anything else (null, another shape, a malformed token) renders nothing: analytics_token() decides,
 * and verify.sh checks both positions of the switch. No token is ever hard-coded here.
 */
declare(strict_types=1);
$anToken = analytics_token(site('analytics'));
if ($anToken !== null): ?>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"token": "<?= e($anToken) ?>"}'></script>
<?php endif; unset($anToken); ?>
