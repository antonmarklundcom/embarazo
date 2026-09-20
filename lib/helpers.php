<?php
/**
 * Escaping, URL and formatting helpers. Every value that reaches the page goes
 * through e().
 */

declare(strict_types=1);

/**
 * Escape for HTML text and attribute context.
 */
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * The site origin without a trailing slash. Falls back to the current request
 * host so local preview and the staging subdomain work with no config.php.
 */
function site_origin(): string
{
    $configured = cfg('SITE_URL');
    if ($configured !== null) {
        return rtrim($configured, '/');
    }

    $https  = ($_SERVER['HTTPS'] ?? '') === 'on' || ($_SERVER['SERVER_PORT'] ?? '') === '443';
    $host   = $_SERVER['HTTP_HOST'] ?? (string) site('domain');

    return ($https ? 'https://' : 'http://') . $host;
}

/**
 * Absolute URL for a site-root-relative path. Used for canonical, OG and the
 * sitemap; in-page links use the bare path.
 */
function url(string $path = '/'): string
{
    return site_origin() . '/' . ltrim($path, '/');
}

/**
 * Asset path with a cache-busting stamp taken from the file's mtime, so a
 * changed CSS or JS file is picked up without touching the filename.
 */
function asset(string $path): string
{
    $path = '/' . ltrim($path, '/');
    $file = ROOT_DIR . $path;

    return is_file($file) ? $path . '?v=' . filemtime($file) : $path;
}

/**
 * Business facts from content/site.php. A value the owner has not supplied yet
 * is null, and every partial hides rather than inventing one.
 */
function site(?string $key = null)
{
    $site = content('site');

    return $key === null ? $site : ($site[$key] ?? null);
}

/**
 * A UI string from content/ui.php — every visible label on the site lives
 * there, so a new site translates it once. Dot notation reaches into nested
 * groups: ui('form.submit').
 *
 * A second language is an additive file (content/ui.<lang>.php) plus a page
 * that selects it; nothing in this function has to change to allow that.
 */
function ui(string $key, string $default = ''): string
{
    $value = content('ui');
    foreach (explode('.', $key) as $segment) {
        if (!is_array($value) || !array_key_exists($segment, $value)) {
            return $default;
        }
        $value = $value[$segment];
    }

    return is_string($value) ? $value : $default;
}


/**
 * A static page record from content/pages.php, keyed by path.
 */
function page_meta(string $path): array
{
    return content('pages')[$path] ?? [];
}

/**
 * Cluster labels keyed by cluster id, in menu order.
 */
function clusters(): array
{
    return content('ui')['clusters'];
}

/**
 * The header/footer link trees from content/nav.php.
 */
function nav(?string $key = null)
{
    $nav = content('nav');

    return $key === null ? $nav : ($nav[$key] ?? []);
}

/**
 * Digits-only phone, suitable for wa.me and tel:.
 */
function phone_digits(?string $phone): string
{
    return preg_replace('/\D+/', '', (string) $phone) ?? '';
}

/**
 * wa.me deep link with a prefilled message, or null when no WhatsApp number is
 * configured yet. Callers fall back to /contacto/.
 */
function whatsapp_link(?string $text = null): ?string
{
    $number = phone_digits(site('whatsapp'));
    if ($number === '') {
        return null;
    }

    $link = 'https://wa.me/' . $number;
    if ($text !== null && $text !== '') {
        $link .= '?text=' . rawurlencode($text);
    }

    return $link;
}

/**
 * Where the primary "contact us" action points: WhatsApp when a number exists,
 * the contact page until then.
 */
function contact_link(?string $text = null): string
{
    return whatsapp_link($text) ?? '/contacto/';
}

/**
 * True when $path is the page currently being rendered — used for aria-current
 * in the nav.
 */
function is_current(string $path, string $currentPath): bool
{
    return rtrim($path, '/') === rtrim($currentPath, '/');
}

/** App hand-off; one origin and campaign contract for every CTA. */
function app_link(string $medium = 'product', string $campaign = 't0', array $extra = []): string
{
    $params = ['utm_source' => 'site', 'utm_medium' => $medium, 'utm_campaign' => $campaign];
    foreach (['w', 'fpp', 'fum', 'modo'] as $key) {
        if (!isset($extra[$key])) {
            continue;
        }
        $value = $extra[$key];
        if (!is_scalar($value) || is_bool($value)) {
            throw new InvalidArgumentException('App parameters must be scalar strings or numbers.');
        }
        $value = (string) $value;
        if ($key === 'w' && (!ctype_digit($value) || (int) $value < 1 || (int) $value > 42)) {
            throw new InvalidArgumentException('Week must be 1..42.');
        }
        if (in_array($key, ['fpp', 'fum'], true)) {
            $date = DateTimeImmutable::createFromFormat('!Y-m-d', $value);
            if ($date === false || $date->format('Y-m-d') !== $value) {
                throw new InvalidArgumentException('Date must be a real YYYY-MM-DD date.');
            }
        }
        $params[$key] = $key === 'w' ? (int) $value : $value;
    }
    // URI encoding here; callers use e() once at the HTML boundary (no double escaping).
    return 'https://app.embarazo.com.py/?' . http_build_query($params, '', '&', PHP_QUERY_RFC3986);
}

/** WhatsApp share URL. URI-encoded text; render the returned URL with e(). */
function wa_share(string $text, string $url): string
{
    return 'https://wa.me/?text=' . rawurlencode(trim($text . ' ' . $url));
}

/** Friendly-week boundaries shared by content and templates. */
function week_trimester(int $n): int
{
    if ($n < 1) {
        throw new InvalidArgumentException('Week must be positive.');
    }
    return $n <= 13 ? 1 : ($n <= 27 ? 2 : 3);
}

/** Plain disclaimer copy; caller escapes with e() and adds validAsOf/reviewer. */
function disclaimer_kind(string $kind): string
{
    $copy = content('cta')['disclaimers'];
    return $copy[$kind] ?? $copy['medical'];
}
