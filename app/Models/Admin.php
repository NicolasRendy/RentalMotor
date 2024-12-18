<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    public $timestamps = false;
    protected $table = 'admin'; // Nama tabel
    protected $primaryKey = 'id_admin'; 
    protected $fillable = [
        'nama',
        'email',
        'password',
        'noTelp',];
}
