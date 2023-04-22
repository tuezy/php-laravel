<?php
require "vendor/autoload.php";
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

$app = new \Illuminate\Foundation\Application(__DIR__);
$app->usePublicPath(__DIR__);
$app->useConfigPath(".laravel/Configs");
$app->useEnvironmentPath(__DIR__);
$app->useBootstrapPath(".laravel/Bootstraps");
$app->useLangPath("lang");

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    \Laravel\Kernels\HttpKernel::class
);
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    \Laravel\Kernels\ExceptionHandler::class
);

\Illuminate\Support\Facades\Facade::setFacadeApplication($app);

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);