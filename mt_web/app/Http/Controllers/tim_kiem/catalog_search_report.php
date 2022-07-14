<?php

namespace App\Http\Controllers\tim_kiem;

use App\Http\Controllers\Controller;
use App\Models\tim_kiem\catalog_search;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class catalog_search_report extends Controller
{
    //
    public function index()
    {
        //
        $result = catalog_search::all();
        $res['result'] = $result;
        return view("catalog-search", $res);
    }
}
