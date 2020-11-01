<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zapato;
use App\Venta;

class VentaController extends Controller
{
    public function index()
    {
    	return view('empresa.ventas.index');
    }

    public function store(Request $request)
    {
        $venta=new Venta;

        $venta->codigo=null;
        $venta->talla=$request->talla;
        $venta->monto=$request->monto;
        $venta->cantidad=$request->cantidad;
        $venta->ingreso=$request->cantidad*$request->monto;
        $venta->save();

        return view('/home');

    }

    public function create()
    {
        $ventas=Venta::all();
        $suma=0;
        foreach ($ventas as $dinero) 
        {
            $suma=$suma+$dinero->ingreso;
        }
       return view('empresa.ventas.create',compact('ventas','suma'));
    }
    
}
