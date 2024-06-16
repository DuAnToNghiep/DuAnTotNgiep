<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartDetailsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ColorsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/{any}', function () {
    return view('index');
})->where('any', '.*');
Route::resource('cart_details', CartDetailsController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('colors', ColorsController::class);
