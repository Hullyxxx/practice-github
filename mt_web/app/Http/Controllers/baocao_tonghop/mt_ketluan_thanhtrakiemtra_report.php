<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_ketluan_thanhtrakiemtra;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_ketluan_thanhtrakiemtra_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_ketluan_thanhtrakiemtra::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-ketluan-thanhtrakiemtra.mt-ketluan-thanhtrakiemtra-search", $res);
    }
    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_ketluan_thanhtrakiemtra::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-ketluan-thanhtrakiemtra.mt-ketluan-thanhtrakiemtra-detail", $res);
    }
}
