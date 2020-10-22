@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3">
		<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('zapatos.update',$zapato->id)}}" enctype="multipart/form-data">
			<h1 class="display-5">Editar Producto</h1><hr>
			@method('PUT')
			@include('empresa.zapatos._form')
		</form>
	</div>
</div>
@endsection
