@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;">
		<form action="{{route('files.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="file" name="file[]" multiple="true">
			<br><br>
			<button class="button btn-success">Enviar</button>
		</form>
	</div>
</div>
@endsection
