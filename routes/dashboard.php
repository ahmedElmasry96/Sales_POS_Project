<?php

use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'guest:admin'], function() {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('loginForm');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::group(['middleware' => 'auth:admin'], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});

