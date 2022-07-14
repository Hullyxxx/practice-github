<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_bienban_thanhtrakiemtra extends Model
{
    use HasFactory;
    protected $table = 'mt_view_bienban_thanhtrakiemtra';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
