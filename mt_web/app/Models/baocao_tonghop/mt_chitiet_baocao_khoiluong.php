<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_chitiet_baocao_khoiluong extends Model
{
    use HasFactory;
    protected $table = 'mt_view_chitiet_baocao_khoiluong';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
