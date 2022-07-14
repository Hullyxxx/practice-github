<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_chitiet_nhapphelieu;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_chitiet_nhapphelieu_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_chitiet_nhapphelieu::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-chitiet-nhapphelieu.mt-chitiet-nhapphelieu-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_chitiet_nhapphelieu::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-chitiet-nhapphelieu.mt-chitiet-nhapphelieu-detail", $res);
    }
}
