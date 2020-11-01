<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualController extends Controller
{
    public function admin()
    {
    	return response()->file(Storage_path('app/public/manuales/ADMIN.pdf'));
    }

    public function gfs()
    {
    	return response()->file(Storage_path('app/public/manuales/GFS.pdf'));
    }

    public function inps()
    {
    	return response()->file(Storage_path('app/public/manuales/INSP.pdf'));
    }
}
