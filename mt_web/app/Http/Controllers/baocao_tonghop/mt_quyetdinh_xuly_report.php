<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_quyetdinh_xuly;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_quyetdinh_xuly_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_quyetdinh_xuly::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-quyetdinh-xuly.mt-quyetdinh-xuly-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_quyetdinh_xuly::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-quyetdinh-xuly.mt-quyetdinh-xuly-detail", $res);
    }
}
