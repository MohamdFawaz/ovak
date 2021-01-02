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
        Route::group(['prefix' => '/user-askings'], function (){
            Route::get('/',[\App\Http\Controllers\Admin\UserController::class,'askingList'])->name('user.askings');
        });

       Route::group(['prefix' => '/newsletter'], function (){
            Route::get('/',[\App\Http\Controllers\Admin\UserController::class,'newsletterSubscription'])->name('user.newsletter');
            Route::post('/',[\App\Http\Controllers\Admin\UserController::class,'sendNewsletter'])->name('user.newsletter.send');
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

        Route::group(['prefix' => '/projects'], function (){
            Route::get('/',[\App\Http\Controllers\Admin\ProjectController::class,
                'index'])->name('project.index');
            Route::get('/create',[\App\Http\Controllers\Admin\ProjectController::class,
                'create'])->name('project.create');
            Route::post('/store',[\App\Http\Controllers\Admin\ProjectController::class,
                'store'])->name('project.store');
            Route::get('/show/{id}',[\App\Http\Controllers\Admin\ProjectController::class,
                'show'])->name('project.show');
            Route::get('/edit/{id}',[\App\Http\Controllers\Admin\ProjectController::class,
                'edit'])->name('project.edit');
            Route::post('/update/{id}',[\App\Http\Controllers\Admin\ProjectController::class,
                'update'])->name('project.update');
            Route::get('/delete/{id}',[\App\Http\Controllers\Admin\ProjectController::class,
                'destroy'])->name('project.delete');
            Route::get('/delete-amenity/{amenityId}',[\App\Http\Controllers\Admin\ProjectController::class,
                'deleteAmenity'])->name('project.delete.amenity');
            Route::get('/delete-image/{imageId}',[\App\Http\Controllers\Admin\ProjectController::class,
                'deleteImage'])->name('project.delete.image');
        });

        Route::group(['prefix' => '/units'], function (){
            Route::get('/',[\App\Http\Controllers\Admin\UnitController::class,
                'index'])->name('unit.index');
            Route::get('/create',[\App\Http\Controllers\Admin\UnitController::class,
                'create'])->name('unit.create');
            Route::post('/store',[\App\Http\Controllers\Admin\UnitController::class,
                'store'])->name('unit.store');
            Route::get('/show/{id}',[\App\Http\Controllers\Admin\UnitController::class,
                'show'])->name('unit.show');
            Route::get('/edit/{id}',[\App\Http\Controllers\Admin\UnitController::class,
                'edit'])->name('unit.edit');
            Route::post('/update/{id}',[\App\Http\Controllers\Admin\UnitController::class,
                'update'])->name('unit.update');
            Route::get('/delete/{id}',[\App\Http\Controllers\Admin\UnitController::class,
                'destroy'])->name('unit.delete');
            Route::get('/delete-image/{imageId}',[\App\Http\Controllers\Admin\UnitController::class,
                'deleteImage'])->name('unit.delete.image');
        });

    });
});
