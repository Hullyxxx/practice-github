<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_coso_onmt;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_coso_onmt_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_coso_onmt::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-coso-onmt.mt-coso-onmt-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_coso_onmt::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-coso-onmt.mt-coso-onmt-detail", $res);
    }
}
