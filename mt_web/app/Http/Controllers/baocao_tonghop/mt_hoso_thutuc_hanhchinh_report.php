<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_hoso_thutuc_hanhchinh;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_hoso_thutuc_hanhchinh_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_hoso_thutuc_hanhchinh::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-hoso-thutuc-hanhchinh.mt-hoso-thutuc-hanhchinh-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_hoso_thutuc_hanhchinh::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-hoso-thutuc-hanhchinh.mt-hoso-thutuc-hanhchinh-detail", $res);
    }
}
