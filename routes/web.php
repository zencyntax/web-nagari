<?php

use Illuminate\Support\Facades\Route;

// Frontend
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\GovernmentController;
use App\Http\Controllers\Frontend\UmkmController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\AgendaController;

// Breeze (Auth Profile)
use App\Http\Controllers\ProfileController as AuthProfileController;

/*
|--------------------------------------------------------------------------
| Frontend Website
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/government', [GovernmentController::class, 'index'])->name('government');

Route::get('/umkm', [UmkmController::class, 'index'])->name('umkm');
Route::get('/umkm/{slug}', [UmkmController::class, 'show'])->name('umkm.show');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.detail');

Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/agenda/{slug}', [AgendaController::class, 'show'])->name('agenda.show');

/*
|--------------------------------------------------------------------------
| Dashboard Admin
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Breeze Profile
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [AuthProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/edit', [AuthProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/edit', [AuthProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
