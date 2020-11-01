<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use DB;
use Illuminate\Support\Facades\Storage;
class ArchivosController extends Controller
{

    public function index()
    {
        return response()->file(Storage_path('app/public/a.png'));
    }

    public function create()
    {

    }


    public function store(Request $request)
    {
        $id= $request->search;
        $files = DB::table('files')->where('publickey', $id)->get();
        foreach ($files as $file)
        {
           return response()->file(Storage_path('app/public/'.$file->publickey.'.pdf'));
       }
    }


    public function show($id)
    {
        $files = DB::table('files')->where('emb_id', $id)->get();
        return view('archivos.show',compact('files'));
    }


    public function edit($id)
    {
        return response()->file(Storage_path('app/public/'.$id));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {

    }
}
