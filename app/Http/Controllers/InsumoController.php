<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsumoController extends Controller
{
	public function create()
	{
    	return view('insumos.create');
    }
}