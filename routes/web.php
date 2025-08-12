<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/blog', [ArticlesController::class, 'index'])->name('articles.index');
Route::get('/blog/article/{article}', [ArticlesController::class, 'show'])->name('articles.show');
Route::get('/login', [LoginController::class, 'login'])->name('auth.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');
