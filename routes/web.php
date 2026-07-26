<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GovernmentController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AgendaController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/profile', [ProfileController::class, 'index'])
    ->name('profile');

Route::get('/government', [GovernmentController::class, 'index'])
    ->name('government');

Route::get('/umkm', [UmkmController::class, 'index'])
    ->name('umkm');

Route::get('/umkm/{slug}', [UmkmController::class, 'show'])
    ->name('umkm.show');

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

Route::get('/news', [NewsController::class, 'index'])
    ->name('news');

Route::get('/news/{slug}', [NewsController::class, 'show'])
    ->name('news.detail');

Route::get('/agenda', [AgendaController::class, 'index'])
    ->name('agenda');

Route::get('/agenda/{slug}', [AgendaController::class, 'show'])
    ->name('agenda.show');
