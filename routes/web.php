<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;



// Categorys
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


// Colors
Route::get('/colors', [ColorController::class, 'index'])->name('colors.index');
Route::get('/colors/create', [ColorController::class, 'create'])->name('colors.create');
Route::post('/colors', [ColorController::class, 'store'])->name('colors.store');
Route::get('/colors/{color}/edit', [ColorController::class, 'edit'])->name('colors.edit');
Route::put('/colors/{color}', [ColorController::class, 'update'])->name('colors.update');
Route::get('/colors/{color}', [ColorController::class, 'destroy'])->name('colors.destroy');
