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

Route::post('/RegistrasiProses', [UserController::class, 'registerUser']);

Route::get('/Penyewaan',function(){
    return view('Penyewaan');
});

Route::get('/daftarPenyewaan',function(){
    return view('daftarPenyewaan');
});

Route::get('/Riwayat',function(){
    return view('Riwayat');
});

<<<<<<< HEAD
Route::get('/Pembayaran', function(){
    return view('Pembayaran');
});

Route::get('/layanan', [MotorController::class, 'getAllMotor'])->name('layanan.index');
=======
Route::get('/layanan', [MotorController::class, 'getAllMotor'])->name('layanan.index');

// test
Route::get('/motors', [MotorController::class, 'index'])->name('motors.index');
Route::post('/motors', [MotorController::class, 'store'])->name('motors.store');
>>>>>>> 4de605cb2449072b44a64e87a3a7ff800fee8f39
