<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->middleware('guest');
    Route::post('/login/auth', 'authentication', function () {
        return redirect()->intended('/');
    });
    Route::get('/login/message', 'message')->middleware('auth');
    Route::get('/logout', 'logout')->middleware('auth');
});
Route::controller(RegistrasiController::class)->group(function () {
    Route::get('/registrasi', 'index')->middleware('guest');
    Route::get('/registrasi/validasi', 'create');
});
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard')->middleware('auth');
});
Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->middleware('auth');
    Route::post('/change-password', 'changepassword')->middleware('auth');
});
