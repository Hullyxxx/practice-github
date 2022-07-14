<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_quyetdinh_xuly extends Model
{
    use HasFactory;

    protected $table = 'mt_view_quyetdinh_xuly';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
