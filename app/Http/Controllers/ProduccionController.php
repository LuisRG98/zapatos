<?php

namespace App\Http\Controllers;
use App\Zapato;
use App\Insumo;
use App\Produccion;

use Illuminate\Http\Request;

class ProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produccion.index',[
            'zapatos'=>Zapato::all()
        ]);
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
    public function store(Request $request)
    {

        $zapato=Zapato::FindOrFail($request->codigo);

        $tallas[0]=$zapato->t1;
        $tallas[1]=$zapato->t2;
        $tallas[2]=$zapato->t3;
        $tallas[3]=$zapato->t4;
        $tallas[4]=$zapato->t5;
        $tallas[5]=$zapato->t6;
        $tallas[6]=$zapato->t7;
        $tallas[7]=$zapato->t8;
        $tallas[8]=$zapato->t9;

        for ($i=0; $i <9 ; $i++) 
        { 
            if($tallas[$i]==$request->talla)
            {
                $t=$i;
            }
        }

        $cantidad[0]=$zapato->c1;
        $cantidad[1]=$zapato->c2;
        $cantidad[2]=$zapato->c3;
        $cantidad[3]=$zapato->c4;
        $cantidad[4]=$zapato->c5;
        $cantidad[5]=$zapato->c6;
        $cantidad[6]=$zapato->c7;
        $cantidad[7]=$zapato->c8;
        $cantidad[8]=$zapato->c9;

        $cuero[0]=$zapato->cu1;
        $cuero[1]=$zapato->cu2;
        $cuero[2]=$zapato->cu3;
        $cuero[3]=$zapato->cu4;
        $cuero[4]=$zapato->cu5;
        $cuero[5]=$zapato->cu6;
        $cuero[6]=$zapato->cu7;
        $cuero[7]=$zapato->cu8;
        $cuero[8]=$zapato->cu9;


        $c=$cantidad[$t];

        $emp_id=auth()->user()->emp_id;
        $insum=Insumo::where('emp_id',$emp_id)->get();

        foreach ($insum as $insu) 
        {

            $insumocant[0]=$insu->cant1;
            $insumocant[1]=$insu->cant2;
            $insumocant[2]=$insu->cant3;
            $insumocant[3]=$insu->cant4;
            $insumocant[4]=$insu->cant5;
            $insumocant[5]=$insu->cant6;
            $insumocant[6]=$insu->cant7;
            $insumocant[7]=$insu->cant8;
            $insumocant[8]=$insu->cant9;
            $insumocant[9]=$insu->cant10;

            $insumomat[0]=$insu->mat1;
            $insumomat[1]=$insu->mat2;
            $insumomat[2]=$insu->mat3;
            $insumomat[3]=$insu->mat4;
            $insumomat[4]=$insu->mat5;
            $insumomat[5]=$insu->mat6;
            $insumomat[6]=$insu->mat7;
            $insumomat[7]=$insu->mat8;
            $insumomat[8]=$insu->mat9;
            $insumomat[9]=$insu->mat10;

            $insumoid=$insu->id;

        }

        for ($i=0; $i <10 ; $i++) 
        { 
            if($insumomat[$i]==$cuero[$t])
            {
                $t2=$i;
            }
        }

        $insum=Insumo::FindOrFail($insumoid);

        for ($i=1; $i <=10 ; $i++) 
        { 
            $aux='mat'.$i;
            $aux2='cant'.$i;
            if($insum->$aux==$insumomat[$t2])
            {
                $insum->$aux2=($insum->$aux2)-($c*$request->cantidad);
                $insum->save();
            }
        }

        $p=new Produccion;
        $p->cantidad=$request->cantidad;
        $p->zapato_id=$request->codigo;
        $p->emp_id=auth()->user()->emp_id;
        $p->user_id=auth()->user()->id;
        $p->save();




        return redirect()->route('insumos.index')->with('success','Cantidad de Insumos Actualizada');


    }

    public function show($id)
    {
        $zapato=Zapato::FindOrFail($id);
        $tallas[0]=$zapato->t1;
        $tallas[1]=$zapato->t2;
        $tallas[2]=$zapato->t3;
        $tallas[3]=$zapato->t4;
        $tallas[4]=$zapato->t5;
        $tallas[5]=$zapato->t6;
        $tallas[6]=$zapato->t7;
        $tallas[7]=$zapato->t8;
        $tallas[8]=$zapato->t9;
        return view('produccion.store',compact('zapato','tallas'));
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
