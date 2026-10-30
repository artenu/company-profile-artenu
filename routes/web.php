<?php

use Illuminate\Support\Facades\Route;

// Language Switcher Route
Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['id', 'en'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

// Halaman Beranda (Statis)
Route::get('/', function () {
    if (request()->has('lang') && in_array(request('lang'), ['id', 'en'])) {
        session(['locale' => request('lang')]);
    }

    $locale = session('locale', 'id');
    app()->setLocale($locale);

    return view('home', compact('locale'));
})->name('home');
