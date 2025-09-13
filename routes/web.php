<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
// use App\Http\Controllers\ProductController;
use App\Livewire\Products\Index as ProductIndex;
use App\Livewire\Products\Show as ProductShow;

use App\Livewire\Customers\Index as CustomerIndex;
use App\Livewire\Customers\Show as CustomerShow;
use App\Livewire\Customers\Create as CustomerCreate;
use App\Livewire\Customers\Edit as CustomerEdit;

// use App\Livewire\Warehouses\Index as WarehouseIndex;

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

    Route::get('/products/index', ProductIndex::class)->name('products.index');
    Route::get('/products/{id}/show', ProductShow::class)->name('products.show');

    Route::get('customers/index', CustomerIndex::class)->name('customers.index');
    Route::get('/customers/{id}/show', CustomerShow::class)->name('customers.show');
    Route::get('customers/create', CustomerCreate::class)->name('customers.create');
    Route::get('customers/edit', CustomerEdit::class)->name('customers.edit');

});


// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
// Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::post('/products/{id}/update', [ProductController::class, 'update'])->name('products.update');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
// Route::post('/products/destroy', [ProductController::class, 'destroy'])->name('products.destroy');

require __DIR__.'/auth.php';



