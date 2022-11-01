<?php
use \Illuminate\Support\Facades\Route;
Route::group([
                 'prefix'=>"dashboard",
                 'namespace' => '\Modules\Dashboard\Controllers',
                 'as' => 'dashboard.',
                 'middlewares' => ['web']
             ], function($route){
    $route->get("/" , "DashboardController@index")->name('index');
});
