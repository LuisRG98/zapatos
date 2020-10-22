@extends('layout')

@section('content')
<div style="overflow-x:auto;" class="div-sm mx-auto mb-3 bg-white shadow rounded py-3 px-4">
	<h1>Datos de Producto</h1><hr>
	<div class="container col-md-12">
		<div class="row">
		<div class="col-md-4">
			<table class="table table-borderless table-sm">
				<tr>
					<th>Código:</th>
					<td>{{$zapato->codigo}}</td>
				</tr>
				<tr>
					<th>Modelo:</th>
					<td>{{$zapato->modelo}}</td>
				</tr>
				<tr>
					<th>Color:</th>
					<td>{{$zapato->color}}</td>
				</tr>
				<tr>
					<th>Tallas:</th>
					<td><b>33:</b> {{$zapato->t33}} <b>34:</b>{{$zapato->t34}} <b>35:</b> {{$zapato->t35}} <b>36:</b> {{$zapato->t36}}</td>
				</tr>
			</table>
		</div>

		<div class="col-md-4">
			<label>Foto de Producto:</label><br>
			@if($zapato->id)
					<center>
					<img width="177px" src="{{Storage::url($zapato->avatar)}}">
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
