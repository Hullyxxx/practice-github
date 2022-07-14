<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_doanthanhtra_kiemtra;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_doanthanhtra_kiemtra_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_doanthanhtra_kiemtra::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-doanthanhtra-kiemtra.mt-doanthanhtra-kiemtra-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_doanthanhtra_kiemtra::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-doanthanhtra-kiemtra.mt-doanthanhtra-kiemtra-detail", $res);
    }
}
