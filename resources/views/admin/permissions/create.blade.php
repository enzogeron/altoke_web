@extends('admin.layout')

@section('header')
	<h1>Permisos<small>Crear nuevo permiso</small></h1>
@stop

@section('content')

<div class="row">
	{!! Form::open(['route' => 'admin.permisos.store', 'method' => 'POST']) !!}
		@include('admin.permissions.partials.form')
	{!! Form::close() !!}
</div>

@stop


