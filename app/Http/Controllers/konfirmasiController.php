<?php

namespace App\Http\Controllers;

use App\Models\Menyewa;
use App\Models\Motor;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class konfirmasiController extends Controller
{
    public function showKonfirmasi()
    {
        $sewa = Menyewa::All();

        
        $transaksi = Transaksi::where('status', 0)->get();

        foreach ($sewa as $item) {
            // Cari data motor berdasarkan kodeMotor pada setiap item
            $motor = Motor::findOrFail($item->kodeMotor);

            // Tambahkan kolom baru pada item riwayat
            $item->noPlat = $motor->noPlat;
            $item->jenisMotor = $motor->jenisMotor;
        }

        foreach ($transaksi as $item) {
            $motor = Motor::findOrFail($item->kodeMotor);

            // Tambahkan kolom baru pada item riwayat
            $item->noPlat = $motor->noPlat;
            $item->jenisMotor = $motor->jenisMotor;
        }

        return view('Konfirmasi', compact('sewa', 'transaksi'));
    }

    public function konfirmasiAmbil($id_pesan)
    {

        $sewa = Menyewa::find($id_pesan);

        Transaksi::create([
            'tanggalAmbil' => $sewa->tanggalPengambilan,
            'tanggalKembali' => $sewa->tanggalPengembalian,
            'total_Pembayaran' => $sewa->TotalHarga,
            'status' =>  0,
            'id_pelanggan' => $sewa->id_pelanggan,
            'kodeMotor' => $sewa->kodeMotor,
            'id_admin' => session('id')
        ]);

        $sewa->delete();

        return redirect('/Konfirmasi');
    }

    public function konfirmasiKembali($id_transaksi){

        
        Transaksi::where('id_Transaksi', $id_transaksi)->update(['status' => 1]);

        $transaksi = Transaksi::find($id_transaksi);
        Motor::where('kodeMotor',$transaksi->kodeMotor )->update(['status' => 0]);

        return redirect('/Konfirmasi');
    }
}
