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
Route::get('category',function (){
   return view('web.category.index');
});
Route::get('product/{id}',[ProductController::class, 'detailProduct'])->name('detailProduct');
//Giới thiệu footer
Route::get('introduce/{id}', [NewsController::class, 'introduce'])->name('introduce');
Route::get('introduce',function (){
    return view('web.introduce.index');
});
//Tin tức
Route::get('news', [NewsController::class, 'news'])->name('news');

Route::get('detail-news',function (){
    return view('web.news.detail-news');
});
Route::get('account',function (){
    return view('web.account.index');
});
