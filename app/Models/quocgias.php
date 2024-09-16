<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quocgias extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_quocgia';

    protected $fillable =[
        'tenquocgia',
        'flag',
        'id_chauluc',
    ];

    public $timestamps = false;
    
}
