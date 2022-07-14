<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_hopdong_thugom_xuly_chatthai_phatsinh extends Model
{
    use HasFactory;

    protected $table = 'mt_view_hopdong_thugom_xuly_chatthai_phatsinh';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
