<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Alert;
use Carbon\Carbon;
use App\User;
use DB;
use App\Emb;
class ReportController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:gfs');
    }


    public function index()
    {
        $fecha=Carbon::now();
        $pdf=PDF::loadView('reports.index',[
            'users'=>User::all()
        ],compact('fecha'));
        return $pdf->stream();
    }

    public function create()
    {
        $fecha=Carbon::now();
        $users=User::all();
        $pdf=PDF::loadView('reports.show',[
            'embs'=>Emb::all()
        ],
        compact('fecha','users'));
        return $pdf->stream();
    }

    public function store(Request $request)
    {
        if ($request->date1 > $request->date2)
        {
          return redirect()->route('avanzado')->with('info', 'Selecciones correctamente el parámetro de fechas');
        }
        else
        {
            if($request->criterio=='REGISTRO')
            {
                $table='embs';
            }
            else
            {
                $table='checklists';
            }

            $files = DB::table($table)->whereBetween('created_at', [$request->date1, $request->date2])->get();
            if($files=='[]')
            {
                return redirect()->route('avanzado')->with('info', 'No se encontro información dentro de estas fechas');
            }
            else
            {
                if($table=='embs')
                {
                    return view('reports.rangos',compact('files'));
                }
                else
                {
                    return view('reports.rangos2',compact('files'));
                }

            }
        }

        return $files;
    }


    public function show($id)
    {
        $pdf=PDF::loadView('reports.index',[
            'embs'=>Emb::all()
        ],compact('fecha'));
        return $pdf->stream();
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function avanzado()
    {
        return view('reports.avanzado');
    }
}
