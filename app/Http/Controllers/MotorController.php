<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;

class MotorController extends Controller
{
    //
    public function getAllMotor()
    {
        $motors = Motor::all();

        return view('/layanan', compact('motors'));
    }

    public function store(Request $request)
    {
        
        // Upload gambar ke database
        $gambar = $request->file('fotoMotor')->getContent();

        Motor::create([
            'noPlat' => $request->noPlat,
            'jenisMotor' => $request->jenisMotor,
            'harga' => $request->Harga,
            'fotoMotor' => $gambar,
        ]);

        return redirect()->route('kelola');
    }

    public function index()
    {
        $motors = Motor::all();
        return view('testGambar', compact('motors'));
    }

    public function destroy($kodeMotor)
    {
        $motor = Motor::where('kodeMotor', $kodeMotor)->first();
        if ($motor) {
            $motor->delete(); // Menghapus data dari database
            return redirect()->back()->with('success', 'Motor berhasil dihapus.');
        }
        return redirect()->back()->with('error', 'Motor tidak ditemukan.');
    }
}
