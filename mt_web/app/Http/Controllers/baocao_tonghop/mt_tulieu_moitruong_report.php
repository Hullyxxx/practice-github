<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_tulieu_moitruong;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_tulieu_moitruong_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_tulieu_moitruong::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-tulieu-moitruong.mt-tulieu-moitruong-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_tulieu_moitruong::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-tulieu-moitruong.mt-tulieu-moitruong-detail", $res);
    }
}
