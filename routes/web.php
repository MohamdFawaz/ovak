<?php

use App\Http\Controllers\Web\DevelopmentCompanyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[\App\Http\Controllers\Web\HomeController::class,'home']);

Route::get('developers',[DevelopmentCompanyController::class,'index'])->name('developers.list');

Route::get('developer/{slug}',[DevelopmentCompanyController::class,'developerPage'])->name('developer.page');
