<div class="col-md-8">	
	<div class="box">
		<div class="box-body">
			<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
				{!! Form::label('name', 'Nombre del rol') !!}
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese aqui el nombre del rol', 'required']) !!}
				{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('permissions') ? 'has-error' : '' }}">
				{!! Form::label('permissions', 'Roles del usuario en el sistema') !!}
				{!! Form::select('permissions[]', $permissions, null, ['class' => 'form-control select2', 'multiple' => 'multiple', 'data-placeholder' => 'Selecciona uno o mas permisos', 'style' => 'width: 100%;']) !!}
				{!! $errors->first('permissions', '<span class="help-block">:message</span>') !!}
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