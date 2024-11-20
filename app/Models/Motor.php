<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{   
    public $timestamps = false;
    protected $table = 'motor';
    protected $primaryKey = 'KodeMotor';
    protected $fillable = [
        'noPlat',
        'fotoMotor'];
        
}
