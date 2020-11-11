@extends('layout')

@section('content')

<div class="container">
    <div style="overflow-x:auto;" class="mx-auto mb-3">
        <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('empresas.store')}}">
            <h1 class="display-5">Registrar tu Empresa</h1><hr>
            @csrf
            @csrf

        <style>
        .required label:after {
            color: #e32;
            content: ' *';
            display:inline;
        }
        </style>

        <input
            class="form-control bg-light shadow-sm  @error('user_id') is-invalid @enderror border-1"
            type="hidden"
            name="user_id"
            id="user_id"
            readonly
            value="{{old('user_id',$empresa->user_id ?? auth()->user()->id)}}">



        <div class="form-group col-md-12 required">
            <div class="row">
            <div class="col-md-6">
                <label for="nemp">Nombre de Empresa:</label>
                <input
                    class="form-control bg-light shadow-sm  @error('nemp') is-invalid @enderror border-1"
                    name="nombre"
                    id="nombre"
                    type="text"
                    value="{{old('nombre',$empresa->nombre ?? $reg ?? '')}}">
                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    <br>
                    
                <label for="nit">NIT:</label>
                <input
                    class="form-control bg-light shadow-sm  @error('nit') is-invalid @enderror border-1"
                    name="nit"
                    id="nit"
                    type="number"
                    value="{{old('nit',$empresa->nit ?? $reg ?? '')}}">
                    @error('nit')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    <br>

            </div>

            <div class="col-md-6">

                <label for="numero">Número de Referencia:</label>
                <input
                    class="form-control bg-light shadow-sm  @error('numero') is-invalid @enderror border-1"
                    name="numero"
                    id="numero"
                    type="number"
                    value="{{old('numero',$empresa->numero ?? $reg ?? '')}}">
                    @error('numero')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    <br>

                <label for="sucursales">Sucursales:</label>
                <input
                    class="form-control bg-light shadow-sm  @error('sucursales') is-invalid @enderror border-1"
                    name="sucursales"
                    id="sucursales"
                    value="{{old('sucursales',$empresa->sucursales ?? $reg ?? '')}}">

            </div>
            </div>  
        </div>
        <button class="btn btn-primary btn-large btn-block">Guardar</button>
        <br>
        </form>
    </div>
</div>
@endsection
