<div class="col-md-8">	
	<div class="box">
		<div class="box-body">
			<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
				{!! Form::label('title', 'Titulo del evento') !!}
				{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese aqui el titulo del evento']) !!}
				{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('excerpt') ? 'has-error' : ''}}">
				{!! Form::label('excerpt', 'Resumen del evento') !!}
				{!! Form::textarea('excerpt', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el resumen del evento', 'rows' => 5]) !!}
				{!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
				{!! Form::label('body', 'Contenido del evento') !!}
				{!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'editor', 'placeholder' => 'Ingrese el contenido completo del evento', 'rows' => '10']) !!}
				{!! $errors->first('body', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
	</div>
</div>

<div class="col-md-4">
	<div class="box">
		<div class="box-body">

			<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
				{!! Form::label('image', 'Imagen del evento') !!}
				{!! Form::text('image', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la url de la imagen del evento']) !!}
				{!! $errors->first('image', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
				{!! Form::label('start_date', 'Fecha de inicio del evento') !!}
				{!! Form::date('start_date', isset($event->start_date) ? \Carbon\Carbon::parse($event->start_date)->format('Y-m-d') : \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
				{!! $errors->first('start_date', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Publicar Evento', ['class' => 'btn btn-primary btn-block']) !!}
			</div>

		</div>
	</div>
</div>