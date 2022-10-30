<?php
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

$app = require 'init.php';

$kernel = $app->make(Kernel::class);
$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);