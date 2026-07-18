<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GovernmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/profile', [ProfileController::class, 'index'])
    ->name('profile');

Route::get('/government', [GovernmentController::class, 'index'])
    ->name('government');

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

Route::get('/news', [NewsController::class, 'index'])
    ->name('news');

Route::get('/news/{slug}', [NewsController::class, 'show'])
    ->name('news.detail');
