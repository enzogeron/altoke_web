@extends('admin.layout')

@section('header')
	<h1>Notificaciones <small>Editar notificación</small></h1>
@stop

@section('content')

<div class="row">
	{!! Form::model($notification, ['route' => ['admin.notificaciones.update', $notification->id], 'method' => 'PUT']) !!}
		@include('admin.notifications.partials.form')
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


