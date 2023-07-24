<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Web\NewsController;
use \App\Http\Controllers\Web\HomeController;
use \App\Http\Controllers\Web\ProductController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('danh-muc/{status}',[ProductController::class, 'category']);
Route::get('danh-muc/{status}/{name}',[ProductController::class, 'productCate']);
Route::get('danh-muc/{status}/{name}/{slug}',[ProductController::class, 'productCateDetail']);
Route::get('san-pham/{slug}',[ProductController::class, 'detailProduct'])->name('detailProduct');
Route::post('bo-loc-dien-thoai', [ProductController::class,'filterPhone'])->name('filter');
Route::post('danh-gia', [ProductController::class,'storeReview'])->name('review');
Route::get('tim-kiem', [ProductController::class,'search'])->name('search');
//Giới thiệu footer
Route::get('gioi-thieu/{slug}', [NewsController::class, 'introduce'])->name('introduce');
//Tin tức
Route::get('tin-tuc/{status}', [NewsController::class, 'news']);
Route::get('chi-tiet-tin-tuc/{slug}', [NewsController::class, 'detailNew']);
Route::get('account',function (){
    return view('web.account.index');
});
Route::get('cart',function (){
    return view('web.cart.index');
});
