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
}
