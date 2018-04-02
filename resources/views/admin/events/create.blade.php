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
	{!! Html::script('adminlte/plugins/datepicker/bootstrap-datepicker.js') !!}
	<script type="text/javascript">
		// CK Editor
		CKEDITOR.replace('editor'); 
		// Date picker
		$('#datepicker').datepicker({
			autoclose: true
		});
	</script>
@endpush


