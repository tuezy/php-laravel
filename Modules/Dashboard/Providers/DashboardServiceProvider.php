<?php
namespace Modules\Dashboard\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Modules\Dashboard\Components\MenuDashboard;

class DashboardServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->loadMigrationsFrom(dirname(__DIR__). DIRECTORY_SEPARATOR . "Migrations");
        $this->loadRoutesFrom(dirname(__DIR__) . DIRECTORY_SEPARATOR. "routes.php");
        $this->loadViewsFrom(dirname(__DIR__) . DIRECTORY_SEPARATOR. "Views", 'dashboard');
    }
    public function boot(){
        Blade::component('menu', MenuDashboard::class);
        View::share('menuItems', config("dashboard.menu"));
    }
}