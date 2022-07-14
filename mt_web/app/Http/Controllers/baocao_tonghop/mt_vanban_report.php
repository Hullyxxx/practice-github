<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_vanban;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_vanban_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_vanban::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-vanban.mt-vanban-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_vanban::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-vanban.mt-vanban-detail", $res);
    }
}
