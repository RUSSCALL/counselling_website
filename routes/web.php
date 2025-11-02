<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/purchase', function () {
    return view('purchase');
})->name('purchase');

Route::post('/counseling-booking', [App\Http\Controllers\StripeController::class, 'store'])->name('booking.store');

