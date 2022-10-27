<?php
namespace App;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\ServiceProvider;

class Modules extends RouteServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . DIRECTORY_SEPARATOR . "routes.php");
    }
}