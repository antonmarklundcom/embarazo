<?php
/** CLI-only export; regenerate whenever content/semanas.php size records change. */
declare(strict_types=1);
if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}
$weeks = require dirname(__DIR__, 3) . '/content/semanas.php';
$sizes = [];
foreach (range(1, 42) as $week) {
    if (!isset($weeks[$week]['size']['name'])) {
        throw new RuntimeException("Missing size for week {$week}");
    }
    $sizes[$week] = $weeks[$week]['size'];
}
$json = json_encode($sizes, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR) . "\n";
if (file_put_contents(__DIR__ . '/semanas.json', $json) === false) {
    throw new RuntimeException('Could not write semanas.json');
}
echo 'Exported ' . count($sizes) . " weeks.\n";
