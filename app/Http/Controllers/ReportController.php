<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Alert;
use Carbon\Carbon;
use App\User;
use App\Venta;
use DB;
use App\Emb;
class ReportController extends Controller
{


    public function index()
    {
        $ventas=Venta::all();
        $suma=0;
        foreach ($ventas as $dinero) 
        {
            $suma=$suma+$dinero->ingreso;
        }
        $pdf=PDF::loadView('reports.index',compact('ventas','suma'));
        return $pdf->stream();

    }

    public function create()
    {
        $fecha=Carbon::now();
        $users=User::all();
        $pdf=PDF::loadView('reports.show',[
            'embs'=>Emb::all()
        ],
        compact('fecha','users'));
        return $pdf->stream();
    }

    public function store(Request $request)
    {
        return $request;
        
    }


    public function show($id)
    {
       
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function avanzado()
    {
        return view('reports.avanzado');
    }
}
