<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveEmbRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
    {
        return [
            'id_emb'=>'required',
            'cuenca'=>'required',
            'user_id'=>'required',
            'nom_prop'=>'required',
            'ant_prop'=>'nullable',
            'nom_emb'=>'required',
            'asc_cop'=>'nullable',
            'num_cert'=>'nullable',
            'clase_tipo'=>'required',
            'material'=>'required',
            'anio'=>'required',
            'serv_emb'=>'required',
            'base_op'=>'required',
            'matricula'=>'required',
            'eslora'=>'required',
            'manga'=>'required',
            'puntal'=>'required',
            'trb'=>'required',
            'trn'=>'required',
            'francobordo'=>'nullable',
            'men_pel'=>'required',
            'num_max'=>'nullable',
            'sist_prop'=>'required',
            'marca'=>'nullable',
            'num_mot'=>'nullable',
            'php'=>'nullable',
        ];
    }

    public function messages()
    {
        return [
            'nom_prop.required' => 'Se debe añadir el nombre del propietario',
            'nom_emb.required' => 'La embarcación debe tener un nombre',
            'clase_tipo.required'=>'La embarcacion debe de pertenecer a alguna clase o tipo',
            'material.required'=>'Se debe especificar el material de construccion de la embarcación',
            'anio.required' => 'Se debe especificar el año de construcción de la embarcación',
            'serv_emb.required' => 'Especifique el servicio que presta la embarcación',
            'base_op.required'=>'required',
            'matricula.required'=>'required',
            'eslora.required'=>'required',
            'manga.required'=>'required',
            'puntal.required'=>'required',
            'trb.required'=>'required',
            'trn.required'=>'required',
            'sist_prop.required'=>'required',

        ];
    }
}

