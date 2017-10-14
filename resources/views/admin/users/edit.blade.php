@extends('admin.layout')

@push('styles')
	{!! Html::style('adminlte/plugins/select2/select2.min.css') !!}
@endpush

@section('header')
	<h1>Usuarios<small>Editar usuario</small></h1>
@stop

@section('content')

<div class="row">
	{!! Form::model($user, ['route' => ['admin.usuarios.update', $user->id], 'method' => 'PUT']) !!}
		@include('admin.users.partials.form')
	{!! Form::close() !!}
</div>

@stop

@push('scripts')
	{!! Html::script('adminlte/plugins/select2/select2.full.min.js') !!}
	<script type="text/javascript">
		// Select Multiple
		$(".select2").select2();
	</script>
@endpush


