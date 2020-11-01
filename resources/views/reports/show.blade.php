<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<img style="float: right;" width="100" src="./img/escudo.png">
	<p style="font-size: 8">
		Dirección General de Intereses Marítimos, Fluviales, Lacustre y Marina Mercate <br>
		Unidad de Marica Mercante <br>
		La Paz-Bolivia
	</p>
	<br>
<hr>
</head>

<style>
	table.example-table, .example-table
	td { border: 1px solid black; border-collapse: collapse; text-align: center;}
	th { border: 1px solid black; border-collapse: collapse; }
</style>


<body>

<h1 style="text-align: center;">Reportes de Embarcaciones</h1><br>
<img src="./img/a.png" style="float: center; z-index: -1">
<div class="container">
	<div class="row">
		<p> <b> Nombre:</b>{{auth()->user()->name}}</p>
		<p> <b> Fecha:</b>{{$fecha}}</p>
	</div>
</div>

<div class="container col-md-12">
<h3 style="text-align: left">Lista de Embarcaciones</h3>
<table width="100%" class="example-table">
	<tr>
		<th style="background-color: #76adbc">Número de Registro</th>
		<th style="background-color: #76adbc">Nombre de Embarcación</th>
		<th style="background-color: #76adbc">Encargado del Registro</th>
		<th style="background-color: #76adbc">Fecha de Registro</th>
	</tr>
	@foreach($embs as $emb)

	<tr>
		<td width="20%">{{$emb->id_emb}}</td>
		<td>{{$emb->nom_emb}}</td>
		@foreach($users as $user)
		@if($user->id==$emb->user_id)
		<td>{{$user->name}}</td>
		@endif
		@endforeach
		<td>{{$emb->created_at}}</td>

	</tr>

	@endforeach
</table>

</div>

</body>
</html>