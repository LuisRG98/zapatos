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
			</table>
		</div>
		<div class="col-md-4">
			<table class="table table-borderless table-sm">
				<tr>
					<th>Tallas:</th>
					<th>Tipo de Cuero:</th>
				</tr>
				@if($zapato->t1!=0)
				<tr>
					<td>{{$zapato->t1}}</td>
					<td>{{$zapato->cu1}}</td>
				</tr>
				@endif

				@if($zapato->t2!=0)
				<tr>
					<td>{{$zapato->t2}}</td>
					<td>{{$zapato->cu2}}</td>
				</tr>
				@endif
				@if($zapato->t3!=0)
				<tr>
					<td>{{$zapato->t3}}</td>
					<td>{{$zapato->cu3}}</td>
				</tr>
				@endif
				@if($zapato->t4!=0)
				<tr>
					<td>{{$zapato->t4}}</td>
					<td>{{$zapato->cu4}}</td>
				</tr>
				@endif
				@if($zapato->t5!=0)
				<tr>
					<td>{{$zapato->t5}}</td>
					<td>{{$zapato->cu5}}</td>
				</tr>
				@endif
				@if($zapato->t6!=0)
				<tr>
					<td>{{$zapato->t6}}</td>
					<td>{{$zapato->cu6}}</td>
				</tr>
				@endif
				@if($zapato->t7!=0)
				<tr>
					<td>{{$zapato->t7}}</td>
					<td>{{$zapato->cu7}}</td>
				</tr>
				@endif
				@if($zapato->t8!=0)
				<tr>
					<td>{{$zapato->t8}}</td>
					<td>{{$zapato->cu8}}</td>
				</tr>
				@endif
				@if($zapato->t9!=0)
				<tr>
					<td>{{$zapato->t9}}</td>
					<td>{{$zapato->cu9}}</td>
				</tr>
				@endif
				@if($zapato->t10!=0)
				<tr>
					<td>{{$zapato->t10}}</td>
					<td>{{$zapato->cu10}}</td>
				</tr>
				@endif
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
