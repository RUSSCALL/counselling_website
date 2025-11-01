<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/purchase', function () {
    return view('purchase');
})->name('purchase');
