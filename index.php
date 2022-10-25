<?php
require "vendor/autoload.php";

$container = \Illuminate\Container\Container::getInstance();

$configs = new \Illuminate\Config\Repository([]);
$container->instance("config", $configs);
$container->bindIf("config", function(){
    return container("config") ?? new \Illuminate\Config\Repository([]);
});

dd($container->make("config"));