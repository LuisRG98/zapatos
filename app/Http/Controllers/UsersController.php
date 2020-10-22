<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store(Request $request)
    {
    	if ($request->usuario!='Empresario')
    	{
    		$infoempresa='no corresponde';
    	}
    	else
    	{
    		$infoempresa='vacio';
    	}
    	$user=New User;
    	$user->name=$request->name;
    	$user->email=$request->email;
    	$user->password=bcrypt($request->password);
    	$user->usuario=$request->usuario;
    	$user->infoempresa=$infoempresa;
    	$user->save();
    	return redirect()->route('home');

	}

	public function show($user)
	{
		$empresario=User::FindOrFail($user);
		if ($empresario->infoempresa=='vacio')
		{
			return view('empresa.datos');
		}
		// if ($user) {
		// 	# code...
		// }

	}

	public function index()
	{
		return view('empresa.datos');
	}
}
