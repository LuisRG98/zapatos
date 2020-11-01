<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<img style="float: right;" width="100" src="./img/escudo.png">
	<p style="font-size: 8">
		Dirección General de Intereses Marítimos, Fluviales, Lacustre y Marina Mercate <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unidad de Marica Mercante <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La Paz-Bolivia
	</p>
<br>
<hr>
</head>

<style>
	table.example-table, .example-table
	td { border: 1px solid black; border-collapse: collapse;font-size: 11; text-align: center;}
	th { border: 1px solid black; border-collapse: collapse;font-size: 11;}
</style>

<body>
<h1 style="text-align: center;">Reporte de Usuarios</h1>
<img src="./img/a.png" style="float: center; z-index: -1">
<div class="container">
	<table>
		<tr>
		<td><p> <b> Nombre:</b></td>
		<td>{{auth()->user()->name}} {{auth()->user()->lastname1}} {{auth()->user()->lastname2}}</p></td>
		</tr>
		<tr>
		<td><p> <b> Fecha:</b></p></td>
		<td>{{$fecha}}</td>
		</tr>
	</table>
</div>

<div class="container col-md-12">
<h3 style="text-align: left">Usuarios Activos</h3>
<table width="100%" class="example-table">
	<tr>
		<th style="background-color: #76adbc" width="5%">N°</th>
		<th style="background-color: #76adbc" width="30%">Nombre</th>
		<th style="background-color: #76adbc" width="35%">Correo</th>
		<th style="background-color: #76adbc" width="10%">Rango</th>
		<th style="background-color: #76adbc" width="10%">Fecha de Registro</th>
		<th style="background-color: #76adbc" width="10%">Rol</th>
	</tr>
	{{$i=0}}
	@foreach($users as $user)
	@if($user->state == "activo")
	<tr>
		<td>{{$i=$i+1}}</td>
		<td>{{$user->name}} {{$user->lastname1}} {{$user->lastname2}}</td>
		<td>{{$user->email}}</td>
		<td>{{$user->rango}}</td>
		<td>{{$user->created_at}}</td>
		<td>
			@foreach($user->roles as $role)
				{{$role->display_name}}<br>
			@endforeach
		</td>

	</tr>
	@endif
	@endforeach
</table>
<br>


<h3 style="text-align: left">Usuarios Inactivos</h3>
<table width="100%" class="example-table">
	<tr>
		<th style="background-color: #76adbc" width="5%">N°</th>
		<th style="background-color: #76adbc" width="30%">Nombre</th>
		<th style="background-color: #76adbc" width="35%">Correo</th>
		<th style="background-color: #76adbc" width="10%">Rango</th>
		<th style="background-color: #76adbc" width="10%">Fecha de Registro</th>
		<th style="background-color: #76adbc" width="10%">Rol</th>
	</tr>
	{{$i=0}}
	@foreach($users as $user)
	@if($user->state == "inactivo")
	<tr>
		<td>{{$i=$i+1}}</td>
		<td>{{$user->name}} {{$user->lastname1}} {{$user->lastname2}}</td>
		<td>{{$user->email}}</td>
		<td>{{$user->rango}}</td>
		<td>{{$user->created_at}}</td>
		<td>
			@foreach($user->roles as $role)
				{{$role->display_name}}<br>
			@endforeach
		</td>

	</tr>
	@endif
	@endforeach
</table>

</div>
</body>
<footer style="position: absolute;bottom: 0; width: 100%">
	<center>
	<label>_________________________</label><br>
	<label>{{auth()->user()->rango}}: {{auth()->user()->lastname1}} {{auth()->user()->lastname2}} {{auth()->user()->name}} </label>
	</center>
</footer>
</html>