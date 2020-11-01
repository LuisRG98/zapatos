@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                     <h1>
                        <b>Bienvenido:</b>
                        {{auth()->user()->rango}}
                        {{auth()->user()->name}}
                        {{auth()->user()->lastname1}}
                    </p></h1>

                    {{ __('Iniciaste Sesión!') }}
                     @if( auth()->user()->state=='inactivo')
                     <p>Su cuenta actualmente no esta activa, contactese con Unidad de Marina Mercante</p>
                     @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
