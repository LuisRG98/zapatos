<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\User;
use Alert;

class EmpresaController extends Controller
{
    public function index()
    {
        return view('empresa.datos');
    }

    public function create()
    {
        return view('empresa.datos');
    }

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
        $id=auth()->user()->id;
    	$user=User::FindOrFail($id);

    	$user->infoempresa='Casi';
    	$user->emp_id=$emp_id;
    	$user->save();


    	return redirect()->route('insumos.create')->with('success','Empresa registrada, ahora registre sus insumos');

    }

    public function edit($id)
    {
        $empresa=Empresa::FindOrFail($id);
        return view('empresa.datos2',compact('empresa'));
    }
}
