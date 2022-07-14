<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_quyetdinh_didoi;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_quyetdinh_didoi_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_quyetdinh_didoi::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-quyetdinh-didoi.mt-quyetdinh-didoi-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_quyetdinh_didoi::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-quyetdinh-didoi.mt-quyetdinh-didoi-detail", $res);
    }
}
