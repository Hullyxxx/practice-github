<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_chatthai_nguyhai;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_chatthai_nguyhai_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_chatthai_nguyhai::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-chatthai-nguyhai.mt-chatthai-nguyhai-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_chatthai_nguyhai::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-chatthai-nguyhai.mt-chatthai-nguyhai-detail", $res);
    }
}
