<?php

namespace App\Http\Controllers\tim_kiem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class get_search extends Controller
{
    //
    public function index(request $request)
    {
        $in_query = $request->input('in_query');
        $in_rank = $request->input('in_rank');
        $result = DB::select("select a.* from (select * from view_full_text_search where fts @@ to_tsquery('$in_query'))
                            as a ORDER BY ts_rank(fts, to_tsquery('$in_rank')) DESC");
        return $result;
    }

    public function searchfilter(request $request)
    {
        $input_search = $request->input('input_search');
        $result = DB::select("select * from view_full_text_search where $input_search");
        return $result;
    }
}
