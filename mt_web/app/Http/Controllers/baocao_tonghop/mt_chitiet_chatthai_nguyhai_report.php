<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_chitiet_chatthai_nguyhai;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_chitiet_chatthai_nguyhai_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_chitiet_chatthai_nguyhai::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-chitiet-chatthai-nguyhai.mt-chitiet-chatthai-nguyhai-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_chitiet_chatthai_nguyhai::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-chitiet-chatthai-nguyhai.mt-chitiet-chatthai-nguyhai-detail", $res);
    }
}
