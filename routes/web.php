<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterUserController::class, 'create'])->name('register');
Route::post('/register', [RegisterUserController::class, 'store']);

Route::post('/login', [SessionController::class, 'store'])->name('login');
Route::get('/login', [SessionController::class, 'create'])->name('login');

Route::get('/dashboard', [Dashboard::class, 'dashboard'])->name('dashboard');
