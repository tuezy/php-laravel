<?php
namespace Tuezy;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class EE extends Application{

    public function bootstrapPath($path = '')
    {
        return BOOTSTRAP_PATH .($path != '' ? DIRECTORY_SEPARATOR.$path : '');
    }

    public function configPath($path = '')
    {
        return CONFIG_PATH.($path != '' ? DIRECTORY_SEPARATOR.$path : '');
    }

    public function publicPath()
    {
        return PUBLIC_PATH;
    }
//
//    protected function bootProvider(ServiceProvider $provider)
//    {
//        if(get_class($provider) == 'App\Providers\RouteServiceProvider'){
//            return;
//        }
//
//        $provider->callBootingCallbacks();
//
//        if (method_exists($provider, 'boot')) {
//            $this->call([$provider, 'boot']);
//        }
//
//        $provider->callBootedCallbacks();
//    }

}