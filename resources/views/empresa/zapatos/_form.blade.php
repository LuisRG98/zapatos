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
				@if($zapato->id)
					<label for="avatar">Foto de Producto:</label><br>
					<center>
					<img width="120" height="120" src="{{Storage::url($zapato->avatar)}}">
					<input
						type="file"
						name="avatar"
						id="avatar"
						value="{{old('avatar',$zapato->avatar ?? '')}}">
					</center>
				@else
					<label for="avatar">Foto de Producto:</label><br>
					<center>
					<img width="120" height="120" src="{{Storage::url('/productos/nuevo.jpg')}}">
					<input
						type="file"
						name="avatar"
						id="avatar"
						value="{{old('avatar',$zapato->avatar ?? '')}}">
					</center>
				@endif
			</div>


			<div class="row">
			<div class="col-2">
				<div class="form-group required">
				<label for="t33">33:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('t33') is-invalid @enderror border-1"
					type="number"
					name="t33"
					id="t33"
					value="{{old('t33',$zapato->t33 ?? '')}}">
					@error('t33')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
			</div>

			<div class="col-2">
				<div class="form-group required">
				<label for="t34">34:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('t34') is-invalid @enderror border-1"
					type="number"
					name="t34"
					id="t34"
					value="{{old('t34',$zapato->t34 ?? '')}}">
					@error('t34')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
			</div>

			<div class="col-2">
				<div class="form-group required">
				<label for="t35">35:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('t35') is-invalid @enderror border-1"
					type="number"
					name="t35"
					id="t35"
					value="{{old('t35',$zapato->t35 ?? '')}}">
					@error('t35')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
			</div>

			<div class="col-2">
				<div class="form-group required">
				<label for="t36">36:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('t36') is-invalid @enderror border-1"
					type="number"
					name="t36"
					id="t36"
					value="{{old('t36',$zapato->t36 ?? '')}}">
					@error('t36')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
			</div>

			<div class="col-2">
				<div class="form-group required">
				<label for="t37">37:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('t37') is-invalid @enderror border-1"
					type="number"
					name="t37"
					id="t37"
					value="{{old('t37',$zapato->t37 ?? '')}}">
					@error('t37')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
			</div>

			<div class="col-2">
				<div class="form-group required">
				<label for="t38">38:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('t38') is-invalid @enderror border-1"
					type="number"
					name="t38"
					id="t38"
					value="{{old('t38',$zapato->t38 ?? '')}}">
					@error('t38')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
			</div>
			</div>

			<div class="row">
			<div class="col-2">
				<div class="form-group required">
				<label for="t39">39:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('t39') is-invalid @enderror border-1"
					type="number"
					name="t39"
					id="t39"
					value="{{old('t39',$zapato->t39 ?? '')}}">
					@error('t39')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
			</div>

			<div class="col-2">
				<div class="form-group required">
				<label for="t40">40:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('t40') is-invalid @enderror border-1"
					type="number"
					name="t40"
					id="t40"
					value="{{old('t40',$zapato->t40 ?? '')}}">
					@error('t40')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
			</div>

			<div class="col-2">
				<div class="form-group required">
				<label for="t41">41:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('t41') is-invalid @enderror border-1"
					type="number"
					name="t41"
					id="t41"
					value="{{old('t41',$zapato->t41 ?? '')}}">
					@error('t41')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
			</div>

			<div class="col-2">
				<div class="form-group required">
				<label for="t42">42:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('t42') is-invalid @enderror border-1"
					type="number"
					name="t42"
					id="t42"
					value="{{old('t42',$zapato->t42 ?? '')}}">
					@error('t42')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
			</div>

			<div class="col-2">
				<div class="form-group required">
				<label for="t43">43:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('t43') is-invalid @enderror border-1"
					type="number"
					name="t43"
					id="t43"
					value="{{old('t43',$zapato->t43 ?? '')}}">
					@error('t43')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
			</div>

			<div class="col-2">
				<div class="form-group required">
				<label for="t44">44:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('t44') is-invalid @enderror border-1"
					type="number"
					name="t44"
					id="t44"
					value="{{old('t44',$zapato->t44 ?? '')}}">
					@error('t44')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
			</div>
			</div>

		</div>
		
		<div class="col-md-6">
			<div class="form-group required">
			<label for="codigo">Código:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('codigo') is-invalid @enderror border-1"
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
			<label for="modelo">Modelo:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('modelo') is-invalid @enderror border-1"
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

			<div class="form-group required">
			<label for="color">Color:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('color') is-invalid @enderror border-1"
				type="text"
				name="color"
				id="color"
				placeholder="Color..."
				value="{{old('color',$zapato->color ?? '')}}">
				@error('color')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group required">
			<label for="pt">P/T:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('pt') is-invalid @enderror border-1"
				type="text"
				name="pt"
				id="pt"
				placeholder="P/T..."
				value="{{old('pt',$zapato->pt ?? '')}}">
				@error('pt')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

		</div>

	</div>
</div>


<button class="btn btn-primary btn-large btn-block">Guardar</button>