<?php

use App\Http\Controllers\authRestrictController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;

;

Route::get('/', [authRestrictController::class, 'handle']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisterUserController::class, 'store']);
    Route::post('/login', [SessionController::class, 'store'])->name('login');
    Route::get('/login', [SessionController::class, 'logUser'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [SessionController::class, 'destroy'])->name('logout');
    Route::get('/hero', [DashboardController::class, 'hero'])->name('hero');
});
