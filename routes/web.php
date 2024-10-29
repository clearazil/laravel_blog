<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/blog', [ArticlesController::class, 'index'])->name('articles.index');
