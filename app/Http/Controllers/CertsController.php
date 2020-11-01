<?php

namespace App\Http\Controllers;
use PDF;
use QrCode;
use Storage;
use Illuminate\Http\Request;
use App\User;
use App\Emb;
use phpseclib\Crypt\RSA as Crypt_RSA;

class CertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rsa = new Crypt_RSA();
        $rsa->setPrivateKeyFormat(Crypt_RSA::PRIVATE_FORMAT_PKCS1);
        $rsa->setPublicKeyFormat(Crypt_RSA::PUBLIC_FORMAT_PKCS1);
        define('CRYPT_RSA_EXPONENT', 65537);
        define('CRYPT_RSA_SMALLEST_PRIME', 64);
        extract($rsa->createKey());

        $q= QrCode::format('png')
                    ->size(200)->errorCorrection('H')
                    ->generate(md5($publickey));

        $output_file = '/public/img/img.png';
        Storage::disk('local')->put($output_file, $q);
        $pdf=PDF::loadView('certs.seguridad',[
            'users'=>User::all()
        ]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emb = Emb::findOrFail($id);
        $rsa = new Crypt_RSA();
                $rsa->setPrivateKeyFormat(Crypt_RSA::PRIVATE_FORMAT_PKCS1);
                $rsa->setPublicKeyFormat(Crypt_RSA::PUBLIC_FORMAT_PKCS1);
                define('CRYPT_RSA_EXPONENT', 65537);
                define('CRYPT_RSA_SMALLEST_PRIME', 64);
                extract($rsa->createKey());

        $q= QrCode::format('png')
                    ->size(200)->errorCorrection('H')
                    ->generate(md5($publickey));

        $output_file = '/public/img/img.png';
        Storage::disk('local')->put($output_file, $q);
        $pdf=PDF::loadView('certs.seguridad',compact('emb'));
        return $pdf->stream();
    }

    public function edit($id)
    {
        $emb = Emb::findOrFail($id);
        $rsa = new Crypt_RSA();
        $rsa->setPrivateKeyFormat(Crypt_RSA::PRIVATE_FORMAT_PKCS1);
        $rsa->setPublicKeyFormat(Crypt_RSA::PUBLIC_FORMAT_PKCS1);
        define('CRYPT_RSA_EXPONENT', 65537);
        define('CRYPT_RSA_SMALLEST_PRIME', 64);
        extract($rsa->createKey());

        $q= QrCode::format('png')
                    ->size(200)->errorCorrection('H')
                    ->generate(md5($publickey));

        $output_file = '/public/img/img.png';
        Storage::disk('local')->put($output_file, $q);
        $pdf=PDF::loadView('certs.registro',compact('emb'));
        return $pdf->stream();
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
