<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_baocao_khoiluong_phatsinh_chatthai;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_baocao_khoiluong_phatsinh_chatthai_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_baocao_khoiluong_phatsinh_chatthai::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-baocao-khoiluong-phatsinh-chatthai.mt-baocao-khoiluong-phatsinh-chatthai-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_baocao_khoiluong_phatsinh_chatthai::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-baocao-khoiluong-phatsinh-chatthai.mt-baocao-khoiluong-phatsinh-chatthai-detail", $res);
    }
}
