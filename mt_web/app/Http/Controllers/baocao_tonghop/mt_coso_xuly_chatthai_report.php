<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_coso_xuly_chatthai;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_coso_xuly_chatthai_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_coso_xuly_chatthai::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-coso-xuly-chatthai.mt-coso-xuly-chatthai-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_coso_xuly_chatthai::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-coso-xuly-chatthai.mt-coso-xuly-chatthai-detail", $res);
    }
}
