<?php
/**
 * Content-derived route contract: path<TAB>status<TAB>indexable|stub.
 * php deploy/routes.php [site-root] [--check-files|--audit-data]
 * Lane 2 adds content records and three-line route files, never this list.
 */
declare(strict_types=1);

$root = $argv[1] ?? dirname(__DIR__);
require rtrim($root, '/\\') . '/lib/bootstrap.php';
$mode = $argv[2] ?? '';
$collections = [
    'pages' => content('pages'), 'weeks' => content('semanas'),
    'trimesters' => content('trimestres'), 'hubs' => content('clusters'),
    'articles' => content('articulos'), 'blog' => content('blog'), 'tools' => content('tools'),
];
$routes = [];
$files = [];
$records = [];
$problems = [];
$add = static function (string $type, $key, string $path, array $record, string $local, $value, string $template) use (&$routes, &$files, &$records, &$problems, $collections): void {
    // Existing page placeholders still control hub/trimester visibility until authored.
    $meta = $record + ($collections['pages'][$path] ?? []);
    $indexable = empty($meta['stub']) && empty($meta['noindex']);
    if ($type === 'weeks') {
        $indexable = $indexable && (bool) array_filter($record['sections'] ?? []);
    }
    $routes[$path] = [200, $indexable ? 'indexable' : 'stub'];
    $depth = count(array_filter(explode('/', trim($path, '/'))));
    $file = ROOT_DIR . rtrim($path, '/') . '/index.php';
    $files[$file] = "<?php\n\$" . $local . ' = ' . var_export($value, true) . ';' . ($template === 'tool' ? " \$toolCalcHtml = '';" : '') . "\nrequire __DIR__ . '/" . str_repeat('../', $depth) . 'templates/' . $template . ".php';\n";
    $records[] = ['type' => $type, 'key' => $key, 'path' => $path, 'indexable' => $indexable, 'record' => $record];
    if (isset($record['path']) && $record['path'] !== $path) {
        $problems[] = "{$type}/{$key}: path must be {$path}, got {$record['path']}";
    }
};
foreach ($collections['pages'] as $path => $record) {
    if (rtrim($path, '/') === '/404') { continue; }
    $weekHub = $path === '/semana/';
    $add('pages', $path, $path, $record, $weekHub ? 'cluster' : 'path', $weekHub ? 'semana' : $path, $weekHub ? 'hub' : 'page');
}
foreach ($collections['trimesters'] as $n => $record) {
    $add('trimesters', $n, '/trimestre/' . $n . '/', $record + ['kind' => 'medical'], 'n', (int) $n, 'trimester');
}
foreach ($collections['hubs'] as $cluster => $record) {
    $add('hubs', $cluster, '/' . $cluster . '/', $record, 'cluster', $cluster, 'hub');
}
foreach ($collections['weeks'] as $n => $record) {
    $add('weeks', $n, '/semana/' . $n . '/', $record + ['kind' => 'medical'], 'n', (int) $n, 'week');
}
foreach ($collections['articles'] as $slug => $record) {
    $add('articles', $slug, '/' . $record['cluster'] . '/' . $slug . '/', $record, 'slug', $slug, 'article');
}
foreach ($collections['blog'] as $key => $record) {
    $slug = $record['slug'] ?? $key;
    $add('blog', $key, '/blog/' . $slug . '/', $record, 'slug', $slug, 'article');
}
foreach ($collections['tools'] as $slug => $record) {
    $add('tools', $slug, $record['path'], $record, 'slug', $slug, 'tool');
}

if ($mode === '--check-files') {
    foreach ($files as $file => $code) {
        if (!is_file($file)) {
            $problems[] = "Missing route file: {$file}\nCreate it with exactly these three lines:\n{$code}";
        }
    }
    if ($problems !== []) { echo implode("\n", $problems), "\n"; }
    exit($problems === [] ? 0 : 1);
}
if ($mode === '--audit-data') {
    echo json_encode(['collections' => $collections, 'records' => $records], JSON_THROW_ON_ERROR);
    exit;
}

// Non-content endpoints and security probes retain their static status contract.
$routes['/robots.txt'] = [200, 'stub'];
$routes['/sitemap.xml'] = [200, 'stub'];
$routes['/esta-pagina-no-existe/'] = [404, 'stub'];
foreach (['/lib/helpers.php', '/lib/market/py.php', '/content/site.php', '/partials/header.php',
    '/templates/page.php', '/config.example.php', '/logs/private.log'] as $path) {
    $routes[$path] = [404, 'stub'];
}
foreach ($routes as $path => [$status, $flag]) {
    echo $path, "\t", $status, "\t", $flag, "\n";
}
