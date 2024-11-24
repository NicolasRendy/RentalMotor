<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller {

    // Tampilkan daftar Motor
    public function daftarPenyewaan()
    {
        return view('daftarPenyewaan');
    }
}
