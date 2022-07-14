<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_vung_sinhthai extends Model
{
    use HasFactory;
    protected $table = 'mt_view_vung_sinhthai';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
