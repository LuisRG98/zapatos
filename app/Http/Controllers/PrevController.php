<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Emb;

class PrevController extends Controller
{
    public function index()
    {
        return view('embs.preview');
    }
    public function store(Request $request)
    {
        if ($request->input('r1')=='si' && $request->input('r2')=='si' && $request->input('r3')=='si')
        {
            $anio = (Carbon::now()->year)%100;
            $co=Emb::orderBy('id', 'desc')
                   ->take(1)
                   ->get();
            $co=$co->pluck('id')->implode(', ')+1;
            $mes = (Carbon::now()->month);
            if ($mes<10) $mes='0'.$mes;
            $reg=$request->cuenca.'-'.$anio.''.$mes.''.$co;
            $cuen=$request->cuenca;
        return view('embs.create',compact('reg','cuen'));
        }
       else
       {
            return redirect()->route('embs.index')->with('info','No se cumplen con todos los requisitos');
       }

    }
}
