<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'avatar'=>'image',
            'name'=>'required',
            'lastname1'=>'required',
            'lastname2'=>'required',
            'rango'=>'required',
            'email'=>'required|email|unique:users,email',
            'state'=>'required',
            'password'=>'required|confirmed',
            'roles'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ingrese un nombre',
            'lastname1.required' => 'Ingrese el apellido paterno',
            'lastname2.required' => 'Ingrese el apellido materno',
            'rango.required' => 'Defina su rango',
            'email.email' => 'Introduzca un correo electónico',
            'email.required' => 'Introduzca un correo electónico',
            
        ];
    }
}
