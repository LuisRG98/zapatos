<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zapato;

class ZapatoController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('roles:admin',['except'=>['edit','updates']]);
    // }


    public function index()
    {
        return view('empresa.zapatos.index',[
            'zapatos'=>Zapato::all()
        ]);
    }

    public function create()
    {
        return view('empresa.zapatos.create');

    }

    public function store(Request $request)
    {
        
        $zapato=New Zapato;

        $zapato->codigo=$request->codigo;
        $zapato->modelo=$request->modelo;
        $zapato->color=$request->color;

        if ($request->hasFile('avatar'))
        {
            $zapato->avatar=$request->file('avatar')->store('public/productos');
        }



        $i=0;
        foreach ($request->talla as $cantidad) 
        {
            $vc[$i]=$cantidad;
            $i=$i+1;
        }

        if (sizeof($vc) <9) 
        {
            for ($i=sizeof($vc); $i <= 9 ; $i++) 
            { 
                $vc[$i]=0;
            }
        }

        $i=0;
        foreach ($request->cantidad as $cantidad) 
        {
            $vm[$i]=$cantidad;
            $i=$i+1;
        }

        if (sizeof($vm) <9) 
        {
            for ($i=sizeof($vm); $i <= 9 ; $i++) 
            { 
                $vm[$i]=0;
            }
        }


        $zapato->t1=$vc[0];
        $zapato->t2=$vc[1];
        $zapato->t3=$vc[2];
        $zapato->t4=$vc[3];
        $zapato->t5=$vc[4];
        $zapato->t6=$vc[5];
        $zapato->t7=$vc[6];
        $zapato->t8=$vc[7];
        $zapato->t9=$vc[8];

        $zapato->c1=$vm[0];
        $zapato->c2=$vm[1];
        $zapato->c3=$vm[2];
        $zapato->c4=$vm[3];
        $zapato->c5=$vm[4];
        $zapato->c6=$vm[5];
        $zapato->c7=$vm[6];
        $zapato->c8=$vm[7];
        $zapato->c9=$vm[8];
        $zapato->save();

        return redirect()->route('zapatos.index')->with('success', 'Producto Registrado');
    }

    public function show($id)
    {
       $zapato = Zapato::findOrFail($id);
       return view('empresa.zapatos.show',compact('zapato'));
    }

    public function edit($id)
    {
        $zapato = Zapato::findOrFail($id);

        return view('empresa.zapatos.edit',compact('zapato'));
    }

    public function update(Request $request, $id)
    {

        $zapato = User::findOrFail($id);
        if ($request->hasFile('avatar'))
        {
            $user->avatar=$request->file('avatar')->store('public/img/profilespics');
        }
        $zapato->update($request->only('name','email','state','lastname1','lastname2','rango'));
        return redirect()->route('usuarios.index')->with('success', 'Datos Actualizados');
    }

    public function destroy($id)
    {
        $zapato = Zapato::findOrFail($id);
        $zapato->delete();
        return redirect()->route('empresa.zapatos.index');
    }

    public function edi()
    {
        return view('empresa.zapatos.index',[
            'zapatos'=>Zapato::all()
        ]);
    }

}
