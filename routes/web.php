<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/purchase', function () {
    return view('purchase');
})->name('purchase');

Route::post('/counseling-booking', [App\Http\Controllers\StripeController::class, 'store'])->name('booking.store');

Route::post('/verify-coupon', [App\Http\Controllers\StripeController::class, 'verifyCoupon'])->name('coupon.verify');

Route::get('/check-booking-session', [App\Http\Controllers\StripeController::class, 'checkBookingSession'])->name('booking.check');

Route::post('/clear-booking-session', [App\Http\Controllers\StripeController::class, 'clearBookingSession'])->name('booking.clear');

