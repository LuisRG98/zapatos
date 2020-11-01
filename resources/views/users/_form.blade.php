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
					<label for="avatar">Foto de Perfil:</label><br>
					<center>
					<img width="177px" src="{{Storage::url($user->avatar)}}">
					<input
						type="file"
						name="avatar"
						id="avatar"
						value="{{old('avatar',$user->avatar ?? '')}}">
					</center>
				@else
					<label for="avatar">Foto de Perfil:</label><br>
					<center>
					<img width="177px" src="{{Storage::url('/img/profilespics/user.png')}}">
					<input
						type="file"
						name="avatar"
						id="avatar"
						value="{{old('avatar',$user->avatar ?? '')}}">
					</center>
				@endif


			</div>
			<div class="form-group required">
			<label for="name">Nombre:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('name') is-invalid @enderror border-1"
				type="text"
				name="name"
				id="name"
				placeholder="Nombre..."
				value="{{old('name',$user->name ?? '')}}">
				@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group required">
			<label for="lastname1">Apellido Paterno:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('lastname1') is-invalid @enderror border-1"
				type="text"
				name="lastname1"
				id="lastname1"
				placeholder="Apellido Paterno..."
				value="{{old('lastname1',$user->lastname1 ?? '')}}">
				@error('lastname1')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group required">
			<label for="lastname2">Apellido Materno:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('lastname2') is-invalid @enderror border-1"
				type="text"
				name="lastname2"
				id="lastname2"
				placeholder="Apellido Materno..."
				value="{{old('lastname2',$user->lastname2 ?? '')}}">
				@error('lastname2')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

		</div>
		<div class="col-md-6">
			<div class="form-group required">
			<label for="state">Estado:</label>
			<select
				class="form-control bg-light shadow-sm 	@error('state') is-invalid @enderror border-1"
				name="state"
				id="state">
					<option value="activo" {{ old('state', $user->state) == 'activo' ? 'selected' : '' }}>activo</option>
					<option value="inactivo" {{ old('state', $user->state) == 'inactivo' ? 'selected' : '' }}>inactivo</option>
				@error('state')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
				</select>
			</div>

			<div class="form-group required">
			<label for="rango">Rango:</label>
			<select
				class="form-control bg-light shadow-sm 	@error('rango') is-invalid @enderror border-1"
				name="rango"
				id="rango">
				<option value="	Sargento Inicial" {{ old('state', $user->rango) == '	Sargento Inicial' ? 'selected' : '' }}>	Sargento Inicial</option>
				<option value="	Sargento Segundo" {{ old('state', $user->rango) == '	Sargento Segundo' ? 'selected' : '' }}>	Sargento Segundo</option>
				<option value="	Sargento Primero" {{ old('state', $user->rango) == '	Sargento Primero' ? 'selected' : '' }}>	Sargento Primero</option>
				<option value="Suboficial Inicial" {{ old('state', $user->rango) == 'Suboficial Inicial' ? 'selected' : '' }}>Suboficial Inicial</option>
				<option value="Suboficial Segundo" {{ old('state', $user->rango) == 'Suboficial Segundo' ? 'selected' : '' }}>Suboficial Segundo</option>
				<option value="	Suboficial Primero" {{ old('state', $user->rango) == '	Suboficial Primero' ? 'selected' : '' }}>	Suboficial Primero</option>
				<option value="	Suboficial Mayor" {{ old('state', $user->rango) == '	Suboficial Mayor' ? 'selected' : '' }}>	Suboficial Mayor</option>
				<option value="	Suboficial Master" {{ old('state', $user->rango) == '	Suboficial Master' ? 'selected' : '' }}>	Suboficial Master</option>
				<option value="Alférez" {{ old('state', $user->rango) == 'Alférez' ? 'selected' : '' }}>Alférez</option>
				<option value="Teniente de Fragata" {{ old('state', $user->rango) == 'Teniente de Fragata' ? 'selected' : '' }}>Teniente de Fragata</option>
				<option value="Teniente de Navío" {{ old('state', $user->rango) == 'Teniente de Navío' ? 'selected' : '' }}>Teniente de Navío</option>
				<option value="Capitán de Corbeta" {{ old('state', $user->rango) == 'Capitán de Corbeta' ? 'selected' : '' }}>Capitán de Corbeta</option>
				<option value="Capitán de Fragata" {{ old('state', $user->rango) == 'Capitán de Fragata' ? 'selected' : '' }}>Capitán de Fragata</option>
				<option value="Capitán de Navío" {{ old('state', $user->rango) == 'Capitán de Navío' ? 'selected' : '' }}>Capitán de Navío</option>
				<option value="Contraalmirante" {{ old('state', $user->rango) == 'Contraalmirante' ? 'selected' : '' }}>Contraalmirante</option>
				<option value="Vicealmirante" {{ old('state', $user->rango) == 'Vicealmirante' ? 'selected' : '' }}>Vicealmirante</option>
				<option value="Almirante" {{ old('state', $user->rango) == 'Almirante' ? 'selected' : '' }}>Almirante</option>

				@error('rango')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
				</select>
			</div>

			<div class="form-group required">
			<label for="email">Correo Electrónico:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('email') is-invalid @enderror border-1"
				type="email"
				name="email"
				id="email"
				placeholder="Correo Electrónico..."
				value="{{old('email',$user->email ?? '')}}">
				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>



			@unless($user->id)
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
				@endunless
		</div>

	</div>
</div>


<button class="btn btn-primary btn-large btn-block">Guardar</button>