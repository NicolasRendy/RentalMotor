<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    public $timestamps = false;
    protected $table = 'jadwal'; // Nama tabel
    protected $primaryKey = 'id_Jadwal'; 
    protected $fillable = [
        'tanggal_pertama',
        'tanggal_kedua',
        'kodeMotor',
        'id_admin',];
}
