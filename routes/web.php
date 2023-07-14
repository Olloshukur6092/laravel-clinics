<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'dashboard')->name('dashboard');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login_create')->name('login_create');
    Route::post('login', 'login')->name('login');
    Route::get('logout', 'logout')->name('logout');
});
