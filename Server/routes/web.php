<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\FabricController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function (){
    Route::get('/',[DashBoardController::class,'index'])->name('user.index');
    Route::get('/category',[CategoryController::class, 'index'])->name('category.index');
    Route::get('/add-category',[CategoryController::class,'create'])->name('category.create');


//    Route::get('/feedbacks',[FeedbackController::class,'index'])->name('feedbacks.index');
//    Route::get('/add-feedbacks',[FeedbackController::class,'create'])->name('feedbacks.create');
//    Route::post('/feedbacks', [FeedbackController::class, 'store'])->name('feedbacks.store');
//    Route::get('/feedbacks/{id}', [FeedbackController::class, 'show'])->name('feedbacks.show');
//    Route::delete('/feedbacks/{id}', [FeedbackController::class, 'destroy'])->name('feedbacks.destroy');
//    Route::get('/feedbacks/{id}/edit', [FeedbackController::class, 'edit'])->name('feedbacks.edit');
//    Route::put('/feedbacks/{id}', [FeedbackController::class, 'update'])->name('feedbacks.update');
    Route::resource('/feedbacks', FeedbackController::class);
//    Route::resource('/images', ImageController::class);
   Route::resource('/images', ImageController::class);
    Route::resource('/fabrics', FabricController::class);


// Route::get('/images', [ImageController::class, 'index'])->name('admin.images.index');



});
//Route::resource('/feedbacks', FeedbackController::class);
