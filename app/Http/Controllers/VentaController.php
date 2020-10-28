<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zapato;

class VentaController extends Controller
{
    public function index()
    {
    	return view('empresa.ventas.index');
    }

    public function store(Request $request)
    {
    	switch ($request->talla) {
    		case 33:
    			$t='t33';
    			break;

    		case 34:
    			$t='t34';
    			break;

    		case 35:
    			$t='t35';
    			break;

    		case 36:
    			$t='t36';
    			break;

    		case 37:
    			$t='t37';
    			break;

    		case 38:
    			$t='t38';
    			break;

    		case 39:
    			$t='t39';
    			break;

    		case 40:
    			$t='t40';
    			break;

    		case 41:
    			$t='t41';
    			break;

    		case 42:
    			$t='t42';
    			break;

    		case 43:
    			$t='t43';
    			break;

    		case 44:
    			$t='t44';
    			break;

    	}
    	$zapato=Zapato::all();
    	$i=0;
    	foreach ($zapato as $z) 
    	{
    		if ($z->$t>0) 
    		{
    			$zapatos[$i]=$z;
    			$i=$i+1;
    		}
    		
    	}

        return view('empresa.zapatos.index',compact('zapatos'));

    }

    public function index2()
    {

    }
    
}
