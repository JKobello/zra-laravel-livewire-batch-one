<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

    Route::resource('products', ProductController::class);
});


// Route::get('/products', [ProductController::class, 'products.index']);
// Route::get('/products/{id}', [ProductController::class, 'products.show']);
// Route::get('/products/{id}/edit', [ProductController::class, 'products.edit']);
// Route::post('/products/{id}/update', [ProductController::class, 'products.update']);
// Route::get('/products/create', [ProductController::class, 'products.create']);
// Route::post('/products/store', [ProductController::class, 'products.store']);

require __DIR__.'/auth.php';
