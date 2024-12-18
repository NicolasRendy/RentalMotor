<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\jadwal;
use Illuminate\Http\Request;

class jadwalController extends Controller
{
    public function inputJadwal()
    {
        $motors = Motor::all();
        return view('input', compact('motors'));
    }

    public function store(Request $request)
    {
        // Validasi input


        $validated = $request->validate([
            'kodeMotor' => 'required|exists:motor,kodeMotor', // Pastikan kodeMotor ada di tabel motors
            'tanggalService1' => 'required|date',
            'tanggalService2' => 'required|date',
        ]);

        // Simpan data jadwal ke dalam tabel jadwals
        Jadwal::create([
            'tanggal_pertama' => $request->tanggalService1,
            'tanggal_kedua' => $request->tanggalService2,
            'kodeMotor' => $request->kodeMotor,
            'id_admin' => session('id_admin')
        ]);

        // Kembali ke halaman sebelumnya atau redirect ke halaman jadwal
        return redirect()->route('jadwal.input');
    }

    public function allJadwalPick(){
        $jadwalMaintenance = jadwal::all();
        return view('lihat',compact('jadwalMaintenance'));
    }
}
