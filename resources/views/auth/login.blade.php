<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ url('favicon.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ url('favicon.png') }}" type="image/x-icon" />
    <title>Altoke App</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    {!! Html::style('adminlte/bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
    <!-- Theme style -->
    {!! Html::style('adminlte/css/AdminLTE.min.css') !!}

    {!! Html::style('adminlte/css/skins/skin-blue.min.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition login-page">
    
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('home') }}"><b>Altoke App</b></a><br>
            <img src="{{ url('img/logo_altoke.png') }}" width="50px" height="50px">
        </div>
        
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Iniciar sesion</p>

            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo electronico">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <div class="col-xs-8">
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div><br>
        <div class="text-center">
            <strong><a href="https://gdu.unsa.edu.ar/" target="_blank">Grupo de Desarrollo Universitario</a></strong>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery 2.2.3 -->
    {!! Html::script('adminlte/plugins/jQuery/jquery-2.2.3.min.js') !!}
    <!-- Bootstrap 3.3.6 -->
    {!! Html::script('adminlte/bootstrap/js/bootstrap.min.js') !!}

    <!-- AdminLTE App -->
    {!! Html::script('adminlte/js/app.min.js') !!}

</body>
</html>