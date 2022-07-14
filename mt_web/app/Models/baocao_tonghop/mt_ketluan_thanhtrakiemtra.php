<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_ketluan_thanhtrakiemtra extends Model
{
    use HasFactory;

    protected $table = 'mt_view_ketluan_thanhtrakiemtra';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
