@csrf
<style>
.required label:after {
    color: #e32;
    content: ' *';
    display:inline; 
}
</style>

<div class="container col-md-12">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">

				@if($user->id)
					<label for="avatar">Foto de Prodcuto:</label><br>
					<center>
					<img width="187px" src="{{Storage::url($zapato->avatar)}}">
					<input
						type="file"
						name="avatar"
						id="avatar"
						value="{{old('avatar',$zapato->avatar ?? '')}}">
					</center>
				@else
					<label for="avatar">Foto de Prodcuto:</label><br>
					<center>
					<img width="197px" src="{{Storage::url('/nuevo.jpg')}}">
					<input
						type="file"
						name="avatar"
						id="avatar"
						value="{{old('avatar',$zapato->avatar ?? '')}}">
					</center>
				@endif


			</div>
			<div class="form-group required">
			<label for="codigo">Código:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('name') is-invalid @enderror border-1"
				type="text"
				name="codigo"
				id="codigo"
				placeholder="Código..."
				value="{{old('codigo',$zapato->codigo ?? '')}}">
				@error('codigo')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group required">
			<label for="modelo ">Modelo:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('name') is-invalid @enderror border-1"
				type="text"
				name="modelo"
				id="modelo"
				placeholder="Código..."
				value="{{old('modelo',$zapato->modelo ?? '')}}">
				@error('modelo')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

		<input 
            class="form-control bg-light shadow-sm  border-1"
            hidden="hidden" 
            name="emp_id" 
            value="{{auth()->user()->emp_id}}"/>


		</div>
		<div class="col-md-6">
			<div class="form-group required">
			<label for="color">Color:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('name') is-invalid @enderror border-1"
				type="text"
				name="color"
				id="color"
				placeholder="Código..."
				value="{{old('color',$zapato->color ?? '')}}">
				@error('color')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>




                <div class="row field_wrapper">
                    <div class="col-3">
                        <label for="talla[]">Talla</label>
                        <input 
                            class="form-control bg-light shadow-sm  @error('talla[]') is-invalid @enderror border-1"
                            type="text" 
                            name="talla[]" 
                            value=""/>
                            @error('talla[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                    </div>



                     <div class="col-3">
                        <label for="cuero[]">Tipo de Cuero</label>
                            <select
	                            class="form-control bg-light shadow-sm"
	                            name="cuero[]">
	                            @foreach($in as $insumo)
	                            	@if($insumo!=null)
		                            	<option>{{$insumo}}</option>
		                            @endif
	                            @endforeach
                            </select>
                    </div>
                    <div class="col-5">
                        <label for="cantidad[]">Cant. de Cuero x par.</label>
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

                    <div class="col-1">
                        <br>
                        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="/img/add-icon.png" width="20" height="20"></a>
                    </div>



                    </div>
                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                        <script type="text/javascript">
                        $(document).ready(function(){
                            var maxField = 10; //Input fields increment limitation
                            var addButton = $('.add_button'); //Add button selector
                            var wrapper = $('.field_wrapper'); //Input field wrapper
                            var fieldHTML = '<div class=" container form-group required py-1 mb-0"><div class="row field_wrapper"><div class="col-3"><input class="form-control bg-light shadow-sm  @error('talla[]') is-invalid @enderror border-1" type="text" name="talla[]" value=""/></div><div class="col-3"><select class="form-control bg-light shadow-sm" name="cuero[]">@foreach($in as $insumo)@if($insumo!=null)<option>{{$insumo}}</option> @endif @endforeach </select></div><div class="col-5"><input class="form-control bg-light shadow-sm  @error('cantidad[]') is-invalid @enderror border-1" type="number" name="cantidad[]" value=""/></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="/img/remove-icon.png" width="20" height="20"></a></div></div>'; //New input field html 
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


<button class="btn btn-primary btn-large btn-block">Guardar</button>