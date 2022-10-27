<?php
require "vendor/autoload.php";
$_ENV['APP_BASE_PATH'] = __DIR__ . DIRECTORY_SEPARATOR . "vendor/laravel/laravel";
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

$app = require  "bootstraps/app.php";


$kernel = $app->make(Kernel::class);
$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);