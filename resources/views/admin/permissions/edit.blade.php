@extends('admin.layout')

@section('header')
	<h1>Permisos<small>Editar permiso</small></h1>
@stop

@section('content')

<div class="row">
	{!! Form::model($permission, ['route' => ['admin.permisos.update', $permission->id], 'method' => 'PUT']) !!}
		@include('admin.permissions.partials.form')
	{!! Form::close() !!}
</div>

@stop

