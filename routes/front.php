<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\DevelopmentCompanyController;
use App\Http\Controllers\Web\ProjectController;
use \App\Http\Controllers\Web\UnitController;

Route::get('/logout',[\App\Http\Controllers\Web\Auth\LoginController::class,'logout'])->name('user.logout');
Route::get('/',[HomeController::class,'home']);
Route::get('/filters-result',[HomeController::class,'filter'])->name('filter');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/consultancy',[HomeController::class,'consultancy'])->name('consultancy');
Route::get('/change-locale/{lang}',[HomeController::class,'switchLocale'])->name('change.locale');

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

Route::post('/contact-us',[HomeController::class,'contactUs'])->name('contact');

Route::post('/subscribe-newsletter',[HomeController::class,'subscribeToNewsletter'])->name('subscribe.newsletter');
