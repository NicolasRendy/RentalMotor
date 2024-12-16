<?php

namespace App\Http\Controllers;
use App\Models\Motor;
use App\Models\menyewa;
use Illuminate\Http\Request;

class HalamanController extends Controller {

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

    public function showRiwayatUser($id_pesan)
    {

        $riwayat = Menyewa::where('id_pesan', $id_pesan)->get();

        return view('---', compact('riwayat')); 
    }
}
