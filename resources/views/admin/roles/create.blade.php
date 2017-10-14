@extends('admin.layout')

@push('styles')
	{!! Html::style('adminlte/plugins/select2/select2.min.css') !!}
@endpush

@section('header')
	<h1>Roles<small>Crear nuevo rol</small></h1>
@stop

@section('content')

<div class="row">
	{!! Form::open(['route' => 'admin.roles.store', 'method' => 'POST']) !!}
		@include('admin.roles.partials.form')
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


