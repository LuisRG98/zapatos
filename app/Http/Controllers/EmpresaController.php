<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\User;

class EmpresaController extends Controller
{
    public function store(Request $request)
    {

    	$tamañoc=sizeof($request->cantidad);
    	$tamañom=sizeof($request->material);
    	
    	$i=0;
    	foreach ($request->material as $material) 
    	{
    		$vm[$i]=$material;
    		$i=$i+1;
    	}

    	$i=0;
    	foreach ($request->cantidad as $cantidad) 
    	{
    		$vc[$i]=$cantidad;
    		$i=$i+1;
    	}
    	

    	if (sizeof($vc) <9) 
    	{
    		for ($i=sizeof($vc); $i <= 9 ; $i++) 
	    	{ 
	    		$vc[$i]=0;
	    		$vm[$i]=null;
	    	}
    	}

    	$empresa=New Empresa;
    	$empresa->nombre=$request->nemp;
    	$empresa->nit=$request->nit;
    	$empresa->numero=$request->nref;
    	$empresa->sucursales=$request->sucursales;
    	$empresa->save();

    	$empresa=Empresa::select('*')->orderBy('created_at', 'desc')->limit(1)->get();
    	foreach ($empresa as $emp) 
    	{
    		$emp_id=$emp->id;
    	}

    	$user=User::FindOrFail($request->user_id);

    	$user->infoempresa='Casi';
    	$user->emp_id=$emp_id;
    	$user->save();


    	return redirect()->route('home')->with('Empresa registrada');

    }
}
