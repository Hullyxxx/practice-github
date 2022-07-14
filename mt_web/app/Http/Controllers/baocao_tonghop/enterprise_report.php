<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\enterprise;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class enterprise_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = enterprise::all();
        $res['result'] = $result;
        return view("baocao-tonghop.enterprise.enterprise-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = enterprise::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.enterprise.enterprise-detail", $res);
    }
}
