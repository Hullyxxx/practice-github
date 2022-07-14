<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\sample;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class sample_report extends Controller
{
    //
    public function search()
    {
        //
        $result = sample::all();
        $res['result'] = $result;
        return view("baocao-tonghop.sample-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = sample::find($id);
        $res['result'] = $result;
        return view("baocao-tonghop.sample-detail", $res);
    }
}
