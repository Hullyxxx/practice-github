<?php

namespace App\Http\Controllers\baocao_tonghop;

use App\Http\Controllers\Controller;
use App\Models\baocao_tonghop\mt_chitietsodangki_chunguonthai;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;

class mt_chitietsodangki_chunguonthai_report extends Controller
{
    //
    public function search()
    {
        //
        $result = mt_chitietsodangki_chunguonthai::all();
        $res['result'] = $result;
        return view("baocao-tonghop.mt-chitietsodangki-chunguonthai.mt-chitietsodangki-chunguonthai-search", $res);
    }

    public function detail(Request $request)
    {
        //
        $id = $request->input('id');
        $result = mt_chitietsodangki_chunguonthai::find($id);
        $res['result'] = array($result);
        return view("baocao-tonghop.mt-chitietsodangki-chunguonthai.mt-chitietsodangki-chunguonthai-detail", $res);
    }
}
