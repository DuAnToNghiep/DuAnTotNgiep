<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;


use function Psy\debug;

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
// Route::get('/{any}', function () {
//     return view('index');
// })->where('any', '.*');


// Route::resource('payments', PaymentController::class);
// Lấy danh sách thanh toán
Route::get('payments', [PaymentController::class, 'index']);

// Lấy thông tin thanh toán theo ID
Route::get('payments/{id}', [PaymentController::class, 'show']);

// Tạo mới một thanh toán
Route::post('payments', [PaymentController::class, 'store']);

// Cập nhật thông tin thanh toán
Route::put('payments/{id}', [PaymentController::class, 'update']);

// Xóa một thanh toán
Route::delete('payments/{id}', [PaymentController::class, 'destroy']);


