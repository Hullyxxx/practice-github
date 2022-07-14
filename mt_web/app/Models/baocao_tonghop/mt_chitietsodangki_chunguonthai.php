<?php

namespace App\Models\baocao_tonghop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mt_chitietsodangki_chunguonthai extends Model
{
    use HasFactory;

    protected $table = 'mt_view_chitietsodangki_chunguonthai';
    public $timestamps = false;
    protected $hidden = ['btn'];
}
 