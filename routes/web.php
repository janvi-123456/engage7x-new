<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Password Reset Routes...
//Route::get('password/reset', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
//Route::post('password/email', [\App\Http\Controllers\Auth\ForgotPasswordController::class ,'sendResetLinkEmail'])->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('onboarding',[\App\Http\Controllers\HomeController::class,'onboarding'])->name('onboarding.college');

Route::post('test',function (){
    dd('here');
})->name('test');
