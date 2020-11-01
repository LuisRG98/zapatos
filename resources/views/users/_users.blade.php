<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" defer></script>
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<div class="table-responsive-sm">
<table id="example" class="table-bordered shadow " style="width:100% ">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Estado</th>
			<th>Rol</th>
			<th>Acción</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->state}}</td>
			<td>
				{{-- @foreach($user->roles as $role)
				{{$role->display_name}}
				@endforeach --}}
			</td>
			<td>
				@if($name = Route::currentRouteName()=='usuarios.index')
					<a href="{{route('usuarios.show',$user)}}">Ver</a>
				@else
					<a href="{{route('usuarios.edit',$user->id)}}">Editar</a>
				@endif
			</td>
		</tr>
		@endforeach
	</tbody>
	<tr></tr>
</table>
</div>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>