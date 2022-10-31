<?php
namespace Tuezy\ServiceProviders;

use App\Providers\RouteServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Tuezy\Modules\Admin\Providers\AdminServiceProvider;

class RoutesProvider extends RouteServiceProvider {

    public function boot()
    {
        $this->configureRateLimiting();

    }

    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}