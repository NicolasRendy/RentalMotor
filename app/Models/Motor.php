<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{   
    public $timestamps = false;
    protected $table = 'motor';
    protected $primaryKey = 'kodeMotor';
    protected $fillable = [
        'noPlat',
        'jenisMotor',
        'harga',
        'fotoMotor'];
        
}
