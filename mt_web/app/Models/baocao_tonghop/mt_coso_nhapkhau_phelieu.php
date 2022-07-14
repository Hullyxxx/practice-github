<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_coso_nhapkhau_phelieu extends Model
{
    use HasFactory;

    protected $table = 'mt_view_coso_nhapkhau_phelieu';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
