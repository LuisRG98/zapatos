@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3">
		<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('usuarios.store')}}" enctype="multipart/form-data">
			<h1 class="display-5">Registrar Usuario</h1><hr>
			@include('users._form',['user'=> new App\User])
		</form>
	</div>
</div>
@endsection
