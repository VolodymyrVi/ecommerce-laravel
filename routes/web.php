<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\IndexController;
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

Route::get('/', function () {
    return view('welcome');
});

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

