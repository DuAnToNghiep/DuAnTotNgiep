<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;

use function Psy\debug;





Route::prefix('admin')->group(function () {
    Route::prefix('news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('news.index');
        Route::get('/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/', [NewsController::class, 'store'])->name('news.store');
        Route::get('/{id}', [NewsController::class, 'show'])->name('news.show');
        Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('/{id}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
    });


    Route::prefix('payments')->group(function () {
        Route::get('/', [PaymentController::class, 'index'])->name('payments.index');
        Route::get('/create', [PaymentController::class, 'create'])->name('payments.create');
        Route::post('/', [PaymentController::class, 'store'])->name('payments.store');
        Route::get('/{id}', [PaymentController::class, 'show'])->name('payments.show');
        Route::get('/{id}/edit', [PaymentController::class, 'edit'])->name('payments.edit');
        Route::put('/{id}', [PaymentController::class, 'update'])->name('payments.update');
        Route::delete('/{id}', [PaymentController::class, 'destroy'])->name('payments.destroy');
        Route::get('/search', [PaymentController::class, 'search'])->name('payments.search');
    });

    Route::prefix('images')->group(function () {
        Route::get('/', [ImageController::class, 'index'])->name('images.index');
        Route::get('/create', [ImageController::class, 'create'])->name('images.create');
        Route::post('/', [ImageController::class, 'store'])->name('images.store');
        Route::get('/{id}', [ImageController::class, 'show'])->name('images.show');
        Route::get('/{id}/edit', [ImageController::class, 'edit'])->name('images.edit');
        Route::put('/{id}', [ImageController::class, 'update'])->name('images.update');
        Route::delete('/{id}', [ImageController::class, 'destroy'])->name('images.destroy');
    });
    Route::resource('products', ProductController::class);
});


// Route::prefix('admin')->group(function () {
//     Route::resource('products', ProductController::class);
//     Route::resource('categories', CategoryController::class);
//     Route::resource('images', ImageController::class);
// });
