@extends('admin.layout')

@push('styles')
	{!! Html::style('adminlte/plugins/select2/select2.min.css') !!}
@endpush

@section('header')
	<h1>Eventos <small>Editar evento</small></h1>
@stop

@section('content')

<div class="row">
	{!! Form::model($event, ['route' => ['admin.eventos.update', $event->id], 'method' => 'PUT']) !!}
		@include('admin.events.partials.form')
	{!! Form::close() !!}
</div>

@stop

@push('scripts')
	{!! Html::script('adminlte/plugins/select2/select2.full.min.js') !!}
	<script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
	{!! Html::style('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.css') !!}
	{!! Html::script('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') !!}
	<script type="text/javascript">
		// Select Multiple
		$(".select2").select2(); 
		// CK Editor
		CKEDITOR.replace('editor'); 
		// Date picker
		$("#start_date").datetimepicker({
			autoclose: true,
			//format: 'dd/mm/yyyy hh:ii:ss'
			format: 'yyyy-mm-dd hh:ii:ss'
		});
	</script>
@endpush


