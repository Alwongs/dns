<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ResetController;

use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Person\OrderController as PersonOrderController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {
    Route::group([ 
        'prefix' => 'person' 
    ], function () {
        Route::get('/orders', [PersonOrderController::class, 'index'])->name('person-orders.index');
        Route::get('/orders/{order}', [PersonOrderController::class, 'show'])->name('person-orders.show');    
    });

    Route::group(['prefix' => 'admin'], function() {

        Route::group(['middleware' => 'is_admin'], function() {
            Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders');
            Route::get('/orders/{order}', [AdminOrderController::class, 'show'])->name('orders.show');

            Route::get('clear-config', [ResetController::class, 'clearConfig'])->name('clear-config');
            Route::get('clear-route', [ResetController::class, 'clearRoute'])->name('clear-route');
            Route::get('clear-view', [ResetController::class, 'clearView'])->name('clear-view');
            Route::get('reset', [ResetController::class, 'reset'])->name('reset');
        });
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);

    });
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



