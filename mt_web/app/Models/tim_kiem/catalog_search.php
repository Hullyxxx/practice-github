<?php

namespace App\Models\tim_kiem;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalog_search extends Model
{
    use HasFactory;
    protected $table = 'view_full_text_search';
    public $timestamps = false;
}
