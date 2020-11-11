@extends('layout2')

@section('content')
<div class="container col-md-12 px-3 text-center">
		<div id="products" >
			@foreach($productos as $producto)
				<div class="product white-panel">
					<h3>Código: {{$producto->codigo}}</h3><hr>
					<center>
					<img src="{{Storage::url($producto->avatar)}}" width="200" height="200">
					</center>
					<div class="product-info panel">
						<br>
						
						<p>
							{{-- <a class="btn btn-warning" href="#">La quiero</a> --}}
							<a class="btn btn-primary" href="{{route('productos.show',$producto->id)}}">Leer mas</a>
						</p>
					</div>
				</div>
			@endforeach
		</div>


	<script>
		$(document).ready(function() {
		$('#products').pinterest_grid({
		no_columns: 4,
		padding_x: 10,
		padding_y: 10,
		margin_bottom: 50,
		single_column_breakpoint: 700
		});
		});
		</script>
</div>
@endsection