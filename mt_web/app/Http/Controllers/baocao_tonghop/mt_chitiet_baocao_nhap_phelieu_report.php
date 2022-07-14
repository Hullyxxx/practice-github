<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_chitiet_baocao_nhap_phelieu;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_chitiet_baocao_nhap_phelieu_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_chitiet_baocao_nhap_phelieu::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-chitiet-baocao-nhap-phelieu.mt-chitiet-baocao-nhap-phelieu-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_chitiet_baocao_nhap_phelieu::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-chitiet-baocao-nhap-phelieu.mt-chitiet-baocao-nhap-phelieu-detail", $res);
    }
}
