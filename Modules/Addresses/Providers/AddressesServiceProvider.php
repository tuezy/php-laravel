<?php
namespace Modules\Addresses\Providers;

use Illuminate\Support\ServiceProvider;

class AddressesServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->loadMigrationsFrom(dirname(__DIR__). DIRECTORY_SEPARATOR . "Migrations");
    }
}