@extends('admin.layout')

@section('header')
    <h1>Configuración Personal<small>Cambiar contraseña</small></h1>
@stop

@section('content')

<div class="row">
    {!! Form::open(['method' => 'PATCH', 'route' => ['auth.change_password']]) !!}
        <div class="col-md-8 col-md-offset-2">  
            <div class="box">
                <div class="box-body">

                    <div class="form-group {{ $errors->has('current_password') ? 'has-error' : '' }}">
                        {!! Form::label('current_password', 'Contraseña actual') !!}
                        {!! Form::password('current_password', ['class' => 'form-control', 'placeholder' => 'Escriba su contraseña actual']) !!}
                        {!! $errors->first('current_password', '<span class="help-block">:message</span>') !!}
                    </div>
                    <hr>
                    <div class="form-group {{ $errors->has('new_password') ? 'has-error' : '' }}">
                        {!! Form::label('new_password', 'Nueva contraseña') !!}
                        {!! Form::password('new_password', ['class' => 'form-control', 'placeholder' => 'Escriba su nueva contraseña']) !!}
                        {!! $errors->first('new_password', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('new_password') ? 'has-error' : '' }}">
                        {!! Form::label('new_password_confirmation', 'Confirmar nueva contraseña') !!}
                        {!! Form::password('new_password_confirmation', ['class' => 'form-control', 'placeholder' => 'Escriba su nueva contraseña para verificar']) !!}
                        {!! $errors->first('new_password_confirmation', '<span class="help-block">:message</span>') !!}
                    </div>

                    {!! Form::submit('Cambiar contraseña', ['class' => 'btn btn-primary btn-block']) !!}

                </div>
            </div>
        </div>
    {!! Form::close() !!}
</div>

@stop


