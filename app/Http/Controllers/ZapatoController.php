<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zapato;
use App\Insumo;

class ZapatoController extends Controller
{

    public function index()
    {
        return view('empresa.zapatos.index',[
            'zapatos'=>Zapato::all()
        ]);
    }

    public function create()
    {
         
        $id=auth()->user()->id;
        $insumos=Insumo::where('emp_id', $id)->get();
        foreach ($insumos as $insumo) 
        {
            $in[0]=$insumo->mat1;
            $in[1]=$insumo->mat2;
            $in[2]=$insumo->mat3;
            $in[3]=$insumo->mat4;
            $in[4]=$insumo->mat5;
            $in[5]=$insumo->mat6;
            $in[6]=$insumo->mat7;
            $in[7]=$insumo->mat8;
            $in[8]=$insumo->mat9;
            $in[9]=$insumo->mat10;
        }


        return view('empresa.zapatos.create', compact('in'));

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

        $i=0;
        foreach ($request->cuero as $cuero) 
        {
            $vcu[$i]=$cuero;
            $i=$i+1;
        }

        if (sizeof($vcu) <9) 
        {
            for ($i=sizeof($vcu); $i <= 9 ; $i++) 
            { 
                $vcu[$i]=null;
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

        $zapato->cu1=$vcu[0];
        $zapato->cu2=$vcu[1];
        $zapato->cu3=$vcu[2];
        $zapato->cu4=$vcu[3];
        $zapato->cu5=$vcu[4];
        $zapato->cu6=$vcu[5];
        $zapato->cu7=$vcu[6];
        $zapato->cu8=$vcu[7];
        $zapato->cu9=$vcu[8];

        $zapato->emp_id=$request->emp_id;


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
        $user = Zapato::findOrFail($id);

        return view('empresa.zapatos.edit',compact('user'));
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
