@extends('admin.layout')

@push('styles')
	{!! Html::style('adminlte/plugins/datatables/dataTables.bootstrap.css') !!}
@endpush

@section('header')
	<h1>Administración de Eventos <small>Listado</small></h1>
@endsection

@section('content')
<div class="row">
	<div class="col-lg-12">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Listado de eventos</h3>
			<a class="btn btn-primary pull-right" href="{{ route('admin.eventos.create') }}">Crear evento</a>
		</div>
		<div class="box-body">
			<table id="table" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th width="400px">Título</th>
						<th width="400px">Resumen</th>
						<th>Fecha de inicio</th>
						<th width="100px">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($events as $event)
						<tr>
							<td>{{ $event->id }}</td>
							<td>{{ $event->title }}</td>
							<td>{{ $event->excerpt }}</td>
							<td>{{ $event->start_date }}</td>
							<td>
								<a href="{{ route('admin.eventos.edit', $event->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
								{!! Form::open(['route' => ['admin.eventos.destroy', $event->id], 'method' => 'DELETE', 'style' => 'display: inline;', 'class' => 'delete']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-close"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $events->render() !!}
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
        	return confirm("Estas por eliminar el evento. ¿Estas seguro?");
    	});
	</script>

@endpush