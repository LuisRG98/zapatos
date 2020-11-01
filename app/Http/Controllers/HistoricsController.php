<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emb;
use App\File;
use App\Historic;
use App\Checklist;
use Alert;
use PDF;

class HistoricsController extends Controller
{
	public function index()
    {
        return view('embs.index',[
            'embs'=>Emb::all()
        ]);
    }

    public function show($id)
    {
        $emb = Emb::findOrFail($id);
        $idd = $emb->id_emb;
        $imgs = File::select('*')->where('emb_id',$id)->get();
        $i=0;
        foreach ($imgs as $file)
        {
            if ($file->extension=='jpeg'|| $file->extension=='jpg' || $file->extension=='png')
            {
                $v[$i]= $file->name;
                $i=$i+1;;
            }

        }
        $historic=Historic::select('*')->where('id_emb',$idd)->get();

        if($historic=='[]')
        {
        	return redirect()->route('historics.index')->with('info', 'No se encontro información historica');

        }
        else
        {
        	return view('historics.index',compact('historic','i','v','id'));
        }
    }

    public function edit($id)
    {
        $emb = Emb::findOrFail($id);
        $idd = $emb->id_emb;
        $imgs = File::select('*')->where('emb_id',$id)->get();
        $i=0;
        $v=null;
        foreach ($imgs as $file)
        {
            if ($file->extension=='jpeg'|| $file->extension=='jpg' || $file->extension=='png')
            {
                $v[$i]= $file->name;
                $i=$i+1;;
            }

        }

        $historic=Historic::select('*')->where('id_emb',$idd)->get();

        if($historic=='[]')
        {
            return redirect()->route('historics.index')->with('info', 'No se encontro información historica');

        }
        else
        {
            $pdf=PDF::loadView('historics.edit',compact('historic','i','v','id'));
            return $pdf->stream();

        }

    }
}
