<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StatController extends Controller
{
    function index()
    {
     $data = DB::table('embs')
       ->select(
        DB::raw('clase_tipo as clase'),
        DB::raw('count(*) as number'))
       ->groupBy('clase_tipo')
       ->get();
     $array[] = ['clase', 'Number'];


     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->clase, $value->number];
     }
     return view('stats.index')->with('clase', json_encode($array));
    }

    function index2()
    {
     $data = DB::table('embs')
       ->select(
        DB::raw('cuenca as cuenc'),
        DB::raw('count(*) as number'))
       ->groupBy('cuenca')
       ->get();
     $array[] = ['cuenc', 'Number'];


     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->cuenc, $value->number];
     }
     return view('stats.index')->with('cuenc', json_encode($array));
    }
}
