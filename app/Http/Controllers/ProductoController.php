<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zapato;

class ProductoController extends Controller
{
    public function index()
    {
    	$productos = array(
    		"/img/img2.jpg",
    		"/img/img2.jpg",
    		"/img/img2.jpg",
    		"/img/img1.jpg",
	    	"/img/logo.png",
	    	"/img/umsa.jpg",
	    	"/img/img1.jpg",
	    	"/img/logo.png",
	    	"/img/umsa.jpg",
    	);
    	    	
    	

    	return view('productos.index',compact('productos'));
    }
}
