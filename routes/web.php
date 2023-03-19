<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';


Route::get('/orders', [OrderController::class, 'index'])->middleware(['auth', 'verified'])->name('orders');


Route::get('/', [MainController::class, 'index'])->name('welcome');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');
Route::get('/products', [MainController::class, 'products'])->name('products');
Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
Route::get('/basket/place', [BasketController::class, 'basketPlace'])->name('basket-place');
Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');
Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');
Route::post('/basket/place', [BasketController::class, 'basketConfirm'])->name('basket-confirm');


Route::get('/{category}', [MainController::class, 'category'])->name('category');
Route::get('/{category}/{product?}', [MainController::class, 'product'])->name('product');



