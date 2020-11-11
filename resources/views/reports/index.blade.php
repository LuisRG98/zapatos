<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<p style="font-size: 8">
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Micreo E  La Paz-Bolivia<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
</head>

<style>
	table.example-table, .example-table
	td { border: 1px solid black; border-collapse: collapse;font-size: 11; text-align: center;}
	th { border: 1px solid black; border-collapse: collapse;font-size: 11;}
</style>

<body>
<h1 style="text-align: center;">Reporte de Ventas</h1>
<div class="container">
	<table>
		<tr>
		<td><p> <b> Nombre:</b></td>
		<td>{{auth()->user()->name}} </p></td>
		</tr>
		<tr>
		</tr>
	</table>
</div>

<div class="container col-md-12">
<h3 style="text-align: left">Ventas Generadas</h3>
<table width="100%" class="example-table">
	<tr>
		<th style="background-color: #76adbc" width="5%">N°</th>
		<th style="background-color: #76adbc" width="25%">Fecha de Venta</th>
		<th style="background-color: #76adbc" width="10%">Código</th>
		<th style="background-color: #76adbc" width="15%">Talla</th>
		<th style="background-color: #76adbc" width="10%">Cantidad</th>
		<th style="background-color: #76adbc" width="10%">Precio de Venta (Bs)</th>
		<th style="background-color: #76adbc" width="10%">Ingreso (Bs)</th>
	</tr>
	{{$i=0}}
	@foreach($ventas as $venta)
	<tr>
		<td>{{$i=$i+1}}</td>
		<td>{{$venta->created_at}}</td>
		<td>{{$venta->codigo}}</td>
		<td>{{$venta->talla}}</td>
		<td>{{$venta->cantidad}}</td>
		<td>{{$venta->monto}}</td>
		<td>{{$venta->ingreso}}</td>


	</tr>
	@endforeach
	<h3>Ganancias Totales:{{$suma}} Bs.</h3>
</table>
<br>


</div>
</body>
{{-- <footer style="position: absolute;bottom: 0; width: 100%">
	<center>
	<label>_________________________</label><br>
	<label>{{auth()->user()->rango}}: {{auth()->user()->lastname1}} {{auth()->user()->lastname2}} {{auth()->user()->name}} </label>
	</center>
</footer> --}}
</html>