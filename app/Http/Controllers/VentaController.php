<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zapato;
use App\Venta;
use App\Produccion;
use PDF;

class VentaController extends Controller
{
    public function index()
    {
    	// return view('empresa.ventas.index');
        return view('empresa.ventas.listado',[
            'zapatos'=>Zapato::all()
        ]);
    }

    public function store(Request $request)
    {
        $venta=new Venta;

        $venta->codigo=$request->codigo;
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
    
    public function show($id)
    {
        $zapato=Zapato::findOrFail($id);
        $tallas[0]=$zapato->t1;
        $tallas[1]=$zapato->t2;
        $tallas[2]=$zapato->t3;
        $tallas[3]=$zapato->t4;
        $tallas[4]=$zapato->t5;
        $tallas[5]=$zapato->t6;
        $tallas[6]=$zapato->t7;
        $tallas[7]=$zapato->t8;
        $tallas[8]=$zapato->t9;
        $prod=Produccion::where('zapato_id', $id)->get();
        foreach ($prod as $cant) 
        {
            $cantidad=$cant->cantidad;
        }
        return view('empresa.ventas.index',compact('zapato','tallas','cantidad'));
    }
}
