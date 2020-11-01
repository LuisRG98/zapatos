@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3 bg-white shadow rounded py-3 px-4">
		<h1  class="display-5">Lista de Usuarios</h1><hr>
		@include('users._users')
	</div>

</div>
@endsection