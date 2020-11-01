@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3">
		<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('cambiar')}}" enctype="multipart/form-data">
			@csrf
			@method('POST')
			<h1 class="display-5">Cambiar contraseña</h1><hr>
			<div class="form-group required">
			<label for="password">Contraseña:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('password') is-invalid @enderror border-1"
				type="password"
				name="password"
				id="password">
				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>
			<div class="form-group required">
			<label for="password_confirmation">Confirmar Contraseña:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('password_confirmation') is-invalid @enderror border-1"
				type="password"
				name="password_confirmation"
				id="password_confirmation">
				@error('password_confirmation')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

			<input
			class="form-control bg-light shadow-sm 	@error('user_id') is-invalid @enderror border-1"
			type="hidden"
			name="user_id"
			id="user_id"
			readonly
			value="{{old('user_id',$emb->user_id ?? auth()->user()->id)}}">
			@error('id_emb')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror

			<button class="btn btn-primary btn-large btn-block">Guardar</button>
		</form>
	</div>
</div>
@endsection
