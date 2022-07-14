<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_khuvuc_baoton_sinhthai;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_khuvuc_baoton_sinhthai_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_khuvuc_baoton_sinhthai::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-khuvuc-baoton-sinhthai.mt-khuvuc-baoton-sinhthai-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_khuvuc_baoton_sinhthai::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-khuvuc-baoton-sinhthai.mt-khuvuc-baoton-sinhthai-detail", $res);
    }
}
