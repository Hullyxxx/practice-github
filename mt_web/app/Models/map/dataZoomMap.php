<?php

namespace App\Models\map;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataZoomMap extends Model
{
    use HasFactory;
    protected $table = 'view_all_geom';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
