@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3 bg-white shadow rounded py-3 px-4">
		<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('ventas.store')}}" enctype="multipart/form-data">
		<h1  class="display-5">Ventas Realizadas</h1><hr>
		@csrf
		<div class="container col-md-12">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group required">
					<label for="monto">Monto en Bs.:</label>
					<input
						class="form-control bg-light shadow-sm 	@error('monto') is-invalid @enderror border-1"
						type="number"
						name="monto"
						step="0.01"
						id="monto"
						value="{{old('monto',$venta->monto ?? '')}}">
						@error('monto')
							<span class="invalid-feedback" role="alert">
								<strong>{{$message}}</strong>
							</span>
						@enderror
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group required">
					<label for="talla">Talla:</label>
					<input
						class="form-control bg-light shadow-sm 	@error('talla') is-invalid @enderror border-1"
						type="number"
						name="talla"
						id="talla"
						value="{{old('talla',$venta->talla ?? '')}}">
						@error('talla')
							<span class="invalid-feedback" role="alert">
								<strong>{{$message}}</strong>
							</span>
						@enderror
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group required">
					<label for="cantidad">Cantidad:</label>
					<input
						class="form-control bg-light shadow-sm 	@error('cantidad') is-invalid @enderror border-1"
						type="number"
						name="cantidad"
						id="cantidad"
						value="{{old('cantidad',$venta->cantidad ?? '')}}">
						@error('monto')
							<span class="invalid-feedback" role="alert">
								<strong>{{$message}}</strong>
							</span>
						@enderror
					</div>
				</div>

			</div>
			<button class="btn btn-primary btn-large btn-block">Realizar Venta</button>
		</div>
	</form>
	</div>
</div>
@endsection