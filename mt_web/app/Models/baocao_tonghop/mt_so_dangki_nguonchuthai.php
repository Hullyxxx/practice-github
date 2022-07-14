<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_so_dangki_nguonchuthai extends Model
{
    use HasFactory;

    protected $table = 'mt_view_so_dangki_nguonchuthai';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
