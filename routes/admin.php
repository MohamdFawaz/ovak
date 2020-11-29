<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;

Route::get('/admin',function (){
   return redirect(route('admin.auth.login.form'));
});

Route::group(['prefix' => '/admin','namespace' => 'Admin'], function (){
    Route::group(['prefix' => '/auth'], function (){
        Route::get('login',[LoginController::class,'showLoginForm'])->name('admin.auth.login.form');
        Route::post('login',[LoginController::class,'login'])->name('login');
    });

    Route::group(['middleware' => 'auth:admin'] , function (){
        Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

        Route::group(['prefix' => '/users'], function (){
            Route::resource('/','UserController',[
                'names' => [
                    'index' => 'users.index'
                ]
            ]);
        });

        Route::group(['prefix' => '/user-calculation-log'], function (){
            Route::get('/',[\App\Http\Controllers\Admin\UserController::class,'calculationList'])->name('user.calculation.log');
        });

        Route::group(['prefix' => '/development-companies'], function (){
            Route::get('/',[\App\Http\Controllers\Admin\DevelopmentCompanyController::class,
                'index'])->name('development.index');
            Route::get('/create',[\App\Http\Controllers\Admin\DevelopmentCompanyController::class,
                'create'])->name('development.create');
            Route::post('/store',[\App\Http\Controllers\Admin\DevelopmentCompanyController::class,
                'store'])->name('development.store');
            Route::get('/show/{id}',[\App\Http\Controllers\Admin\DevelopmentCompanyController::class,
                'show'])->name('development.show');
            Route::get('/edit/{id}',[\App\Http\Controllers\Admin\DevelopmentCompanyController::class,
                'edit'])->name('development.edit');
            Route::post('/update/{id}',[\App\Http\Controllers\Admin\DevelopmentCompanyController::class,
                'update'])->name('development.update');
            Route::get('/delete/{id}',[\App\Http\Controllers\Admin\DevelopmentCompanyController::class,
                'destroy'])->name('development.delete');
        });

        Route::group(['prefix' => '/districts'], function (){
            Route::get('/',[\App\Http\Controllers\Admin\DistrictController::class,
                'index'])->name('district.index');
            Route::get('/create',[\App\Http\Controllers\Admin\DistrictController::class,
                'create'])->name('district.create');
            Route::post('/store',[\App\Http\Controllers\Admin\DistrictController::class,
                'store'])->name('district.store');
            Route::get('/show/{id}',[\App\Http\Controllers\Admin\DistrictController::class,
                'show'])->name('district.show');
            Route::get('/edit/{id}',[\App\Http\Controllers\Admin\DistrictController::class,
                'edit'])->name('district.edit');
            Route::post('/update/{id}',[\App\Http\Controllers\Admin\DistrictController::class,
                'update'])->name('district.update');
            Route::get('/delete/{id}',[\App\Http\Controllers\Admin\DistrictController::class,
                'destroy'])->name('district.delete');
        });
        Route::group(['prefix' => '/finish-types'], function (){
            Route::get('/',[\App\Http\Controllers\Admin\FinishTypeController::class,
                'index'])->name('finishType.index');
            Route::get('/create',[\App\Http\Controllers\Admin\FinishTypeController::class,
                'create'])->name('finishType.create');
            Route::post('/store',[\App\Http\Controllers\Admin\FinishTypeController::class,
                'store'])->name('finishType.store');
            Route::get('/show/{id}',[\App\Http\Controllers\Admin\FinishTypeController::class,
                'show'])->name('finishType.show');
            Route::get('/edit/{id}',[\App\Http\Controllers\Admin\FinishTypeController::class,
                'edit'])->name('finishType.edit');
            Route::post('/update/{id}',[\App\Http\Controllers\Admin\FinishTypeController::class,
                'update'])->name('finishType.update');
            Route::get('/delete/{id}',[\App\Http\Controllers\Admin\FinishTypeController::class,
                'destroy'])->name('finishType.delete');
        });

        Route::group(['prefix' => '/property-types'], function (){
            Route::get('/',[\App\Http\Controllers\Admin\PropertyTypeController::class,
                'index'])->name('propertyType.index');
            Route::get('/create',[\App\Http\Controllers\Admin\PropertyTypeController::class,
                'create'])->name('propertyType.create');
            Route::post('/store',[\App\Http\Controllers\Admin\PropertyTypeController::class,
                'store'])->name('propertyType.store');
            Route::get('/show/{id}',[\App\Http\Controllers\Admin\PropertyTypeController::class,
                'show'])->name('propertyType.show');
            Route::get('/edit/{id}',[\App\Http\Controllers\Admin\PropertyTypeController::class,
                'edit'])->name('propertyType.edit');
            Route::post('/update/{id}',[\App\Http\Controllers\Admin\PropertyTypeController::class,
                'update'])->name('propertyType.update');
            Route::get('/delete/{id}',[\App\Http\Controllers\Admin\PropertyTypeController::class,
                'destroy'])->name('propertyType.delete');
        });

        Route::group(['prefix' => '/unit-types'], function (){
            Route::get('/',[\App\Http\Controllers\Admin\UnitTypeController::class,
                'index'])->name('unitType.index');
            Route::get('/create',[\App\Http\Controllers\Admin\UnitTypeController::class,
                'create'])->name('unitType.create');
            Route::post('/store',[\App\Http\Controllers\Admin\UnitTypeController::class,
                'store'])->name('unitType.store');
            Route::get('/show/{id}',[\App\Http\Controllers\Admin\UnitTypeController::class,
                'show'])->name('unitType.show');
            Route::get('/edit/{id}',[\App\Http\Controllers\Admin\UnitTypeController::class,
                'edit'])->name('unitType.edit');
            Route::post('/update/{id}',[\App\Http\Controllers\Admin\UnitTypeController::class,
                'update'])->name('unitType.update');
            Route::get('/delete/{id}',[\App\Http\Controllers\Admin\UnitTypeController::class,
                'destroy'])->name('unitType.delete');
        });

        Route::group(['prefix' => '/properties'], function (){
            Route::get('/',[\App\Http\Controllers\Admin\PropertyController::class,
                'index'])->name('property.index');
            Route::get('/create',[\App\Http\Controllers\Admin\PropertyController::class,
                'create'])->name('property.create');
            Route::post('/store',[\App\Http\Controllers\Admin\PropertyController::class,
                'store'])->name('property.store');
            Route::get('/show/{id}',[\App\Http\Controllers\Admin\PropertyController::class,
                'show'])->name('property.show');
            Route::get('/edit/{id}',[\App\Http\Controllers\Admin\PropertyController::class,
                'edit'])->name('property.edit');
            Route::post('/update/{id}',[\App\Http\Controllers\Admin\PropertyController::class,
                'update'])->name('property.update');
            Route::get('/delete/{id}',[\App\Http\Controllers\Admin\PropertyController::class,
                'destroy'])->name('property.delete');
        });

    });
});
