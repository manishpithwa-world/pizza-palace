<?php

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

Route::get('/product-list','user\ProductController@index')->name('product_list');
Route::get('/refresh-cart','user\ProductController@refreshCart')->name('refresh_cart');
Route::post('/update-cart','user\ProductController@updateCart')->name('update_cart');
Route::post('/store-address','user\OrderController@storeAddress')->name('store_address');
Route::post('/place-order','user\OrderController@placeOrder')->name('place_order');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
