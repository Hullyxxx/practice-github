<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_phi_bvmt;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_phi_bvmt_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_phi_bvmt::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-phi-bvmt.mt-phi-bvmt-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_phi_bvmt::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-phi-bvmt.mt-phi-bvmt-detail", $res);
    }
}
