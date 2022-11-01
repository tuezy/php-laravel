<?php
namespace Modules\Dashboard\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->loadMigrationsFrom(dirname(__DIR__). DIRECTORY_SEPARATOR . "Migrations");
        $this->loadRoutesFrom(dirname(__DIR__) . DIRECTORY_SEPARATOR. "routes.php");
        $this->loadViewsFrom(dirname(__DIR__) . DIRECTORY_SEPARATOR. "Views", 'dashboard');
    }
    public function boot(){
        View::share('menuItems', config("dashboard.menu"));
    }
}