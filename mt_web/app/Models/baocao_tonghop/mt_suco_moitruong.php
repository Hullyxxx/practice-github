<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_suco_moitruong extends Model
{
    use HasFactory;
    protected $table = 'mt_view_suco_moitruong';
    public $timestamps = false;
    protected $hidden = ['btn', 'geom'];
}
