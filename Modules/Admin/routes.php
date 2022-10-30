<?php
use \Illuminate\Support\Facades\Route;

Route::group(['prefix'=>"dashboard", 'as' => 'dashboard.'], function($route){
    $route->get("/" , )->name('index');
});

