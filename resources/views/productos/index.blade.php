@extends('layout2')

@section('content')
<div class="container col-md-12 px-3 text-center">
		<div id="products" >
			@foreach($productos as $producto)
				<div class="product white-panel">
					<h3>Nombre</h3><hr>
					<center>
					<img src="{{$producto}}" width="200" height="200">
					</center>
					<div class="product-info panel">
						<p>descripcion</p>
						<h3>
							<span class="badge badge-success">Precio</span>
						</h3>
						<p>
							<a class="btn btn-warning" href="#">La quiero</a>
							<a class="btn btn-primary" href="#">Leer mas</a>
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