<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" defer></script>
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<div class="table-responsive-sm">
<table id="example" class="table-bordered shadow" style="width:100%; text-align: center;">
	<thead>
		<tr>
			<th>Código</th>
			<th>Modelo</th>
			<th>Color</th>
			<th>Acción</th>
		</tr>
	</thead>
	<tbody>
		@foreach($zapatos as $zapato)
		<tr>
			<td>{{$zapato->codigo}}</td>
			<td>{{$zapato->modelo}}</td>
			<td>{{$zapato->color}}</td>
	
			<td>
				@if($name = Route::currentRouteName()=='zapatos.index')
					<a href="{{route('zapatos.show',$zapato)}}">Ver</a>
				@elseif($name = Route::currentRouteName()=='ventas.store')
					<a href="{{route('zapatos.edit',$zapato->id)}}">Venta</a>
				@else
					<a href="{{route('zapatos.edit',$zapato->id)}}">Editar</a>
				@endif
			</td>
		</tr>
		@endforeach
	</tbody>
	<tr></tr>
</table>
</div>
