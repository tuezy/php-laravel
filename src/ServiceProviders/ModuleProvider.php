<?php
namespace Tuezy\ServiceProviders;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\ServiceProvider;
use Tuezy\Modules\Admin\Providers\AdminServiceProvider;

class ModuleProvider extends ServiceProvider {

    public function boot()
    {
        $configs = require MODULE_CONFIG_PATH;
        foreach($configs['modules'] as $module){
            $this->app->register($module);
        }

    }
}