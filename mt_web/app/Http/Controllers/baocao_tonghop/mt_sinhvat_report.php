<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_sinhvat;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_sinhvat_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_sinhvat::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-sinhvat.mt-sinhvat-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_sinhvat::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-sinhvat.mt-sinhvat-detail", $res);
    }
}
