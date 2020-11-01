<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Alert;
use Image;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\CreateUserRequest;

class UsersController extends Controller
{


    public function index()
    {
        return view('empresa.datos');
    }

    public function create()
    {
       
        return view('users.create');
    }

    public function store(Request $request)
    {

        $user=New User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->usuario=$request->usuario;
        $user->infoempresa='vacio';
        $user->save();
        return redirect()->route('home');
    }

    public function show($id)
    {
       $user = User::findOrFail($id);
       return view('users.show',compact('user'));
    }

    // public function edit($id)
    // {
    //     $user = User::findOrFail($id);
    //     $this->authorize($user);
    //     $roles=Role::pluck('display_name','id');
    //     return view('users.edit',compact('user','roles'));
    // }

    // public function update(UpdateUserRequest $request, $id)
    // {

    //     $user = User::findOrFail($id);
    //     $this->authorize($user);
    //     if ($request->hasFile('avatar'))
    //     {
    //         $user->avatar=$request->file('avatar')->store('public/img/profilespics');
    //     }
    //     $user->update($request->only('name','email','state','lastname1','lastname2','rango'));
    //     $user->roles()->sync($request->roles);
    //     return redirect()->route('usuarios.index')->with('success', 'Datos Actualizados');
    // }

    // public function destroy($id)
    // {
    //     $user = User::findOrFail($id);
    //     $this->authorize($user);
    //     $user->delete();
    //     return redirect()->route('usuarios.index');
    // }

    // public function edi()
    // {
    //     return view('users.edi',[
    //         'users'=>User::all()
    //     ]);
    // }

    // public function reset($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->password ='admin';
    //     $user->remember_token ='1';
    //     $user->save();
    //     return redirect()->route('usuarios.index')->with('success', 'Datos Actualizados');
    // }

    // public function cambio()
    // {
    //     return view('users.password');
    // }

    // public function reset2(Request $request)
    // {
    //     if ($request->password == $request->password_confirmation)
    //     {
    //         $usuario=User::findOrFail($request->user_id);
    //         $usuario->password=$request->password;
    //         $usuario->save();
    //         return redirect()->route('usuarios.index')->with('info', 'Contraseña actualizada');
    //     }
    //     else
    //     {
    //         return redirect()->route('cambio')->with('info', 'Las contraseñas no coinciden');
    //     }

    // }
}