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
</head>

<body>
<div style="overflow-x:auto;" class="div-sm mx-auto mb-3 bg-white shadow rounded py-3 px-4">
	<h1 style="text-align: center">Embarcación {{$historic[0]->id_emb}}</h1><hr>
	<h3 style="text-align: left">Datos Historicos</h3><hr>
	@foreach($historic as $emb)
	<div class="container col-md-12">

		<div class="row">
			<p>Nombre del Encargado: {{$emb->user_name}}</p>
			<p>Fecha: {{$emb->created_at}}</p>
			<p>Nombre de Embarcación: {{$emb->nom_emb}}</p>
			<p>Nombre de Propietario: {{$emb->nom_prop}}</p>
			<p>Nombre del Anterior Propietario: {{$emb->ant_prop}}</p>
			<p>Asociación Cooperativa: {{$emb->asc_cop}}</p>
			<p>Número de Certificado: {{$emb->num_cert}}</p>
			<p>Clase/Tipo: {{$emb->clase_tipo}}</p>
			<p>Servicio: {{$emb->serv_emb}}</p>
			<p>Base Operativa: {{$emb->base_op}}</p>
			<p>Matrícula: {{$emb->matricula}}</p>
			<p>Sistema de Propulsión: {{$emb->sist_prop}}</p>
			<p>Material: {{$emb->material}}</p>
			<p>Mercancías Peligrosas: {{$emb->men_pel}}</p>
			<p>Año de Construcción: {{$emb->anio}}</p>
			<p>Eslora:{{$emb->eslora}} mts.</p>
			<p>Manga:{{$emb->manga}} mts.</p>
			<p>Puntal:{{$emb->puntal}} mts.</p>
			<p>TRB:{{$emb->trb}} mts.</p>
			<p>TRN:{{$emb->trn}} mts.</p>
			<p>Francobordo.:{{$emb->francobordo}} mts.</p>


		</div>
		<br>
		<hr>

		</center>
		@endforeach
		<h3 style="text-align: left">Inspecciones</h3><hr>
		<p>hola</p>
		<hr>
		<h3 style="text-align: left">Fotografías</h3><hr>
		<br><br><br><br>
		@if($i>=1)


		<div align="center" class="py-5">
		      <img  class="center" src="./storage/{{$v[0]}}" height="250" width="250" style="">
		    <br><br>
		    @for($c=1;$c<$i;$c++)
		    <br>
		      <img class="d-block w-85"  src="./storage/{{$v[$c]}}" height="250" width="250">
		      <br><br>
		    @endfor

		</div>


		@endif

	</div>
</div>
</body>
</html>