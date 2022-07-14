<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_diem_sinhvat extends Model
{
    use HasFactory;
    protected $table = 'mt_view_diem_sinhvat';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
