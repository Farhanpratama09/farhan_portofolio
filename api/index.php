<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Sesuaikan storage path ke /tmp jika berjalan di environment serverless (Vercel)
if (isset($_ENV['VERCEL']) || isset($_SERVER['VERCEL']) || getenv('VERCEL')) {
    $storagePath = '/tmp/storage';

    $storageDirs = [
        $storagePath,
        $storagePath . '/app',
        $storagePath . '/app/public',
        $storagePath . '/framework',
        $storagePath . '/framework/cache',
        $storagePath . '/framework/cache/data',
        $storagePath . '/framework/sessions',
        $storagePath . '/framework/views',
        $storagePath . '/logs',
    ];

    foreach ($storageDirs as $dir) {
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
    }

    putenv("APP_STORAGE={$storagePath}");
    $_ENV['APP_STORAGE'] = $storagePath;
    $_SERVER['APP_STORAGE'] = $storagePath;

    putenv("VIEW_COMPILED_PATH={$storagePath}/framework/views");
    $_ENV['VIEW_COMPILED_PATH'] = "{$storagePath}/framework/views";
    $_SERVER['VIEW_COMPILED_PATH'] = "{$storagePath}/framework/views";
}

// Register the Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

if (isset($storagePath)) {
    $app->useStoragePath($storagePath);
}

$app->handleRequest(Request::capture());
