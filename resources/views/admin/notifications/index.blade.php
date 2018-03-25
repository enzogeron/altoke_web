@extends('admin.layout')

@push('styles')
	<!-- DataTables -->
	{!! Html::style('adminlte/plugins/datatables/dataTables.bootstrap.css') !!}
@endpush

@section('header')
	<h1>Administración de Notificaciones <small>Listado</small></h1>
@endsection

@section('content')
<div class="row">
	<div class="col-lg-12">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Listado de notificaciones</h3>
			<a class="btn btn-primary pull-right" href="{{ route('admin.notificaciones.create') }}">Crear notificación</a>
		</div>
		<div class="box-body">
			<table id="table" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th width="400px">Título</th>
						<th width="400px">Contenido</th>
						<th width="300px">Fecha expiración</th>
						<th width="100px">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($notifications as $notification)
						<tr>
							<td>{{ $notification->id }}</td>
							<td>{{ $notification->title }}</td>
							<td>{{ $notification->body }}</td>
							<td>{{ $notification->expiration_date }}</td>
							<td>
								<a href="{{ route('admin.notificaciones.edit', $notification->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
								{!! Form::open(['route' => ['admin.notificaciones.destroy', $notification->id], 'method' => 'DELETE', 'style' => 'display: inline;', 'class' => 'delete']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-close"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $notifications->render() !!}
		</div>
	</div>
	</div>
</div>
@endsection

@push('scripts')
	<!-- DataTables -->
	{!! Html::script('adminlte/plugins/datatables/jquery.dataTables.min.js') !!}
	{!! Html::script('adminlte/plugins/datatables/dataTables.bootstrap.min.js') !!}

	<script>
		$(function () {
			$('#table').DataTable({
				"paging": false,
				"lengthChange": false,
				"searching": true,
				"ordering": false,
				"info": false,
				"autoWidth": false
			});
		});
	</script>

	<script>
    	$(".delete").on("submit", function(){
        	return confirm("Estas por eliminar el concurso estudiantil. ¿Estas seguro?");
    	});
	</script>

@endpush