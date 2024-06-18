<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/login', [LoginController::class, 'loginForm'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'registForm'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'createAccount'])->middleware('guest');

Route::get('/category/{category}', [ProductController::class, 'getProductsByCategory']);
Route::get('/product/{id}', [ProductController::class, 'show']);