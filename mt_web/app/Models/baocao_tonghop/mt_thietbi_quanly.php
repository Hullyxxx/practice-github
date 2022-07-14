<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_thietbi_quanly extends Model
{
    use HasFactory;
    protected $table = 'mt_view_thietbi_quanly';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
