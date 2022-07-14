<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_giayphep_quanly_chatthainguyhai extends Model
{
    use HasFactory;
    protected $table = 'mt_view_giayphep_quanly_chatthainguyhai';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
