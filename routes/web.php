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
Route::get('danh-muc/{status}',[ProductController::class, 'product']);
Route::get('danh-muc/{status}/{name}',[ProductController::class, 'productCate']);
Route::get('san-pham/{slug}',[ProductController::class, 'detailProduct'])->name('detailProduct');
//Giới thiệu footer
Route::get('introduce/{id}', [NewsController::class, 'introduce'])->name('introduce');
//Tin tức
Route::get('tin-tuc/{status}', [NewsController::class, 'news']);
Route::get('chi-tiet-tin-tuc/{slug}', [NewsController::class, 'detailNew']);
Route::get('account',function (){
    return view('web.account.index');
});
Route::get('cart',function (){
    return view('web.cart.index');
});
