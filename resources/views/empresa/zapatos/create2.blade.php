@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3">



		<form  action="{{route('zapatos.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<input class="inputfile" type="file" name="file[]" multiple="true">
			<button class="button btn-primary">Enviar</button>
		</form>
	</div>
</div>
@endsection
