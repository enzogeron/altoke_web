<div class="col-md-8">	
	<div class="box">
		<div class="box-body">
			<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
				{!! Form::label('title', 'Titulo del concurso') !!}
				{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese aqui el titulo del concurso']) !!}
				{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
				{!! Form::label('excerpt', 'Resumen del concurso') !!}
				{!! Form::textarea('excerpt', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el resumen del contenido', 'rows' => 5]) !!}
				{!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
				{!! Form::label('body', 'Contenido completo del concurso') !!}
				{!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'editor', 'placeholder' => 'Ingrese el contenido completo de la publicacion', 'rows' => '10']) !!}
				{!! $errors->first('body', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
	</div>
</div>

<div class="col-md-4">
	<div class="box">
		<div class="box-body">
			<div class="form-group {{ $errors->has('position_id') ? 'has-error' : '' }}">
				{!! Form::label('position_id', 'Cargo del concurso') !!}
				{!! Form::select('position_id', $positions, null, ['class' => 'form-control', 'placeholder' => 'Selecciona un cargo']) !!}
				{!! $errors->first('position_id', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('departments') ? 'has-error' : '' }}">
				{!! Form::label('departments', 'Departamentos implicados') !!}
				{!! Form::select('departments[]', $departments, null, ['class' => 'form-control select2', 'multiple' => 'multiple', 'data-placeholder' => 'Selecciona uno o mas departamentos', 'style' => 'width: 100%;']) !!}
				{!! $errors->first('departments', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('expiration_date') ? 'has-error' : ''}}">
				{!! Form::label('expiration_date', 'Fecha de caducidad del concurso') !!}
				{!! Form::date('expiration_date', \Carbon\Carbon::now()->addDay(7), ['class' => 'form-control']) !!}
				{!! $errors->first('expiration_date', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Publicar Concurso', ['class' => 'btn btn-primary btn-block']) !!}
			</div>

		</div>
	</div>
</div>