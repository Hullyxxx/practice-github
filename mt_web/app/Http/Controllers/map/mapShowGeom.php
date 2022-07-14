<?php

namespace App\Http\Controllers\map;

use App\Http\Controllers\Controller;
use App\Models\map\dataMap;
use Illuminate\Http\Request;
use PhpParser\Error;
use Illuminate\Database\QueryException;
use PhpParser\Node\Expr\Cast\Object_;
use Illuminate\Support\Arr;

class mapShowGeom extends Controller
{
    public function map_id(Request $request)
    {
        $id = $request->input('id');
        $result = dataMap::all();
        $data = array(
          "type" => "FeatureCollection",
          "features" => array()
        );
        $test_array = array();
        foreach ($result as $item)
        {
            $data["features"][] = json_decode($item -> geometry);
        }
        return $data;
    }
}
