@extends('admin.layout')

@push('styles')
	<!-- DataTables -->
	{!! Html::style('adminlte/plugins/datatables/dataTables.bootstrap.css') !!}
@endpush

@section('header')
	<h1>Administración de Concursos Estudiantiles <small>Listado</small></h1>
@endsection

@section('content')

<div class="row">
	<div class="col-lg-12">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Listado de concursos estudiantiles</h3>
			<a class="btn btn-primary pull-right" href="{{ route('admin.concursos.create') }}">Crear concurso</a>
		</div>
		<div class="box-body">
			<table id="table" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th width="400px">Título</th>
						<th width="400px">Descripción breve</th>
						<th>Cargo</th>
						<th width="150px">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($contests as $contest)
						<tr>
							<td>{{ $contest->id }}</td>
							<td>{{ $contest->title }}</td>
							<td>{{ str_limit($contest->excerpt, 200) }}</td>
							<td>{{ $contest->position->name }}</td>
							<td>
								<a href="{{ route('admin.concursos.edit', $contest->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
								{!! Form::open(['route' => ['admin.concursos.destroy', $contest->id], 'method' => 'DELETE', 'style' => 'display: inline;', 'class' => 'delete']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-close"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $contests->render() !!}
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