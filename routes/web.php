<?php

use App\Http\Controllers\MotorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('Home');
});

Route:: get('/login', function() {
    return view('login');
});

Route::post('/LoginCek', [UserController::class, 'loginProses']);

Route:: get('/Registrasi', function() {
    return view('Registrasi');
});

Route :: get('/cekGambar',function(){
    return view('testGambar');
});

Route::post('/RegistrasiProses', [UserController::class, 'registerUser'])->name('registrasi.proses');

Route::get('/Penyewaan',function(){
    return view('Penyewaan');
});

Route::get('/daftarPenyewaan',function(){
    return view('daftarPenyewaan');
});

Route::get('/Help',function(){
    return view('Help');
});

Route::get('/Riwayat',function(){
    return view('Riwayat');
});

Route::get('/Pembayaran', function(){
    return view('Pembayaran');
});

Route::get('/layanan', [MotorController::class, 'getAllMotor'])->name('layanan.index');