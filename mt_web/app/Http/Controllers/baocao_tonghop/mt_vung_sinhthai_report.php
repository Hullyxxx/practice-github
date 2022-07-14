<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_vung_sinhthai;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_vung_sinhthai_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_vung_sinhthai::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-vung-sinhthai.mt-vung-sinhthai-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_vung_sinhthai::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-vung-sinhthai.mt-vung-sinhthai-detail", $res);
    }
}
