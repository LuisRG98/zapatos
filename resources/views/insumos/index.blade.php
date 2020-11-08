@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3 bg-white shadow rounded py-3 px-4">
		<h1  class="display-5">Lista de Insumos</h1><hr>
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
					<th>Tipo de Cuero</th>
					<th>Cantidad de Insumo</th>

				</tr>
			</thead>
			<tbody>
				<label hidden="hidden">{{$i=0}}</label>
				@foreach($vm as $materia )
				<tr>
					@if($materia!=null)
						<td>{{$materia}}</td>
						<td>{{$vc[$i]}}</td>
						<label hidden="hidden">{{$i=$i+1}}</label>
					@endif
				</tr>
				@endforeach


			</tbody>
			<tr></tr>
		</table>
		</div>
	</div>

</div>
@endsection