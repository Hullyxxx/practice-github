<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_baocao_congtac_bvmt;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_baocao_congtac_bvmt_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_baocao_congtac_bvmt::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-baocao-congtac-bvmt.mt-baocao-congtac-bvmt-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_baocao_congtac_bvmt::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-baocao-congtac-bvmt.mt-baocao-congtac-bvmt-detail", $res);
    }
}
