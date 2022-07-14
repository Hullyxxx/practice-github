<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_coso_nhapkhau_phelieu;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_coso_nhapkhau_phelieu_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_coso_nhapkhau_phelieu::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-coso-nhapkhau-phelieu.mt-coso-nhapkhau-phelieu-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_coso_nhapkhau_phelieu::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-coso-nhapkhau-phelieu.mt-coso-nhapkhau-phelieu-detail", $res);
    }
}
