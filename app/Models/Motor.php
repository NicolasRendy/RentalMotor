<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{   
    protected $table = 'motor';
    protected $primaryKey = 'KodeMotor';
    protected $fillable = [
        'noPlat',
        'jenisMotor',
        'harga',
        'status',
        'fotoMotor'];
        
}
