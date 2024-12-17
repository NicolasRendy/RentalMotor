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

    public function getMotorData($id)
    {
        $motor = Motor::find($id);

        if ($motor) {
            // Jika foto motor ada, konversi ke base64
            $imageData = base64_encode($motor->fotoMotor); // Mengkonversi BLOB ke Base64
            $motorData = [
                'kodeMotor' => $motor->kodeMotor,
                'jenisMotor' => $motor->jenisMotor,
                'noPlat' => $motor->noPlat,
                'harga' => $motor->harga,
                'fotoMotor' => 'data:image/jpeg;base64,' . $imageData
            ];

            return response()->json($motorData);
        }

        return response()->json(['error' => 'Motor not found'], 404);
    }

    public function updateMotor(Request $request, $id)
    {
        $request->validate([
            'jenisMotor' => 'required|string',
            'noPlat' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        $motor = Motor::find($id);
        if (!$motor) {
            return redirect()->back()->with('error', 'Motor tidak ditemukan');
        }

        $motor->update([
            'jenisMotor' => $request->jenisMotor,
            'noPlat' => $request->noPlat,
            'harga' => $request->harga,
        ]);

        return redirect()->route('kelola')->with('success', 'Motor berhasil diperbarui');
    }
}
