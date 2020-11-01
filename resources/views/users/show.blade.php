@extends('layout')

@section('content')
<div style="overflow-x:auto;" class="div-sm mx-auto mb-3 bg-white shadow rounded py-3 px-4">
	<h1>Datos de Usuario</h1><hr>
	<div class="container col-md-12">
		<div class="row">
		<div class="col-md-4">
			<table class="table table-borderless table-sm">
				<tr>
					<th>Id:</th>
					<td>{{$user->id}}</td>
				</tr>
				<tr>
					<th>Nombre:</th>
					<td>{{$user->name}} {{$user->lastname1}} {{$user->lastname2}}</td>
				</tr>
				<tr>
					<th>Email:</th>
					<td>{{$user->email}}</td>
				</tr>
				<tr>
					<th>Rango:</th>
					<td>{{$user->rango}}</td>
				</tr>
			</table>
		</div>
		<div class="col-md-4">
			<table class="table table-borderless table-sm">
				<tr>
					<th>Estado:</th>
					<td>{{$user->state}}</td>
				</tr>
				<tr>
					<th>Rol(es):</th>
					<td>
						@foreach($user->roles as $role)
						{{$role->display_name}}
						<br>
						@endforeach
					</td>
				</tr>
			</table>
		</div>
		<div class="col-md-4">
			<label>Foto de Perfil:</label><br>
			@if($user->id)
					<center>
					<img width="177px" src="{{Storage::url($user->avatar)}}">
					</center>
				@else
					<center>
					<img width="177px" src="{{Storage::url('/img/profilespics/user.png')}}">
					</center>
				@endif
		</div>
		</div>
	</div>


</div>
<script type="text/javascript">
    $(document).ready( function () {
    $('table').DataTable();
    } );
  </script>
@endsection
