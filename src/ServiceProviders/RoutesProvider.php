<?php
namespace Tuezy\ServiceProviders;

use App\Providers\RouteServiceProvider;
use Tuezy\Modules\Admin\Providers\AdminServiceProvider;

class RoutesProvider extends RouteServiceProvider {

    public function boot()
    {
        $this->register(AdminServiceProvider::class);
    }
}