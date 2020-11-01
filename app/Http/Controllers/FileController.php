<?php

namespace App\Http\Controllers;

use Check;
use App\File;
use Storage;
use Illuminate\Http\Request;
use phpseclib\Crypt\RSA as Crypt_RSA;
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('files.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->hasFile('file'))
        {
            foreach ($request->file as $file)
            {
                $filename=$file->getClientOriginalName();
                $filesize=$file->extension();
                $file->storeAs('public',$filename);

                $rsa = new Crypt_RSA();
                $rsa->setPrivateKeyFormat(Crypt_RSA::PRIVATE_FORMAT_PKCS1);
                $rsa->setPublicKeyFormat(Crypt_RSA::PUBLIC_FORMAT_PKCS1);
                extract($rsa->createKey());

                $fileModel=new File;
                $fileModel->name= $filename;
                $fileModel->extension= $filesize;
                $fileModel->emb_id= $request->emb_id;
                $fileModel->privatekey =md5($privatekey);
                $fileModel->publickey  =md5($publickey);
                $fileModel->save();
            }
        }
        return redirect()->route('home')->with('success', 'Archivo Almacenado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
