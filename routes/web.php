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
    return view('front.pages.index');
});
Route::get('/shops', function () {
    return view('front.pages.shops');
});
Route::get('/brands', function () {
    return view('front.pages.brands');
});
Route::get('/products', function () {
    return view('front.pages.products');
});
Route::get('/product-details', function () {
    return view('front.pages.product-details');
});
Route::get('/free-listing', function () {
    return view('front.pages.free-listing');
});
Route::get('/sign-up', function () {
    return view('front.pages.sign-up');
});
Route::get('/moto-care', function () {
    return view('front.pages.moto-care');
});
Route::get('/moto-wash', function () {
    return view('front.pages.moto-wash');
});
Route::get('/bkash-pay', function () {
    return view('front.pages.bkash-pay');
});
Route::get('/rocket-pay', function () {
    return view('front.pages.rocket-pay');
});
Route::get('/advertise', function () {
    return view('front.pages.advertise');
});
