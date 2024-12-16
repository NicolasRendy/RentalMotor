<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class menyewa extends Model
{
    use HasFactory, Notifiable;
    public $timestamps = false;
    protected $table = 'menyewa'; // Nama tabel
    protected $primaryKey = 'id_pesan';
    protected $fillable = [
        'tanggalPengambilan',
        'tanggalPengembalian',
        'TotalHarga',
        'id_pelanggan',
        'kodeMotor'];
}
