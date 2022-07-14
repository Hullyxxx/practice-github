<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_duan;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_duan_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_duan::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-duan.mt-duan-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_duan::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-duan.mt-duan-detail", $res);
    }
}
