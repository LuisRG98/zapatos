<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SucursalController extends Controller
{
	public function create()
	{
		return view('sucursales.create');
	}

    public function store(Request $request)
    {

    	$id=auth()->user()->emp_id;
        $user=New User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->usuario=$request->usuario;
        $user->emp_id=$id;
        $user->infoempresa='Lleno';
        $user->save();
        return redirect()->route('login');
    }
}
