<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use \App\Http\Controllers\Admin\BannerController;
use \App\Http\Controllers\Admin\BlogController;
use \App\Http\Controllers\Admin\IntroduceController;
use \App\Http\Controllers\Admin\CategoryController;
use \App\Http\Controllers\Admin\FlashSaleController;
use \App\Http\Controllers\Admin\ProductReviewController;
use \App\Http\Controllers\Admin\OrderController;

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
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/dologin', [LoginController::class, 'doLogin'])->name('doLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('check-admin-auth')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('index');

    Route::prefix('order')->name('order.')->group(function (){
        Route::get('index/{status}', [OrderController::class,'getDataOrder'])->name('index');
        Route::get('detail/{id}', [OrderController::class,'orderDetail'])->name('detail');
        Route::get('status/{order_id}/{status_id}', [OrderController::class,'statusOrder'])->name('status');
    });

    Route::prefix('category')->name('category.')->group(function () {
        Route::get('', [CategoryController::class, 'index'])->name('index');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('store', [CategoryController::class, 'store'])->name('store');
        Route::get('delete/{id}', [CategoryController::class, 'delete']);
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('update');
    });

    Route::prefix('products')->name('products.')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('index');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('store', [ProductController::class, 'store'])->name('store');
        Route::get('delete/{id}', [ProductController::class, 'delete']);
        Route::get('edit/{id}', [ProductController::class, 'edit']);
        Route::post('update/{id}', [ProductController::class, 'update']);
        Route::post('delete-img', [ProductController::class, 'deleteImg']);
        Route::get('delete-name/{id}', [ProductController::class, 'deleteName']);
        Route::get('delete-color/{id}', [ProductController::class, 'deleteColor']);
        Route::get('item_similar/search', [ProductController::class, 'productSearch']);
        Route::get('item_similar', [ProductController::class, 'itemSimilar']);
        Route::get('item_similar/delete', [ProductController::class, 'itemDeleteSimilar']);
        Route::get('item_similar/delete_related', [ProductController::class, 'itemDeleteRelated']);
        Route::get('review/{status}', [ProductController::class, 'reviewProduct'])->name('reviews');
        Route::get('browser-review/{id}', [ProductController::class, 'browserReview']);
        Route::get('delete-review/{id}', [ProductController::class, 'deleteReview']);
    });

    Route::prefix('product-flash-sale')->name('flash-sale.')->group(function () {
        Route::get('', [FlashSaleController::class, 'index'])->name('index');
        Route::get('create', [FlashSaleController::class, 'create'])->name('create');
        Route::post('store', [FlashSaleController::class, 'store'])->name('store');
        Route::get('delete/{id}', [FlashSaleController::class, 'delete']);
        Route::get('edit/{id}', [FlashSaleController::class, 'edit']);
        Route::post('update/{id}', [FlashSaleController::class, 'update']);
        Route::get('item_product', [FlashSaleController::class, 'itemProduct']);
        Route::get('item_product/delete', [FlashSaleController::class, 'itemDeleteProduct']);
    });

    Route::prefix('product-review')->name('product-review.')->group(function () {
        Route::get('/', [ProductReviewController::class, 'index'])->name('index');
        Route::get('show/{id}', [ProductReviewController::class, 'show'])->name('show');
        Route::get('browser/{id}', [ProductReviewController::class, 'browser'])->name('show');
        Route::get('cancel/{id}', [ProductReviewController::class, 'cancel'])->name('show');
    });

    Route::prefix('banner')->name('banner.')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('index');
        Route::get('create', [BannerController::class, 'create'])->name('create');
        Route::post('store', [BannerController::class, 'store'])->name('store');
        Route::post('delete/{id}', [BannerController::class, 'delete']);
        Route::get('edit/{id}', [BannerController::class, 'edit']);
        Route::post('update/{id}', [BannerController::class, 'update']);
    });

    Route::prefix('blog')->name('blog.')->group(function () {
        Route::get('', [BlogController::class, 'index'])->name('index');
        Route::get('create', [BlogController::class, 'create'])->name('create');
        Route::post('store', [BlogController::class, 'store'])->name('store');
        Route::get('delete/{id}', [BlogController::class, 'delete']);
        Route::get('edit/{id}', [BlogController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [BlogController::class, 'update'])->name('update');
    });

    Route::prefix('introduce')->name('introduce.')->group(function () {
        Route::get('/', [IntroduceController::class, 'index'])->name('index');
        Route::get('create', [IntroduceController::class, 'create'])->name('create');
        Route::post('store', [IntroduceController::class, 'store'])->name('store');
        Route::get('delete/{id}', [IntroduceController::class, 'delete']);
        Route::get('edit/{id}', [IntroduceController::class, 'edit']);
        Route::post('update/{id}', [IntroduceController::class, 'update']);
    });

    Route::post('ckeditor/upload', [\App\Http\Controllers\CKEditorController::class, 'upload'])->name('ckeditor.image-upload');
});
