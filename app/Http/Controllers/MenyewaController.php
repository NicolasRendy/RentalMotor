<?php

namespace App\Http\Controllers;

use App\Models\menyewa;
use App\Models\Motor;
use Illuminate\Http\Request;

class MenyewaController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal_pengambilan' => 'required|date|after_or_equal:today',
            'tanggal_pengembalian' => 'required|date|after_or_equal:tanggal_pengambilan',
            'total_harga' => 'required|numeric', // Validasi total_harga
            'kodeMotor' => 'required',
            'id_Pelanggan' => 'required',
        ]);

        // Simpan ke database
        Menyewa::create([
            'tanggalPengambilan' => $validated['tanggal_pengambilan'],
            'tanggalPengembalian' => $validated['tanggal_pengembalian'],
            'TotalHarga' => $validated['total_harga'], // Menyimpan total_harga ke database
            'id_pelanggan' => $validated['id_Pelanggan'],
            'kodeMotor' => $validated['kodeMotor'],
        ]);

        Motor::where('kodeMotor', $validated['kodeMotor'])->update(['status' => 1]);

        return redirect()->intended('/Riwayat');
    }
}
