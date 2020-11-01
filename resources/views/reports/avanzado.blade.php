@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3">
		<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('reports.store')}}" enctype="multipart/form-data">
			<h1 class="display-5">Reporte Avanzado</h1><hr>
			@csrf
			<div class="form-group col-md-12 required">
			<div class="row">
			<div class="col-md-4">
				<label for="criterio">Criterio:</label>
				<select
					class="form-control bg-light shadow-sm 	@error('criterio') is-invalid @enderror border-1"
					name="criterio"
					id="criterio">
					<option value="REGISTRO" {{ old('criterio') == 'REGISTRO' ? 'selected' : '' }}>REGISTRO</option>
					<option value="INSPECCIÓN" {{ old('criterio') == 'INSPECCIÓN' ? 'selected' : '' }}>INSPECCIÓN</option>
				</select>
			</div>
			<div class="col-md-4">
				<label for="date1">Fecha Incial:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('date1') is-invalid @enderror border-1"
					type="date"
					name="date1"
					id="date1"
					value="{{old('date1',$emb->date1 ?? '')}}">
					@error('date1')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
			</div>
			<div class="col-md-4">
				<label for="date2">Fecha Final:</label>
					<input
						class="form-control bg-light shadow-sm 	@error('date2') is-invalid @enderror border-1"
						type="date"
						name="date2"
						id="date2"
						value="{{old('date2',$emb->date2 ?? '')}}">
						{!!$errors->first('date2','<span class=error>:message</span>')!!}
					@error('date2')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
			</div>
		</div>


		<button class="btn btn-primary btn-large btn-block">Buscar</button>
		</form>
	</div>
</div>
@endsection
