<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_giayphep_quanly_chatthainguyhai;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_giayphep_quanly_chatthainguyhai_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_giayphep_quanly_chatthainguyhai::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-giayphep-quanly-chatthainguyhai.mt-giayphep-quanly-chatthainguyhai-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_giayphep_quanly_chatthainguyhai::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-giayphep-quanly-chatthainguyhai.mt-giayphep-quanly-chatthainguyhai-detail", $res);
    }
}
