<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_chitiet_baocao_khoiluong;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_chitiet_baocao_khoiluong_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_chitiet_baocao_khoiluong::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-chitiet-baocao-khoiluong.mt-chitiet-baocao-khoiluong-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_chitiet_baocao_khoiluong::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-chitiet-baocao-khoiluong.mt-chitiet-baocao-khoiluong-detail", $res);
    }
}
