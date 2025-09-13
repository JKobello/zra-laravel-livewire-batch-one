<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\CategoryController;
use App\Livewire\Products\Index as ProductIndex;
use App\Livewire\Products\Show as ProductShow;
use App\Livewire\Products\Create as ProductCreate;
use App\Livewire\Products\Edit as ProductEdit;

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
    Route::get('/products/create', ProductCreate::class)->name('products.create');
    Route::get('/products/{product}/edit', ProductEdit::class)->name('products.edit');
    Route::get('/products/{product}/show', ProductShow::class)->name('products.show');
});
Route::resource('categories', CategoryController::class);

require __DIR__.'/auth.php';



