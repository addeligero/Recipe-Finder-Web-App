<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function () {
    return view('test');
});

Route::get('register', [RegisterUserController::class, 'create']);
