<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_quyetdinh_xuly_xuphat extends Model
{
    use HasFactory;

    protected $table = 'mt_view_quyetdinh_xuly_xuphat';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
