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
        $validated = $request->validate([
            'kodeMotor' => 'required|exists:motor,kodeMotor', // Pastikan kodeMotor ada di tabel motors
            'tanggalService1' => 'required|date',
            'tanggalService2' => 'required|date',
        ]);
        
        $jadwal = Jadwal::where('kodeMotor', $request->kodeMotor)->first();

        if ($jadwal) {
            // Jika data ditemukan, lakukan update
            $jadwal->update([
                'tanggal_pertama' => $request->tanggalService1,
                'tanggal_kedua' => $request->tanggalService2,
                'id_admin' => session('id')
            ]);
        } else {
            // Jika data tidak ditemukan, buat baris baru
            Jadwal::create([
                'tanggal_pertama' => $request->tanggalService1,
                'tanggal_kedua' => $request->tanggalService2,
                'kodeMotor' => $request->kodeMotor,
                'id_admin' => session('id')
            ]);
        }

        // Kembali ke halaman sebelumnya atau redirect ke halaman jadwal
        return redirect()->route('jadwal.input');
    }

    public function allJadwalPick(){
        $jadwalMaintenance = jadwal::all();

        foreach ($jadwalMaintenance as $item){
            $motor = Motor::findOrFail($item->kodeMotor);

            $item->jenisMotor = $motor->jenisMotor;
            $item->noPlat = $motor->noPlat;
            $item->gambar = $motor-> fotoMotor;
        }

        return view('lihat',compact('jadwalMaintenance'));
    }
}
