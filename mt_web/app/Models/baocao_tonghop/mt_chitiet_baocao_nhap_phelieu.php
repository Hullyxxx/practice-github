<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_chitiet_baocao_nhap_phelieu extends Model
{
    use HasFactory;
    protected $table = 'mt_view_chitiet_baocao_nhap_phelieu';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
