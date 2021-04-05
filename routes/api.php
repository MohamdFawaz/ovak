<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\Auth\RegisterController;
use App\Http\Controllers\Web\Auth\ForgotPasswordController;
use App\Http\Controllers\Web\HomeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/auth/user-login',[LoginController::class,'login'])->name('user.login');

Route::post('/auth/user-register',[RegisterController::class,'create'])->name('user.register');

Route::post('/auth/user-forgot-password',[ForgotPasswordController::class,'forgotPassword'])->name('user.forgotPassword');

Route::post('/auth/verify-code',[ForgotPasswordController::class,'verifyResetCode'])->name('user.verifyCode');

Route::post('/log-user-calculations',[HomeController::class,'logUserCalculation'])->name('user.logCalculation');

Route::post('/log-user-askings',[HomeController::class,'logUserAsking'])->name('user.logAsking');


Route::get('/user-authentications',[DashboardController::class,'userAuthentications'])->name('user.authentications');
