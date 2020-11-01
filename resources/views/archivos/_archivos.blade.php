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
			<th>Identificador</th>
			<th>Fecha de Subida</th>
			<th>Acción</th>
		</tr>
	</thead>
	<tbody>
		@foreach($files as $file)
		<tr>
			<td>{{$file->name}}</td>
			<td>{{$file->publickey}}</td>
			<td>{{$file->created_at}}</td>
			<td><a href="{{route('archivos.edit',$file->publickey.'.pdf')}}">Ver</a></td>
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