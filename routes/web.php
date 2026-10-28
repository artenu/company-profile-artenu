<?php

use Illuminate\Support\Facades\Route;

// Halaman Beranda (Statis)
Route::get('/', function () {
    return view('home');
})->name('home');
