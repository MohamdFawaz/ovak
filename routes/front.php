<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\DevelopmentCompanyController;
use App\Http\Controllers\Web\ProjectController;



Route::get('/',[\App\Http\Controllers\Web\HomeController::class,'home']);
Route::get('/filters-result',[\App\Http\Controllers\Web\HomeController::class,'filter'])->name('filter');
Route::get('/about',[\App\Http\Controllers\Web\HomeController::class,'about'])->name('about');

Route::group(['prefix' => 'developers'],function (){
    Route::get('/',[DevelopmentCompanyController::class,'index'])->name('developers.list');
    Route::get('/{slug}',[DevelopmentCompanyController::class,'developerPage'])->name('developer.page');
});

Route::group(['prefix' => 'projects'],function (){
    Route::get('/',[ProjectController::class,'index'])->name('projects.list');
    Route::get('/{id}',[ProjectController::class,'projectPage'])->name('projects.page');
});

