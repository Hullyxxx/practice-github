<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_kehoach_bvmt extends Model
{
    use HasFactory;
    protected $table = 'mt_view_kehoach_bvmt';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
