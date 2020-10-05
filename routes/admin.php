<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::group(['prefix' => '/admin','namespace' => 'Admin'], function (){
    Route::group(['prefix' => '/auth'], function (){
        Route::get('login',[LoginController::class,'showLoginForm'])->name('admin.auth.login.form');
        Route::post('login',[LoginController::class,'login'])->name('admin.auth.login');
    });

    Route::group(['middleware' => 'auth:admin'] , function (){
        Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

        Route::group(['prefix' => '/users'], function (){
            Route::resource('/','UserController'); //todo use as a class
        });

    });
});
