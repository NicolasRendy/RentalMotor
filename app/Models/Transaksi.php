<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public $timestamps = false;
    protected $table = 'transaksi';
    protected $primaryKey = 'id_Transaksi';
    protected $fillable = [
        'id_Transaksi',
        'tanggalAmbil',
        'tanggalKembali',
        'total_Pembayaran',
        'status',
        'id_pelanggan',
        'kodeMotor',
        'id_admin'
    ];
}
