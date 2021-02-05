<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DevelopmentCompanyController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\FinishTypeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\PropertyTypeController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\UnitTypeController;
use App\Http\Controllers\Admin\UserController;

Route::get('/admin',function (){
   return redirect(route('admin.auth.login.form'));
});

Route::group(['prefix' => '/admin','namespace' => 'Admin'], function (){
    Route::group(['prefix' => '/auth'], function (){
        Route::get('login',[LoginController::class,'showLoginForm'])->name('admin.auth.login.form');
        Route::post('login',[LoginController::class,'login'])->name('login');
        Route::get('logout',[LoginController::class,'logout'])->name('admin.logout');
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
            Route::get('/',[UserController::class,'calculationList'])->name('user.calculation.log');
        });
        Route::group(['prefix' => '/user-askings'], function (){
            Route::get('/',[UserController::class,'askingList'])->name('user.askings');
        });

        Route::group(['prefix' => '/user-filters'], function (){
            Route::get('/',[UserController::class,'filtersList'])->name('user.filters');
        });

        Route::group(['prefix' => '/user-consultation'], function (){
            Route::get('/',[UserController::class,'consultationList'])->name('user.consultation');
        });

       Route::group(['prefix' => '/newsletter'], function (){
            Route::get('/',[UserController::class,'newsletterSubscription'])->name('user.newsletter');
            Route::post('/',[UserController::class,'sendNewsletter'])->name('user.newsletter.send');
        });

        Route::group(['prefix' => '/development-companies'], function (){
            Route::get('/',[DevelopmentCompanyController::class,
                'index'])->name('development.index');
            Route::get('/create',[DevelopmentCompanyController::class,
                'create'])->name('development.create');
            Route::post('/store',[DevelopmentCompanyController::class,
                'store'])->name('development.store');
            Route::get('/show/{id}',[DevelopmentCompanyController::class,
                'show'])->name('development.show');
            Route::get('/edit/{id}',[DevelopmentCompanyController::class,
                'edit'])->name('development.edit');
            Route::post('/update/{id}',[DevelopmentCompanyController::class,
                'update'])->name('development.update');
            Route::get('/delete/{id}',[DevelopmentCompanyController::class,
                'destroy'])->name('development.delete');
        });

        Route::group(['prefix' => '/districts'], function (){
            Route::get('/',[DistrictController::class,
                'index'])->name('district.index');
            Route::get('/create',[DistrictController::class,
                'create'])->name('district.create');
            Route::post('/store',[DistrictController::class,
                'store'])->name('district.store');
            Route::get('/show/{id}',[DistrictController::class,
                'show'])->name('district.show');
            Route::get('/edit/{id}',[DistrictController::class,
                'edit'])->name('district.edit');
            Route::post('/update/{id}',[DistrictController::class,
                'update'])->name('district.update');
            Route::get('/delete/{id}',[DistrictController::class,
                'destroy'])->name('district.delete');
        });
        Route::group(['prefix' => '/finish-types'], function (){
            Route::get('/',[FinishTypeController::class,
                'index'])->name('finishType.index');
            Route::get('/create',[FinishTypeController::class,
                'create'])->name('finishType.create');
            Route::post('/store',[FinishTypeController::class,
                'store'])->name('finishType.store');
            Route::get('/show/{id}',[FinishTypeController::class,
                'show'])->name('finishType.show');
            Route::get('/edit/{id}',[FinishTypeController::class,
                'edit'])->name('finishType.edit');
            Route::post('/update/{id}',[FinishTypeController::class,
                'update'])->name('finishType.update');
            Route::get('/delete/{id}',[FinishTypeController::class,
                'destroy'])->name('finishType.delete');
        });

        Route::group(['prefix' => '/property-types'], function (){
            Route::get('/',[PropertyTypeController::class,
                'index'])->name('propertyType.index');
            Route::get('/create',[PropertyTypeController::class,
                'create'])->name('propertyType.create');
            Route::post('/store',[PropertyTypeController::class,
                'store'])->name('propertyType.store');
            Route::get('/show/{id}',[PropertyTypeController::class,
                'show'])->name('propertyType.show');
            Route::get('/edit/{id}',[PropertyTypeController::class,
                'edit'])->name('propertyType.edit');
            Route::post('/update/{id}',[PropertyTypeController::class,
                'update'])->name('propertyType.update');
            Route::get('/delete/{id}',[PropertyTypeController::class,
                'destroy'])->name('propertyType.delete');
        });

        Route::group(['prefix' => '/unit-types'], function (){
            Route::get('/',[UnitTypeController::class,
                'index'])->name('unitType.index');
            Route::get('/create',[UnitTypeController::class,
                'create'])->name('unitType.create');
            Route::post('/store',[UnitTypeController::class,
                'store'])->name('unitType.store');
            Route::get('/show/{id}',[UnitTypeController::class,
                'show'])->name('unitType.show');
            Route::get('/edit/{id}',[UnitTypeController::class,
                'edit'])->name('unitType.edit');
            Route::post('/update/{id}',[UnitTypeController::class,
                'update'])->name('unitType.update');
            Route::get('/delete/{id}',[UnitTypeController::class,
                'destroy'])->name('unitType.delete');
        });

        Route::group(['prefix' => '/projects'], function (){
            Route::get('/',[ProjectController::class,
                'index'])->name('project.index');
            Route::get('/create',[ProjectController::class,
                'create'])->name('project.create');
            Route::post('/store',[ProjectController::class,
                'store'])->name('project.store');
            Route::get('/show/{id}',[ProjectController::class,
                'show'])->name('project.show');
            Route::get('/edit/{id}',[ProjectController::class,
                'edit'])->name('project.edit');
            Route::post('/update/{id}',[ProjectController::class,
                'update'])->name('project.update');
            Route::get('/delete/{id}',[ProjectController::class,
                'destroy'])->name('project.delete');
            Route::get('/delete-amenity/{amenityId}',[ProjectController::class,
                'deleteAmenity'])->name('project.delete.amenity');
            Route::get('/delete-image/{imageId}',[ProjectController::class,
                'deleteImage'])->name('project.delete.image');
        });

        Route::group(['prefix' => '/units'], function (){
            Route::get('/',[UnitController::class,
                'index'])->name('unit.index');
            Route::get('/create',[UnitController::class,
                'create'])->name('unit.create');
            Route::post('/store',[UnitController::class,
                'store'])->name('unit.store');
            Route::get('/show/{id}',[UnitController::class,
                'show'])->name('unit.show');
            Route::get('/edit/{id}',[UnitController::class,
                'edit'])->name('unit.edit');
            Route::post('/update/{id}',[UnitController::class,
                'update'])->name('unit.update');
            Route::get('/delete/{id}',[UnitController::class,
                'destroy'])->name('unit.delete');
            Route::get('/delete-image/{imageId}',[UnitController::class,
                'deleteImage'])->name('unit.delete.image');
        });

    });
});
