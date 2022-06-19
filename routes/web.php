<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('frontend.main.index');


Route::get('/admin', [IndexController::class, 'index'])->name('admin.main.index');


Route::group(['prefix' => 'admin/category'], function(){
    Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
    Route::patch('/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('admin.category.delete');
});

Route::group(['prefix' => 'admin/products'], function(){
    Route::get('/', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/{products}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::get('/{products}', [ProductController::class, 'show'])->name('admin.products.show');
    Route::patch('/{products}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/{products}', [ProductController::class, 'destroy'])->name('admin.products.delete');
});