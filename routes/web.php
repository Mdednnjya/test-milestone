<?php

// routes/web.php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/reviews', [ReviewController::class, 'create'])->name('reviews.index');

Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::get('/reviews/list', [ReviewController::class, 'pop'])->name('reviews.reviews');

Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations/create', [ReservationController::class, 'store'])->name('reservations.store');



