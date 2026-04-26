<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;

// 1. Your Custom Home Page
Route::get('/', function () {
    return view('pages.home'); 
});

// 2. Public Pages
Route::view('/about', 'pages.about')->name('about');
Route::get('/market', [MarketplaceController::class, 'index'])->name('market');

// 3. The Breeze Dashboard 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', \App\Http\Middleware\IsSeller::class])->name('dashboard');

// 4. Breeze Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 5. Breeze Authentication Routes (Login/Register)
require __DIR__.'/auth.php';

// 6. Grouped routes so only logged-in customers can access them
Route::middleware(['auth'])->group(function () { 
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'store'])->name('cart.add');

    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/add/{product}', [WishlistController::class, 'store'])->name('wishlist.add');
});