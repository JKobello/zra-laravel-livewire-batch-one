<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;

// Redirect root URL to sales index
Route::get('/', function () {
    return redirect()->route('sales.index');
})->name('home');

// Optional welcome page
Route::get('/home', function () {
    return view('welcome');
});

// Dashboard view for authenticated users
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Authenticated routes group
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    // Volt settings routes
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

    // Resource routes
    Route::resource('products', ProductController::class);
    Route::resource('sales', SaleController::class);
});

// Auth scaffolding
require __DIR__.'/auth.php';