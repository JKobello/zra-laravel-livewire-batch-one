<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Livewire\Products\Index as ProductIndex;
use App\Livewire\Products\Show as ProductShow;
use App\Livewire\Products\Edit as ProductEdit;
use App\Livewire\Products\Create as ProductCreate;
use App\Livewire\Purchases\Index as PurchaseIndex;
use App\Livewire\Purchases\Show as PurchaseShow;
use App\Livewire\Purchases\Edit as PurchaseEdit;
use App\Livewire\Purchases\Create as PurchaseCreate;

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

    //Route::resource('products', ProductController::class);
    Route::get('/products',ProductIndex::class)->name('products.index');
    Route::get('/products/create',ProductCreate::class)->name('products.create');
    Route::post('/products/store',ProductCreate::class)->name('products.store');
    Route::get('/products/{id}',ProductShow::class)->name('products.show');
    Route::get('/products/{id}/edit',ProductEdit::class)->name('products.edit');
    Route::post('/products/{id}/update',ProductEdit::class)->name('products.update');
    //Route::resource('purchases', PurchaseController::class);
    Route::get('/purchases',PurchaseIndex::class)->name('purchases.index');
    Route::get('/purchases/create',PurchaseCreate::class)->name('purchases.create');
    Route::post('/purchases/store',PurchaseCreate::class)->name('purchases.store');
    Route::get('/purchases/{id}',PurchaseShow::class)->name('purchases.show');
    Route::get('/purchases/{id}/edit',PurchaseEdit::class)->name('purchases.edit');
    Route::post('/purchases/{id}/update',PurchaseEdit::class)->name('purchases.update');
});


// Route::get('/products', [ProductController::class, 'products.index']);
// Route::get('/products/{id}', [ProductController::class, 'products.show']);
// Route::get('/products/{id}/edit', [ProductController::class, 'products.edit']);
// Route::post('/products/{id}/update', [ProductController::class, 'products.update']);
// Route::get('/products/create', [ProductController::class, 'products.create']);
// Route::post('/products/store', [ProductController::class, 'products.store']);

require __DIR__.'/auth.php';

