<?php
use \Illuminate\Support\Facades\Route;

Route::group(['prefix'=>"dashboard", 'as' => 'dashboard.'], function($route){
    $route->get("/" , \Modules\Dashboard\Controllers\DashboardController::class. "@index")->name('index');
});

