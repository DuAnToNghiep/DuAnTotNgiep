<?php

//use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\FabricController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductDetailController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\ReturnItemController;
use App\Http\Controllers\API\BillController;
use App\Http\Controllers\API\BillDetailController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\SizeController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function (){
    Route::get('/',[DashBoardController::class,'index'])->name('user.index');
    Route::get('/category',[CategoryController::class, 'index'])->name('category.index');
    Route::get('/add-category',[CategoryController::class,'create'])->name('category.create');
    Route::resource('/feedbacks', FeedbackController::class);
   Route::resource('/images', ImageController::class);
    Route::resource('/fabrics', FabricController::class);
   Route::resource('/productDetail', ProductDetailController::class);
//    Route::resource('productDetail', 'App\Http\Controllers\Admin\ProductDetailController');






//    hải anh
    Route::resource('/promotion', PromotionController::class);
    Route::resource('/returnItem', ReturnItemController::class);

//    ki anh
    Route::resource('roles',RoleController::class);
    Route::resource('users',UserController::class);
    Route::resource('sizes',SizeController::class);
//    tuan anh
    Route::resource('bill', BillController::class); // API bill
    Route::resource('billDetail', BillDetailController::class); // API bill detail
    Route::resource('cart', CartController::class);// API cart

//    lam
//    Route::resource('/payments', PaymentController::class);

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
    Route::prefix('Products')->group(function () {
        Route::get('/products', [ProductController::class, 'index'])->name('products.index');
        Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/products', [ProductController::class, 'store'])->name('products.store');
        Route::get('/products/{products}', [ProductController::class, 'show'])->name('products.show');
        Route::get('/products/{products}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/products/{products}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/products/{products}', [ProductController::class, 'destroy'])->name('products.destroy');
    });

//binh


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


// Details
    Route::get('/cart_details', [CartDetailController::class, 'index'])->name('cart_details.index');
    Route::get('/cart_details/{cartDetail}', [CartDetailController::class, 'destroy'])->name('cart_details.destroy');




//    hải anh
    Route::get('/',[PromotionController::class,'index'])->name('promotion.index');
   Route::get('/promotion',[PromotionController::class,'add'])->name('admin.promotion.add');
    Route::get('/promotion/list',[PromotionController::class,'create'])->name('admin.promotion.list');
   Route::post('/promotion/store',[PromotionController::class,'store'])->name('admin.promotion.store');
    Route::get('/promotion/edit/{id}',[PromotionController::class,'edit'])->name('admin.promotion.edit');
   Route::post('/promotion/editStore/{id}',[PromotionController::class,'editStore'])->name('admin.promotion.editStore');
   Route::get('/promotion/delete/{id}',[PromotionController::class,'delete'])->name('promotion.delete');


//    Route::get('/returnItem',[ReturnItemController::class,'add'])->name('returnItem.add');
//    Route::post('/returnItem/store',[ReturnItemController::class,'store'])->name('returnItem.store');
//    Route::get('/returnItem/list',[ReturnItemController::class,'list'])->name('returnItem.list');
//    Route::get('/returnItem/edit/{id}',[ReturnItemController::class,'edit'])->name('returnItem.edit');
//    Route::post('/returnItem/editStore/{id}',[ReturnItemController::class,'editStore'])->name('returnItem.editStore');
//    Route::get('/returnItem/delete/{id}',[ReturnItemController::class,'delete'])->name('returnItem.delete');

//    tuan anh
//
//    Route::get('payments', [PaymentController::class, 'index']);
//
//// Lấy thông tin thanh toán theo ID
//    Route::get('payments/{id}', [PaymentController::class, 'show']);
//
//// Tạo mới một thanh toán
//    Route::post('payments', [PaymentController::class, 'store']);
//
//// Cập nhật thông tin thanh toán
//    Route::put('payments/{id}', [PaymentController::class, 'update']);
//
//// Xóa một thanh toán
//    Route::delete('payments/{id}', [PaymentController::class, 'destroy']);

});
//Route::prefix('admin')->name('admin.')->group(function () {
//    Route::resource('category', CategoriesController::class);
//});
//Route::resource('/feedbacks', FeedbackController::class);
