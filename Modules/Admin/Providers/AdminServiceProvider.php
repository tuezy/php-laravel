<?php
namespace Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->loadMigrationsFrom(dirname(__DIR__). DIRECTORY_SEPARATOR . "Migrations");
        $this->loadRoutesFrom(dirname(__DIR__) . DIRECTORY_SEPARATOR. "routes.php");
    }
}