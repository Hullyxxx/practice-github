<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_nguonthai extends Model
{
    use HasFactory;

    protected $table = 'mt_view_nguonthai';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
