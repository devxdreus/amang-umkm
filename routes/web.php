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
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/checkout_confirm', function () {
    return view('checkout_confirm');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/form_mitra', function () {
    return view('form_mitra');
});

Route::get('/list_merchant', function () {
    return view('list_merchant');
});

Route::get('/mitra_merchant', function () {
    return view('mitra_merchant');
});

Route::get('/product_detail', function () {
    return view('product_detail');
});
