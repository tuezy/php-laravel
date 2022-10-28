<?php
const ROOT = __DIR__ . DIRECTORY_SEPARATOR;
const FRAMEWORK = ROOT . "framework" . DIRECTORY_SEPARATOR;
const FRAMEWORK_DIR = FRAMEWORK . "laravel/8.x/";
const TUEZY = ROOT . "src" . DIRECTORY_SEPARATOR;
require FRAMEWORK_DIR . "vendor/autoload.php";
require ROOT . "src/autoload.php";

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$app = require_once FRAMEWORK_DIR.'/bootstrap/app.php';

$app->useEnvironmentPath(ROOT);
$app->useStoragePath(ROOT . "storage");

$app->register(\Tuezy\ServiceProviders\RoutesProvider::class);
$app->register(\Tuezy\ServiceProviders\ModuleProvider::class);

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);