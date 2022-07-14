<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_diem_sinhvat;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_diem_sinhvat_report extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $result = mt_diem_sinhvat::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-diem-sinhvat.mt-diem-sinhvat-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_diem_sinhvat::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-diem-sinhvat.mt-diem-sinhvat-detail", $res);
    }
}
