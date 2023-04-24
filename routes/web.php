<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\AdminController;
/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
|
| All routes Admin Panel
| Use Prefix admin
|
*/
Route::prefix('admin')->group(function () {
Route::get('/',[AdminController::class,'index'])->name('admin.home');




// Market Prefix
Route::prefix('market')->group(function () {

//    Category Section ================================================
    Route::prefix('category')->group(function () {
        Route::get('/',[\App\Http\Controllers\Admin\Market\CategoryController::class,'index'])->name('admin.market.category.index');
        Route::get('/create',[\App\Http\Controllers\Admin\Market\CategoryController::class,'create'])->name('admin.market.category.create');
        Route::post('/store',[\App\Http\Controllers\Admin\Market\CategoryController::class,'store'])->name('admin.market.category.store');
        Route::get('/edit/{id}',[\App\Http\Controllers\Admin\Market\CategoryController::class,'edit'])->name('admin.market.category.edit');
        Route::put('/update/{id}',[\App\Http\Controllers\Admin\Market\CategoryController::class,'update'])->name('admin.market.category.update');
        Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\Market\CategoryController::class,'destroy'])->name('admin.market.category.destroy');
    });

});






});



