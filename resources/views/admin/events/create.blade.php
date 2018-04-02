@extends('admin.layout')

@section('header')
	<h1>Eventos <small>Crear evento</small></h1>
@stop

@section('content')

<div class="row">
	{!! Form::open(['route' => 'admin.eventos.store', 'method' => 'POST']) !!}
		@include('admin.events.partials.form')
	{!! Form::close() !!}
</div>

@stop

@push('scripts')
	<script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
	{!! Html::style('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.css') !!}
	{!! Html::script('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') !!}
	<script type="text/javascript">
		// CK Editor
		CKEDITOR.replace('editor'); 
		// Date picker
		$("#start_date").datetimepicker({
			autoclose: true,
			format: 'yyyy-mm-dd hh:ii:ss'
		});
	</script>
	
@endpush


