<?php
namespace Modules\Core\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->loadMigrationsFrom(dirname(__DIR__). DIRECTORY_SEPARATOR . "Migrations");
        $this->mergeConfigFrom(dirname(__DIR__). DIRECTORY_SEPARATOR . "Configs/menu.php", "dashboard.menu");
    }
    public function boot(){

    }

}
