@inject('request', 'Illuminate\Http\Request')
@extends('admin.layout')

@push('styles')
	<!-- DataTables -->
	{!! Html::style('adminlte/plugins/datatables/dataTables.bootstrap.css') !!}
@endpush

@section('header')
	<h1>Administración de Roles <small>Listado</small></h1>
@endsection

@section('content')

<div class="row">
	<div class="col-lg-12">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Listado de roles</h3>
			<a class="btn btn-primary pull-right" href="{{ route('admin.roles.create') }}">Crear rol</a>
		</div>
		<div class="box-body">
			<table id="table" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Permisos</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($roles as $role)
						<tr>
							<td>{{ $role->name }}</td>
							<td>
								@foreach ($role->permissions()->pluck('name') as $permission)
									<span class="label label-info label-many">{{ $permission }}</span>
								@endforeach
							</td>
							<td>
								<a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
								{!! Form::open(['route' => ['admin.roles.destroy', $role->id], 'method' => 'DELETE', 'style' => 'display: inline;', 'class' => 'delete']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-close"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
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
        	return confirm("Estas por eliminar un rol. ¿Estas seguro?");
    	});
	</script>

@endpush


