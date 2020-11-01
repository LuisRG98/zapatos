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
            <div class="col-md-5">
                <label for="nemp">Nombre de Empresa:</label>
                <input
                    class="form-control bg-light shadow-sm  @error('nemp') is-invalid @enderror border-1"
                    name="nemp"
                    id="nemp"
                    type="text"
                    value="{{old('nemp',$empresa->nemp ?? $reg ?? '')}}">
                    @error('nemp')
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

                <label for="nref">Número de Referencia:</label>
                <input
                    class="form-control bg-light shadow-sm  @error('nref') is-invalid @enderror border-1"
                    name="nref"
                    id="nref"
                    type="number"
                    value="{{old('nref',$empresa->nref ?? $reg ?? '')}}">
                    @error('nref')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    <br>

                <label for="sucursales">Sucursales:</label>
                <textarea
                    class="form-control bg-light shadow-sm  @error('sucursales') is-invalid @enderror border-1"
                    name="sucursales"
                    id="sucursales"
                    type="number"
                    value="{{old('sucursales',$empresa->sucursales ?? $reg ?? '')}}">
                    
                </textarea>
            </div>

            <div class="field_wrapper col-md-7">
                <div class="row">
                    <div class="col-5">
                        <label for="material[]">Sucursal</label>
                        <input 
                            class="form-control bg-light shadow-sm  @error('material[]') is-invalid @enderror border-1"
                            type="text" 
                            name="material[]" 
                            value=""/>
                            @error('material[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-5">
                        <label for="cantidad[]">Numero.</label>
                        <input 
                            class="form-control bg-light shadow-sm  @error('cantidad[]') is-invalid @enderror border-1"
                            type="number" 
                            name="cantidad[]" 
                            value=""/>
                            @error('cantidad[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-2">
                        <br>
                        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="./img/add-icon.png" width="20" height="20"></a>
                    </div>


                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                        <script type="text/javascript">
                        $(document).ready(function(){
                            var maxField = 10; //Input fields increment limitation
                            var addButton = $('.add_button'); //Add button selector
                            var wrapper = $('.field_wrapper'); //Input field wrapper
                            var fieldHTML = '<br><div class="row"><div class="col-5"><input class="form-control bg-light shadow-sm  @error('material[]') is-invalid @enderror border-1" type="text" name="material[]" value=""/></div><div class="col-5"><input class="form-control bg-light shadow-sm  @error('cantidad[]') is-invalid @enderror border-1" type="number" name="cantidad[]" value=""/></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="./img/remove-icon.png" width="20" height="20"></a></div>'; //New input field html 
                            var x = 1; //Initial field counter is 1
                            $(addButton).click(function(){ //Once add button is clicked
                                if(x < maxField){ //Check maximum number of input fields
                                    x++; //Increment field counter
                                    $(wrapper).append(fieldHTML); // Add field html
                                }
                            });
                            $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                                e.preventDefault();
                                $(this).parent('div').remove(); //Remove field html
                                x--; //Decrement field counter
                            });
                        });
                        </script>
                </div>
            </div>
            </div>  
        </div>
        <button class="btn btn-primary btn-large btn-block">Guardar</button>
        <br>
        </form>
    </div>
</div>
@endsection
