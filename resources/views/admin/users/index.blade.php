@inject('request', 'Illuminate\Http\Request')
@extends('admin.layout')

@push('styles')
	<!-- DataTables -->
	{!! Html::style('adminlte/plugins/datatables/dataTables.bootstrap.css') !!}
@endpush

@section('header')
	<h1>Administración de Usuarios <small>Listado</small></h1>
@endsection

@section('content')

<div class="row">
	<div class="col-lg-12">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Listado de usuarios</h3>
			<a class="btn btn-primary pull-right" href="{{ route('admin.usuarios.create') }}">Crear usuario</a>
		</div>
		<div class="box-body">
			<table id="table" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Roles</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>
								@foreach ($user->roles()->pluck('name') as $role)
									<span class="label label-info label-many">{{ $role }}</span>
								@endforeach
							</td>
							<td>
								<a href="{{ route('admin.usuarios.edit', $user->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
								{!! Form::open(['route' => ['admin.usuarios.destroy', $user->id], 'method' => 'DELETE', 'style' => 'display: inline;', 'class' => 'delete']) !!}
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
        	return confirm("Estas por eliminar un usuario. ¿Estas seguro?");
    	});
	</script>

@endpush