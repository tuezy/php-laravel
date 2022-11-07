<?php
const ROOT = __DIR__ . DIRECTORY_SEPARATOR;
const RESOURCES= ROOT . "Resources" . DIRECTORY_SEPARATOR;

const FRAMEWORK_DIR = ROOT . "vendor/laravel/laravel/";

const TUEZY = ROOT . "src" . DIRECTORY_SEPARATOR;

const BOOTSTRAP_PATH = RESOURCES. "bootstrap";
const CONFIG_PATH = RESOURCES. "config";
const STORAGE_PATH = RESOURCES. "storage";

const PUBLIC_PATH = ROOT . "public";
const MODULES = ROOT . "Modules" . DIRECTORY_SEPARATOR;
const MODULE_CONFIG_PATH = MODULES . "configs.php";

require ROOT . "vendor/autoload.php";
require ROOT . "autoload.php";



define('LARAVEL_START', microtime(true));

//$_ENV['APP_BASE_PATH'] = FRAMEWORK_DIR;

$app = require_once RESOURCES. '/bootstrap/app.php';

$app->useEnvironmentPath(ROOT);
$app->useStoragePath(RESOURCES . "storage");
$app->useDatabasePath(RESOURCES . "database");
$app->useLangPath(RESOURCES . "lang");

$app->register(\Tuezy\ServiceProviders\RoutesProvider::class);
$app->register(\Tuezy\ServiceProviders\ModuleProvider::class);

return $app;