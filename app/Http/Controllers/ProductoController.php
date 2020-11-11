<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zapato;
use App\Empresa;
use Alert;

class ProductoController extends Controller
{
    public function index()
    {
        $productos=Zapato::all();
        if($productos=='[]')
        {
            return redirect()->back()->with('info','No existen productos disponibles');
        }
        else
        {
    	   return view('productos.index',compact('productos'));
        
        }
    }
    public function show($id)
    {
        $zapato=Zapato::FindOrFail($id);
        $empresa=Empresa::FindOrFail($zapato->emp_id);
         return view('productos.show',compact('zapato'));
    }
}
