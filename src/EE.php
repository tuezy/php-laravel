<?php
namespace Tuezy;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class EE extends Application{
    public function __construct($basePath = null)
    {
        parent::__construct($basePath);
    }

    protected function bootProvider(ServiceProvider $provider)
    {
        $provider->callBootingCallbacks();
        if(get_class($provider) == 'App\Providers\RouteServiceProvider'){
            $provider = new RouteServiceProvider($this);
        }
        if (method_exists($provider, 'boot')) {
            $this->call([$provider, 'boot']);
        }

        $provider->callBootedCallbacks();
    }
}