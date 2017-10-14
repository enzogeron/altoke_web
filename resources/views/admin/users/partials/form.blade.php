<div class="col-md-8">	
	<div class="box">
		<div class="box-body">
			<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
				{!! Form::label('name', 'Nombre del usuario') !!}
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese aqui el nombre del usuario', 'required']) !!}
				{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
				{!! Form::label('email', 'Correo electronico') !!}
				{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo electronico del usuario', 'required']) !!}
				{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
				{!! Form::label('password', 'Contraseña') !!}
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese su contraseña']) !!}
				{!! $errors->first('password', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
				{!! Form::label('password_confirmation', 'Confirmar contraseña') !!}
				{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Ingrese su contraseña de nuevo']) !!}
				{!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
				{!! Form::label('roles', 'Roles del usuario en el sistema') !!}
				{!! Form::select('roles[]', $roles, null, ['class' => 'form-control select2', 'multiple' => 'multiple', 'data-placeholder' => 'Seleccione uno o mas roles', 'style' => 'width: 100%;']) !!}
				{!! $errors->first('roles', '<span class="help-block">:message</span>') !!}
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