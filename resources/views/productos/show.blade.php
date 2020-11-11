@extends('layout2')

@section('content')
<div class="container col-md-12 px-3 text-center">
	<div class="row">
		<div class="col-md-6">
			<div class="product-block" >
				<img src="{{Storage::url($zapato->avatar)}}" width="400" height="400">
			</div>
		</div>
		<div class="col-md-6">
			<div class="product-block div-sm mx-auto mb-3 bg-white shadow rounded py-3 px-4" style="background-color: white" >
				<h3>Código: {{$zapato->codigo}}</h3><hr>
				<div class="product-info panel">
					<p><b>Modelo:</b> {{$zapato->modelo}}</p>			
					<p><b>Color: </b>{{$zapato->color}}</p>

					<p><b>Tallas:</b></p>
					@if($zapato->t1!=0)
						<p>{{$zapato->t1}} (Cuero de{{$zapato->cu1}})</p>
					@endif

					@if($zapato->t2!=0)
						<p>{{$zapato->t2}} (Cuero de{{$zapato->cu2}})</p>
					@endif
					@if($zapato->t3!=0)
						<p>{{$zapato->t3}} (Cuero de{{$zapato->cu3}})</p>
					@endif
					@if($zapato->t4!=0)
						<p>{{$zapato->t4}} (Cuero de{{$zapato->cu4}})</p>
					@endif
					@if($zapato->t5!=0)
						<p>{{$zapato->t5}} (Cuero de{{$zapato->cu5}})</p>
					@endif
					@if($zapato->t6!=0)
						<p>{{$zapato->t6}} (Cuero de{{$zapato->cu6}})</p>
					@endif
					@if($zapato->t7!=0)
						<p>{{$zapato->t7}} (Cuero de{{$zapato->cu7}})</p>
					@endif
					@if($zapato->t8!=0)
						<p>{{$zapato->t8}} (Cuero de{{$zapato->cu8}})</p>
					@endif
					@if($zapato->t9!=0)
						<p>{{$zapato->t9}} (Cuero de{{$zapato->cu9}})</p>
					@endif
					@if($zapato->t10!=0)
						<p>{{$zapato->t10}} (Cuero de{{$zapato->cu10}})</p>
					@endif
				</div>
			</div>
		</div>
	</div>

	<p>
		<a class="btn btn-primary" href="{{route('productos.index')}}">
			<i class="fa fa-chevron-circle-left"></i>Regresar	
		</a>
	</p>
</div>
@endsection