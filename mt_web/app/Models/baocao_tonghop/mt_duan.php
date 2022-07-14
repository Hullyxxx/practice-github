<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_duan extends Model
{
    use HasFactory;
    protected $table = 'mt_view_duan';
    public $timestamps = false;
    protected $hidden = ['btn', 'geom'];
}
