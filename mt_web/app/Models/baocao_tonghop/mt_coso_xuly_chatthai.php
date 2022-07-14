<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_coso_xuly_chatthai extends Model
{
    use HasFactory;
    protected $table = 'mt_view_coso_xuly_chatthai';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
