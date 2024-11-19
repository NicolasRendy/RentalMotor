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


Route:: get('/navTest', function() {
    return view('testNav');
});

Route:: get('/Registrasi', function() {
    return view('Registrasi');
});

Route::post('/RegistrasiProses', [UserController::class, 'registerUser'])->name('registrasi.proses');

Route::get('/Penyewaan',function(){
    return view('Penyewaan');
});

Route::get('/daftarPenyewaan',function(){
    return view('daftarPenyewaan');
});

Route::get('/Riwayat',function(){
    return view('Riwayat');
});


Route::get('/layanan', [MotorController::class, 'getAllMotor'])->name('layanan.index');

// Route:: get('/layanan', function() {
//     return view('layanan');
// });