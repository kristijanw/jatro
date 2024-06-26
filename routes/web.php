<?php

use Illuminate\Support\Facades\Route;

Route::as('pages:')->group(function (): void {
    Route::view('/', 'pages.index')->name('home');
    Route::view('/about', 'pages.about')->name('about');
});
