<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_coso_onmt extends Model
{
    use HasFactory;
    protected $table = 'mt_view_coso_onmt';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
