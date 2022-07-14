<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_thietbi_quanly;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_thietbi_quanly_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_thietbi_quanly::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-thietbi-quanly.mt-thietbi-quanly-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_thietbi_quanly::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-thietbi-quanly.mt-thietbi-quanly-detail", $res);
    }
}
