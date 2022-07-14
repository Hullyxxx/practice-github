<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_so_dangki_nguonchuthai;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_so_dangki_nguonchuthai_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_so_dangki_nguonchuthai::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-so-dangki-nguonchuthai.mt-so-dangki-nguonchuthai-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_so_dangki_nguonchuthai::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-so-dangki-nguonchuthai.mt-so-dangki-nguonchuthai-detail", $res);
    }
}
