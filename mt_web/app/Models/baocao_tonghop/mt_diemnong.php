<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_diemnong extends Model
{
    use HasFactory;
    protected $table = 'mt_view_diemnong';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
