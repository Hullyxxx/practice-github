<?php

namespace App\Http\Controllers\map;

use App\Http\Controllers\Controller;
use App\Models\map\dataZoomMap;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;
use PhpParser\Node\Expr\Cast\Object_;
use Illuminate\Support\Arr;

class mapGeomZoom extends Controller
{
    public function mapindex_id(Request $request)
    {
        //
        $id = $request->input('id');
        $geom = $request->input('geom');
        $name_table = $request -> input('name_table');
        $result = dataZoomMap::where('id', $id) -> where('name_table', $name_table)->first();
        $data = array('data' => $result,
            'geom' => $geom);
        return $data;
    }
}
