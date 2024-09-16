<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nganhnghes extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_nganhnghe';
    
    protected $fillable =[
        'tennganh',
        'hinhanh',
        'thutu',
        'soluong',
    ];
    public $timestamps = false;

}
