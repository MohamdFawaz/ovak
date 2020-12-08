<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\DevelopmentCompanyController;
use App\Http\Controllers\Web\ProjectController;
use \App\Http\Controllers\Web\UnitController;


Route::get('/',[HomeController::class,'home']);
Route::get('/filters-result',[HomeController::class,'filter'])->name('filter');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/consultancy',[HomeController::class,'consultancy'])->name('consultancy');

Route::group(['prefix' => 'units'],function (){
    Route::get('/{id}',[UnitController::class,'view'])->name('unit.page');
});

Route::group(['prefix' => 'developers'],function (){
    Route::get('/',[DevelopmentCompanyController::class,'index'])->name('developers.list');
    Route::get('/{slug}',[DevelopmentCompanyController::class,'developerPage'])->name('developer.page');
});

Route::group(['prefix' => 'projects'],function (){
    Route::get('/',[ProjectController::class,'index'])->name('projects.list');
    Route::get('/{id}',[ProjectController::class,'projectPage'])->name('projects.page');
});

