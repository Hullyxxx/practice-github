<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_nguonthai;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_nguonthai_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_nguonthai::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-nguonthai.mt-nguonthai-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_nguonthai::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-nguonthai.mt-nguonthai-detail", $res);
    }
}
