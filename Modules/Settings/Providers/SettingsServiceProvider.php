<?php
namespace Modules\Settings\Providers;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->loadTranslationsFrom(dirname(__DIR__). DIRECTORY_SEPARATOR . "Langs", "Settings");
        $this->loadMigrationsFrom(dirname(__DIR__). DIRECTORY_SEPARATOR . "Migrations");
        $this->mergeConfigFrom(dirname(__DIR__). DIRECTORY_SEPARATOR . "Configs/menu.php", "dashboard.menu");

    }
    public function boot(){
        $this->loadTranslationsFrom(dirname(__DIR__). DIRECTORY_SEPARATOR . "Langs", "Settings");
    }

}
