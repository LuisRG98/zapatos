<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carnet;
use Carbon\Carbon;

class CarnetController extends Controller
{
    public function index()
    {
    	return view('carnet.index',[
            'carnets'=>Carnet::all()
        ]);
    }

    public function create()
    {
    	return view('carnet.create');
    }

    public function store(Request $request)
    {
    	$id=Carnet::all();
    	if ($id=="[]") 
    	{
    		$aux=1;
    	}
    	else
    	{
    		foreach ($id as $ids) 
    		{
    			$aux=$ids->id;
    			$aux=$aux+1;

    		}
    	}
    	$corre='0';
    	$corre1='0';
    	if(strlen($aux)<6)
    	{
    		for ($i=1; $i <6-strlen($aux) ; $i++) 
    		{
    			$corre=$corre.$corre1;
    		}
    	}

    	$anio = (Carbon::now()->year)%100;
    	if ($request->sector=="lacustre") 
    	{
    		$code='LE-'.$anio.'-'.$corre.$aux;
    	}
    	elseif ($request->sector=="fluvial") 
    	{
    		$code='FE-'.$anio.'-'.$corre.$aux;
    	}

    	
    	$request->codigo=$code;

    	$user=Carnet::create( $request->all());
        if ($request->hasFile('avatar'))
        {
            $user->avatar=$request->file('avatar')->store('public/img/profilespics');
        }
        return redirect()->route('carnet.index')->with('success', 'Carnet Registrado');

    }

}
