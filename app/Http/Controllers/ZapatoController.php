<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zapato;

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
        $zapato->t33=$request->t33;
        $zapato->t34=$request->t34;
        $zapato->t35=$request->t35;
        $zapato->t36=$request->t36;
        $zapato->t37=$request->t37;
        $zapato->t38=$request->t38;
        $zapato->t39=$request->t39;
        $zapato->t40=$request->t40;
        $zapato->t41=$request->t41;
        $zapato->t42=$request->t42;
        $zapato->t43=$request->t43;
        $zapato->t44=$request->t44;
        $zapato->codigo=$request->codigo;
        $zapato->modelo=$request->modelo;
        $zapato->color=$request->color;
        $zapato->pt=$request->pt;
        if ($request->hasFile('avatar'))
        {
            $zapato->avatar=$request->file('avatar')->store('public/productos');
        }

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
