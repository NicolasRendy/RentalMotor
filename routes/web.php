<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\MenyewaController;
use App\Http\Controllers\MotorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/LoginCek', [UserController::class, 'loginProses']);

Route::get('/Registrasi', function () {
    return view('Registrasi');
});

Route::get('/cekGambar', function () {
    return view('testGambar');
});

Route::post('/RegistrasiProses', [UserController::class, 'registerUser']);


Route::get('/Penyewaan', function () {
    return view('Penyewaan');
});

Route::get('/transferBriva', function () {
    return view('transferBriva');
});

Route::get('/transferMandiri', function () {
    return view('transferMandiri');
});

Route::get('/daftarPenyewaan', function () {
    return view('daftarPenyewaan');
});

Route::get('/kelola', function () {
    return view('kelola');
});

Route::get('/edit', function () {
    return view('edit');
});
Route::get('/tambah', function () {
    return view('tambah');
});

// Route::get('/daftarPenyewaan',function(){
//     return view('daftarPenyewaan');
// });

//Route::get('/daftarPenyewaan', [HalamanController::class, 'daftarPenyewaan'])->middleware('auth');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


Route::get('/Help', function () {
    return view('Help');
});

Route::get('/Riwayat', function () {
    return view('Riwayat');
});

Route::get('/Pembayaran', function () {
    return view('Pembayaran');
});


Route::get('/layanan', [MotorController::class, 'getAllMotor'])->name('layanan.index');

Route::get('/daftarPenyewaan',[HalamanController::class,'daftarPenyewaan'])->middleware('auth');

Route::get('/penyewaan/create/{motor_id}', [HalamanController::class, 'create'])->name('penyewaan.create');

Route::post('/menyewaProses', [MenyewaController::class, 'store']);

// Route::get('/daftarPenyewaan',function(){
//     return view('daftarPenyewaan');
// })->middleware('auth'); 

// test
Route::get('/motors', [MotorController::class, 'index'])->name('motors.index');
Route::post('/motors', [MotorController::class, 'store'])->name('motors.store');
Route::delete('/motors/{kodeMotor}', [MotorController::class, 'destroy'])->name('motors.destroy');