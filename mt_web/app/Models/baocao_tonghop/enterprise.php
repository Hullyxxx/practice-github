<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enterprise extends Model
{
    use HasFactory;
    protected $table = 'cate_view_enterprise';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
