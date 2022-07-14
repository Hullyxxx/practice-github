<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_baocao_congtac_bvmt extends Model
{
    use HasFactory;
    protected $table = 'mt_view_baocao_congtac_bvmt';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
