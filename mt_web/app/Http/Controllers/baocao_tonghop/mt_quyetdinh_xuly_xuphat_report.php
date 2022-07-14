<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_quyetdinh_xuly_xuphat;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_quyetdinh_xuly_xuphat_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_quyetdinh_xuly_xuphat::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-quyetdinh-xuly-xuphat.mt-quyetdinh-xuly-xuphat-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_quyetdinh_xuly_xuphat::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-quyetdinh-xuly-xuphat.mt-quyetdinh-xuly-xuphat-detail", $res);
    }
}
