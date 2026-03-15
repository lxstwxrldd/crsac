<?php

use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PlaceController::class, 'index'])->name('home');
Route::get('/place/{place}', [PlaceController::class, 'show'])->name('places.show');
Route::post('/place/{place}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/about', function () {
            return view('about');
            })->name('about');



