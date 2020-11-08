<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insumo;
use App\User;
use App\Zapato;
use Alert;

class InsumoController extends Controller
{
    public function index()
    {
        $id=auth()->user()->emp_id;
        $insumos=Insumo::where('emp_id',$id)->get();
        foreach ($insumos as $insumo) 
        {
            $id=$insumo->id;
        }
        $insumos=Insumo::FindOrFail($id);

        $vc[0]=$insumo->cant1;
        $vc[1]=$insumo->cant2;
        $vc[2]=$insumo->cant3;
        $vc[3]=$insumo->cant4;
        $vc[4]=$insumo->cant5;
        $vc[5]=$insumo->cant6;
        $vc[6]=$insumo->cant7;
        $vc[7]=$insumo->cant8;
        $vc[8]=$insumo->cant9;
        $vc[9]=$insumo->cant10;
        $vm[0]=$insumo->mat1;
        $vm[1]=$insumo->mat2;
        $vm[2]=$insumo->mat3;
        $vm[3]=$insumo->mat4;
        $vm[4]=$insumo->mat5;
        $vm[5]=$insumo->mat6;
        $vm[6]=$insumo->mat7;
        $vm[7]=$insumo->mat8;
        $vm[8]=$insumo->mat9;
        $vm[9]=$insumo->mat10;

        return view('insumos.index',compact('vc','vm'));
    }

	public function create()
	{
    	return view('insumos.create');
    }

     public function store(Request $request)
    {

    	$tamañoc=sizeof($request->cantidad);
    	$tamañom=sizeof($request->tipo);
    	
    	$i=0;
    	foreach ($request->tipo as $tipo) 
    	{
    		$vm[$i]=$tipo;
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

    	$insumo=New Insumo;
    	$insumo->cant1=$vc[0];
    	$insumo->cant2=$vc[1];
    	$insumo->cant3=$vc[2];
    	$insumo->cant4=$vc[3];
    	$insumo->cant5=$vc[4];
    	$insumo->cant6=$vc[5];
    	$insumo->cant7=$vc[6];
    	$insumo->cant8=$vc[7];
    	$insumo->cant9=$vc[8];
    	$insumo->cant10=$vc[9];
    	$insumo->mat1=$vm[0];
    	$insumo->mat2=$vm[1];
    	$insumo->mat3=$vm[2];
    	$insumo->mat4=$vm[3];
    	$insumo->mat5=$vm[4];
    	$insumo->mat6=$vm[5];
    	$insumo->mat7=$vm[6];
    	$insumo->mat8=$vm[7];
    	$insumo->mat9=$vm[8];
    	$insumo->mat10=$vm[9];
    	$insumo->emp_id=$request->emp_id;
    	$insumo->save();


    	$user=User::FindOrFail($request->user_id);

    	$user->infoempresa='Lleno';
    	$user->emp_id=$request->emp_id;
    	$user->save();


    	return redirect()->route('home')->with('success','Insumo(s) Registrado(s)');

    }

    public function show($id)
    {
        

    }
}
