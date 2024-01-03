<?php

use App\Http\Controllers\Admin\Category\CategoryCreateController;
use App\Http\Controllers\Admin\Category\CategoryDestroyController;
use App\Http\Controllers\Admin\Category\CategoryEditController;
use App\Http\Controllers\Admin\Category\CategoryIndexController;
use App\Http\Controllers\Admin\Category\CategoryShowController;
use App\Http\Controllers\Admin\Category\CategoryStoreController;
use App\Http\Controllers\Admin\Category\CategoryUpdateController;
use App\Http\Controllers\Admin\Main\AdminIndexController;
use App\Http\Controllers\Admin\Tag\TagCreateController;
use App\Http\Controllers\Admin\Tag\TagDestroyController;
use App\Http\Controllers\Admin\Tag\TagEditController;
use App\Http\Controllers\Admin\Tag\TagIndexController;
use App\Http\Controllers\Admin\Tag\TagShowController;
use App\Http\Controllers\Admin\Tag\TagStoreController;
use App\Http\Controllers\Admin\Tag\TagUpdateController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [IndexController::class,'index']);
});

Route::group(['namespace' => 'Admin', 'prefix'=>'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [AdminIndexController::class,'index']);
    });

    Route::group(['namespace' => 'Category','prefix'=>'categories'], function () {
        Route::get('/', [CategoryIndexController::class,'index'])->name('admin.category.index');
        Route::get('/create', [CategoryCreateController::class,'index'])->name('admin.category.create');
        Route::post('/', [CategoryStoreController::class,'index'])->name('admin.category.store');
        Route::get('/{category}', [CategoryShowController::class,'index'])->name('admin.category.show');
        Route::get('/{category}/edit', [CategoryEditController::class,'index'])->name('admin.category.edit');
        Route::patch('/{category}', [CategoryUpdateController::class,'index'])->name('admin.category.update');
        Route::delete('/{category}', [CategoryDestroyController::class,'index'])->name('admin.category.destroy');
    });

    Route::group(['namespace' => 'Tag','prefix'=>'tags'], function () {
        Route::get('/', [TagIndexController::class,'index'])->name('admin.tag.index');
        Route::get('/create', [TagCreateController::class,'index'])->name('admin.tag.create');
        Route::post('/', [TagStoreController::class,'index'])->name('admin.tag.store');
        Route::get('/{tag}', [TagShowController::class,'index'])->name('admin.tag.show');
        Route::get('/{tag}/edit', [TagEditController::class,'index'])->name('admin.tag.edit');
        Route::patch('/{tag}', [TagUpdateController::class,'index'])->name('admin.tag.update');
        Route::delete('/{tag}', [TagDestroyController::class,'index'])->name('admin.tag.destroy');
    });

});

Auth::routes();
