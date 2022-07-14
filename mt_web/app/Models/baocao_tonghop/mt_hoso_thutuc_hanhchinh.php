<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_hoso_thutuc_hanhchinh extends Model
{
    use HasFactory;

    protected $table = 'mt_view_hoso_thutuc_hanhchinh';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
