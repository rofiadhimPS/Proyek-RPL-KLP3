<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Auth\RegisterController;



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

Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home_versiProfil');
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
// Route::get('/webadmin/pengguna', function () {
//     return view('admin_pengguna', [
//         'title'=>"Pengguna"
//     ]);
// });
Route::get('/webadmin/pengguna', [UserController::class, 'index'])->name('admin_pengguna');
Route::get('/webadmin/pesanan', [CheckoutController::class, 'index'])->name('admin_pesanan');
// Route::get('/webadmin/pesanan', function () {
//     return view('admin_pesanan', [
//         'title'=>"Pesanan"
//     ]);
// });
Route::get('/webadmin/produk', function () {
    return view('admin_produk', [
        'title'=>"Produk"
    ]);
});
Route::get('/login', function () {
    return view('loginNew');
});
Route::get('/daftar', function () {
    return view('daftar');
});
// Route::get('/daftar', [RegisterController::class, 'showRegistrationForm'])->name('daftar');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/detailmobil', function () {
    return view('detail_mobil');
});
Route::get('/profil', function () {
    return view('profil');//atur dulu
});
Route::get('/pesanan', function () {
    return view('pesanan');
});
Route::get('/pesanan?', function () {
    return view('nonePesanan');
});
Route::get('/pembayaran', function () {
    return view('pembayaran');
});
Route::get('/editakun', function () {
    return view('edit_akun');
});
Route::get('/notifikasi', function () {
    return view('notifikasi');
});
