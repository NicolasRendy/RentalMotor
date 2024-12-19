<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\menyewa;
use Illuminate\Http\Request;

class HalamanController extends Controller
{

    // Tampilkan daftar Motor
    public function daftarPenyewaan()
    {
        $motors = Motor::all();
        return view('/daftarPenyewaan', compact('motors'));
    }

    public function create($motor_id)
    {
        $motor = Motor::findOrFail($motor_id);
        return view('Penyewaan', compact('motor'));
    }

    public function kelola()
    {
        $motors = Motor::all();
        return view('/kelola', compact('motors'));
    }

    public function showRiwayatUser()
    {
        // Ambil id_pelanggan dari session Laravel
        $id_pelanggan = session('id_pelanggan');

        // Periksa apakah session id_pelanggan tersedia
        if (!$id_pelanggan) {
            return redirect('/login')->with('error', 'Anda harus login untuk melihat riwayat.');
        }

        // Ambil data riwayat berdasarkan id_pelanggan
        $riwayat = Menyewa::where('id_pelanggan', $id_pelanggan)->get();

        foreach ($riwayat as $item) {
            // Cari data motor berdasarkan kodeMotor pada setiap item
            $motor = Motor::findOrFail($item->kodeMotor);

            // Tambahkan kolom baru pada item riwayat
            $item->noPlat = $motor->noPlat;
            $item->jenisMotor = $motor->jenisMotor;
        }

        // Kembalikan view dengan data riwayat
        return view('Riwayat', compact('riwayat'));
    }


}
