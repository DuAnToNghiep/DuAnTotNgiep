<?php
use App\Http\Controllers\BillController;
use App\Http\Controllers\BillDetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Models\Carts;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\SizeController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('roles',RoleController::class);
route::apiResource('users',UserController::class);
route::apiResource('sizes',SizeController::class);

Route::apiResource('bill', BillController::class); // API bill
Route::apiResource('billDetail', BillDetailController::class); // API bill detail
Route::apiResource('cart', CartController::class);//
