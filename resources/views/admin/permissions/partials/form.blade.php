<div class="col-md-8">	
	<div class="box">
		<div class="box-body">
			<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
				{!! Form::label('name', 'Nombre del permiso') !!}
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese aqui el nombre del permiso', 'required']) !!}
				{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
	</div>
</div>

<div class="col-md-4">
	<div class="box">
		<div class="box-body">
			<div class="form-group">
				{!! Form::submit('Enviar', ['class' => 'btn btn-primary btn-block']) !!}
			</div>
		</div>
	</div>
</div>