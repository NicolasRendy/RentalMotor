<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function showAllKeuangan(){
        $transaksi = Transaksi::where('status', 1)->get();
        return view('Laporan',compact('transaksi'));
    }
}
