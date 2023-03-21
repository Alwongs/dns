<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
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

Route::group([
    'middleware' => 'auth',
    'prefix' => 'admin'
], function() {
    Route::group(['middleware' => 'is_admin'], function() {
        Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    });
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});



Route::get('/', [MainController::class, 'index'])->name('welcome');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');
Route::get('/products', [MainController::class, 'products'])->name('products');


Route::group(['prefix' => 'basket'], function() {
    Route::post('/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');

    Route::group(['middleware' => 'basket_not_empty'], function() {
        Route::get('/', [BasketController::class, 'basket'])->name('basket');
        Route::get('/place', [BasketController::class, 'basketPlace'])->name('basket-place');
        Route::post('/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');
        Route::post('/place', [BasketController::class, 'basketConfirm'])->name('basket-confirm');
    });
});






Route::get('/{category}', [MainController::class, 'category'])->name('category');
Route::get('/{category}/{product?}', [MainController::class, 'product'])->name('product');



