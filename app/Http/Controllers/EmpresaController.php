<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\User;

class EmpresaController extends Controller
{
    public function store(Request $request)
    {



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
