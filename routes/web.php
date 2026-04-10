<?php

use Illuminate\Support\Facades\Route;

// This forces the root URL to load your custom home page
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});