<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_khuvuc_baoton_sinhthai extends Model
{
    use HasFactory;
    protected $table = 'mt_view_khuvuc_baoton_sinhthai';
    public $timestamps = false;
    protected $hidden = ['btn', 'geom'];
}
