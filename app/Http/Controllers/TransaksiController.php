<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function showAllKeuangan(){
        $transaksi = Transaksi::where('status', 1)->get();

        foreach ($transaksi as $item){
            $user = User::findOrFail($item->id_pelanggan);
            $motor = Motor::findOrFail($item->kodeMotor);

            $item->nama = $user->nama;
            $item->jenisMotor = $motor->jenisMotor;
            $item->noPlat = $motor->noPlat;
        }
        return view('Laporan',compact('transaksi'));
    }

    public function showPembayaran(){
        $bayar = Transaksi::where('status', 0)
                  ->where('id_pelanggan', session('id_pelanggan'))
                  ->get();

        foreach ($bayar as $item){
            $motor = Motor::findOrFail($item->kodeMotor);

            $item->jenisMotor = $motor->jenisMotor;
            $item->noPlat = $motor->noPlat;
        }

        return view('Pembayaran',compact('bayar'));
    }
}
