<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\User;

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
    	$empresa->cant1=$vc[0];
    	$empresa->cant2=$vc[1];
    	$empresa->cant3=$vc[2];
    	$empresa->cant4=$vc[3];
    	$empresa->cant5=$vc[4];
    	$empresa->cant6=$vc[5];
    	$empresa->cant7=$vc[6];
    	$empresa->cant8=$vc[7];
    	$empresa->cant9=$vc[8];
    	$empresa->cant10=$vc[9];
    	$empresa->mat1=$vm[0];
    	$empresa->mat2=$vm[1];
    	$empresa->mat3=$vm[2];
    	$empresa->mat4=$vm[3];
    	$empresa->mat5=$vm[4];
    	$empresa->mat6=$vm[5];
    	$empresa->mat7=$vm[6];
    	$empresa->mat8=$vm[7];
    	$empresa->mat9=$vm[8];
    	$empresa->mat10=$vm[9];
    	$empresa->save();

    	$empresa=Empresa::select('*')->orderBy('created_at', 'desc')->limit(1)->get();
    	foreach ($empresa as $emp) 
    	{
    		$emp_id=$emp->id;
    	}

    	$user=User::FindOrFail($request->user_id);

    	$user->infoempresa='Lleno';
    	$user->emp_id=$emp_id;
    	$user->save();


    	return redirect()->route('home')->with('Empresa registrada');

    }
}
