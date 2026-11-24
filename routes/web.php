<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile fake route to fix the navigation error
    Route::get('/profile', function () {
        return redirect()->route('dashboard');
    })->name('profile.edit');

    Route::resource('categories', CategoryController::class);
    Route::resource('meals', MealController::class);
});

require __DIR__.'/auth.php';