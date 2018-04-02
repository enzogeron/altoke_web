<div class="col-md-8">	
	<div class="box">
		<div class="box-body">
			<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
				{!! Form::label('title', 'Titulo de la notificación') !!}
				{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese aqui el titulo de la notificación']) !!}
				{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
				{!! Form::label('body', 'Contenido de la notificación') !!}
				{!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'editor', 'placeholder' => 'Ingrese el contenido completo de la notificación', 'rows' => '10']) !!}
				{!! $errors->first('body', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
	</div>
</div>

<div class="col-md-4">
	<div class="box">
		<div class="box-body">
			<div class="form-group {{ $errors->has('relevance') ? 'has-error' : ''}}">
				{!! Form::label('relevance', 'Notificación importante') !!}
				{!! Form::checkbox('relevance') !!}
				{!! $errors->first('relevance', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('expiration_date') ? 'has-error' : ''}}">
				{!! Form::label('expiration_date', 'Fecha de caducidad de la notificación') !!}
				{!! Form::date('expiration_date', isset($notification->expiration_date) ? \Carbon\Carbon::parse($notification->expiration_date)->format('Y-m-d') : \Carbon\Carbon::now()->addDay(10), ['class' => 'form-control']) !!}
				{!! $errors->first('expiration_date', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Publicar Notificación', ['class' => 'btn btn-primary btn-block']) !!}
			</div>

		</div>
	</div>
</div>