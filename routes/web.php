<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');


Route::group(['middleware' => ['auth'], 'prefix' => 'painel'], function () {
    Route::get('/', [HomeController::class, 'index']);
});

