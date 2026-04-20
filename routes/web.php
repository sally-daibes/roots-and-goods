<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// 1. Your Custom Home Page
Route::get('/', function () {
    return view('pages.home'); // This points to your beautiful design!
});

// 2. Your Custom About Page
Route::get('/about', function () {
    return view('pages.about');
});

// 3. The Breeze Dashboard (Only logged-in users can see this)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 4. Breeze Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 5. Breeze Authentication Routes (Login/Register)
require __DIR__.'/auth.php';