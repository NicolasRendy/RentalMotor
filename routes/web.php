<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\konfirmasiController;
use App\Http\Controllers\MenyewaController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Home');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Rute login untuk user biasa
Route::get('/login', function () {
    return view('login');
})->name('login');  // pastikan rute login untuk user biasa sudah ada

// Rute login untuk admin
Route::get('/admin/login', function () {
    return view('login');
})->name('admin.login');  // pastikan sudah ada nama untuk route admin login

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

Route::get('/Konfirmasi',[konfirmasiController::class,'showKonfirmasi']);
Route::get('/konfirmasi-ambil/{kodePesan}', [konfirmasiController::class, 'konfirmasiAmbil'])->name('konfirmasi.ambil');
Route::get('/konfirmasi-kembali/{kodeTransaksi}', [konfirmasiController::class, 'konfirmasiKembali'])->name('konfirmasi.kembali');

// Route::get('/Laporan', function () {
//     return view('Laporan');
// });
Route::get('/Laporan',[TransaksiController::class,'showAllKeuangan']);


Route::get('/kelola', [HalamanController::class,'kelola']);
Route::get('/kelola', [HalamanController::class, 'kelola'])->name('kelola');
Route::get('/Editmotor/{id}', [MotorController::class, 'getMotorData']); // Mengambil data motor berdasarkan ID
Route::put('/Updatemotor/{id}', [MotorController::class, 'updateMotor'])->name('motors.update');

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/tambah', function () {
    return view('tambah');
});

Route::post('/TambahProses', [MotorController::class, 'store']);

Route::delete('/hapus/{kodeMotor}', [MotorController::class, 'destroy'])->name('motors.destroy');

// Route::get('/daftarPenyewaan',function(){
//     return view('daftarPenyewaan');
// });

//Route::get('/daftarPenyewaan', [HalamanController::class, 'daftarPenyewaan'])->middleware('auth');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


Route::get('/Help', function () {
    return view('Help');
});


Route::get('/Riwayat', [HalamanController::class, 'showRiwayatUser']);

Route::get('/Pembayaran', function () {
    return view('Pembayaran');
});

Route::get('/input',[jadwalController::class,'inputJadwal'])->name('jadwal.input');
Route::post('/jadwal', [JadwalController::class, 'store'])->name('jadwal.store');


Route::get('/lihat',[jadwalController::class,'allJadwalPick']);

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


Route::get('/test',function(){
    return view('testProgram');
});

Route::get('/notif',function(){
    return view('notifTest');
});