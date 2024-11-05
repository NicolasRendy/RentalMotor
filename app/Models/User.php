<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    protected $table = 'pelanggan'; // Nama tabel
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = [
        'nama',
        'email',
        'password',
        'noTelepon',
        'alamat'];

    public function registrasi(array $data){
        self::create($data);
    }
    
}
