<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('/webadmin', function () {
    return view('admin_dashboard', [
        'title'=>"Dashboard"
    ]);
});
Route::get('/webadmin/akun', function () {
    return view('admin_akun', [
        'title'=>"Akun"
    ]);
});
Route::get('/webadmin/chat', function () {
    return view('admin_chat', [
        'title'=>"Chat"
    ]);
});
Route::get('/webadmin/notifikasi', function () {
    return view('admin_notifikasi', [
        'title'=>"Notifikasi"
    ]);
});
Route::get('/webadmin/pengguna', function () {
    return view('admin_pengguna', [
        'title'=>"Pengguna"
    ]);
});
Route::get('/webadmin/pesanan', function () {
    return view('admin_pesanan', [
        'title'=>"Pesanan"
    ]);
});
Route::get('/webadmin/produk', function () {
    return view('admin_produk', [
        'title'=>"Produk"
    ]);
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/coba', function () {
    return view('coba');
});
