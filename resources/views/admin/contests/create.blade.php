@extends('admin.layout')

@push('styles')
	{!! Html::style('adminlte/plugins/select2/select2.min.css') !!}
@endpush

@section('header')
	<h1>Concursos Estudiantiles<small>Crear concurso</small></h1>
@stop

@section('content')

<div class="row">
	{!! Form::open(['route' => 'admin.concursos.store', 'method' => 'POST']) !!}
		@include('admin.contests.partials.form')
	{!! Form::close() !!}
</div>

@stop

@push('scripts')
	{!! Html::script('adminlte/plugins/select2/select2.full.min.js') !!}
	<script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
	{!! Html::script('adminlte/plugins/datepicker/bootstrap-datepicker.js') !!}
	<script type="text/javascript">
		// Select Multiple
		$(".select2").select2(); 
		// CK Editor
		CKEDITOR.replace('editor'); 
		// Date picker
		$('#datepicker').datepicker({
			autoclose: true
		});
	</script>
@endpush


