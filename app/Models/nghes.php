<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nghes extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable =[
        'tennghe',
        'Luong',
        'Location',
        'id_nganhnghe',
        'id_quocgia',
        'id_loainghes',
        'thoigianthuviec',
        'capbac',
        'soluong',
        'age',
        'hinhthuc',
        'bangcap',
        'kinhnghiem',
        'mota',
        'yeucau',
        'quyenloi_congviec',
        'kynang',
        'post_status',
    ];


    public $timestamps = false;
}
