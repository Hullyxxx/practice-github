<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_doanthanhtra_kiemtra extends Model
{
    use HasFactory;
    protected $table = 'mt_view_doanthanhtra_kiemtra';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
