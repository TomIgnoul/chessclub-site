<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('faqs', [\App\Http\Controllers\FaqController::class, 'index'])->name('faqs.index');
