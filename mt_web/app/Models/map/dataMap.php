<?php

namespace App\Models\map;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataMap extends Model
{
    use HasFactory;
    protected $table = 'view_all_data_map';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
