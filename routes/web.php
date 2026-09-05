<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
