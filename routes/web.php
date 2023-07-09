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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/seller/pesanan', function () {
    return view('pesanan.kelola');
});

Route::get('/seller/pesanan/riwayat', function () {
    return view('pesanan.riwayat');
});

Route::get('/franchise/tambah', function () {
    return view('franchise.tambah');
});

Route::get('/signin', function () {
    return view('form.signin');
});

Route::get('/signup', function () {
    return view('form.signup');
});

Route::get('/form_mitra', function () {
    return view('form.form_mitra');
});

Route::get('/list_merchant', function () {
    return view('home.list_merchant');
});

Route::get('/profile', function () {
    return view('home.profile');
});

Route::get('/product_detail', function () {
    return view('productDetails.product_detail');
});

Route::get('/checkout_confirm', function () {
    return view('productDetails.checkout_confirm');
});

Route::get('/checkout', function () {
    return view('productDetails.checkout');
});

Route::get('/mitra_confirm', function () {
    return view('productDetails.mitra_confirm');
});