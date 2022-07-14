<?php

namespace App\Http\Controllers\map;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mapSearchGeom extends Controller
{
    public function index_search(request $request)
    {
        $in_query = $request->input('in_query');
        $in_rank = $request->input('in_rank');
        $result = DB::select("select a.* from (select * from view_all_data_map where key_search @@ to_tsquery('$in_query'))
                            as a ORDER BY ts_rank(key_search, to_tsquery('$in_rank')) DESC");
        return $result;
    }
}
