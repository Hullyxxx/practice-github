<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_hopdong_thugom_xuly_chatthai_phatsinh;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_hopdong_thugom_xuly_chatthai_phatsinh_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_hopdong_thugom_xuly_chatthai_phatsinh::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-hopdong-thugom-xuly-chatthai-phatsinh.mt-hopdong-thugom-xuly-chatthai-phatsinh-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_hopdong_thugom_xuly_chatthai_phatsinh::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-hopdong-thugom-xuly-chatthai-phatsinh.mt-hopdong-thugom-xuly-chatthai-phatsinh-detail", $res);
    }
}
