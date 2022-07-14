<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sample extends Model
{
    use HasFactory;

    protected $table = 'view_sample';
    public $timestamps = false;
    protected $hidden = ['btn', 'col_geom'];
}
