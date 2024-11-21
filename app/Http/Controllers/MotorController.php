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

        foreach ($motors as $motor) {
            // Mengonversi gambar BLOB menjadi format base64
            if ($motor->fotoMotor) {
                $motor->fotoMotorBase64 = base64_encode($motor->fotoMotor);
            } else {
                $motor->fotoMotorBase64 = null;
            }
        }

        return view('layanan', compact('motors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'noPlat' => 'required|string|max:255',
            'fotoMotor' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Upload gambar ke database
        $gambar = $request->file('fotoMotor')->getContent();

        Motor::create([
            'noPlat' => $request->noPlat,
            'fotoMotor' => $gambar,
        ]);

        return redirect()->route('motors.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function index()
    {
        $motors = Motor::all();
        return view('testGambar', compact('motors'));
    }
}
