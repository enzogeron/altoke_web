<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ url('favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon" />
    <title>Altoke App</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    {!! Html::style('adminlte/bootstrap/css/bootstrap.min.css') !!}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    @stack('styles')
    
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

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>ATK</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Altoke</b> App</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </nav>
        </header>


        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ url('adminlte/img/user.jpg') }}" class="img-circle" alt="Altoke Imagen">
                    </div>
                    <div class="pull-left info">
                        <p>{{ Auth::user()->name }}</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header">DASHBOARD</li>
                    <li {{ request()->is('perfil') ? 'class=active' : '' }}>
                        <a href="{{ route('auth.change_password') }}"><i class="fa fa-lock"></i> <span>Modificar contraseña</span></a></li>
                    <li class="treeview {{ request()->is('admin/usuarios*') ? 'active' : '' }}">
                        <a href="#">
                            <i class="fa fa-user"></i><span>Usuarios</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li {{ request()->is('admin/usuarios') ? 'class=active' : '' }}>
                                <a href="{{ route('admin.usuarios.index') }}">Listado de usuarios</a>
                            </li>
                            <li {{ request()->is('admin/usuarios/create') ? 'class=active' : '' }}>
                                <a href="{{ route('admin.usuarios.create') }}">Crear nuevo usuario</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview {{ request()->is('admin/roles*') ? 'active' : '' }}">
                        <a href="#">
                            <i class="fa fa-superpowers"></i>
                            <span>Roles</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {{ request()->is('admin/roles') ? 'class=active' : '' }}>
                                <a href="{{ route('admin.roles.index') }}">Listado de roles</a>
                            </li>
                            <li {{ request()->is('admin/roles/create') ? 'class=active' : '' }}>
                                <a href="{{ route('admin.roles.create') }}">Crear nuevo rol</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview {{ request()->is('admin/permisos*') ? 'active' : '' }}">
                        <a href="#">
                            <i class="fa fa-address-card"></i>
                            <span>Permisos</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {{ request()->is('admin/permisos') ? 'class=active' : '' }}>
                                <a href="{{ route('admin.permisos.index') }}">Listado de permisos</a>
                            </li>
                            <li {{ request()->is('admin/permisos/create') ? 'class=active' : '' }}>
                                <a href="{{ route('admin.permisos.create') }}">Crear nuevo permiso</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview {{ request()->is('admin/concursos*') ? 'active' : '' }}">
                        <a href="#">
                            <i class="fa fa-sticky-note"></i>
                            <span>Concursos</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {{ request()->is('admin/concursos') ? 'class=active' : '' }}>
                                <a href="{{ route('admin.concursos.index') }}">Listado de concursos</a>
                            </li>
                            <li {{ request()->is('admin/concursos/create') ? 'class=active' : '' }}>
                                <a href="{{ route('admin.concursos.create') }}">Crear nuevo concurso</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('home') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Cerrar sesion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    <li>
                </ul>
                <!-- /.sidebar-menu -->

            </section>
            <!-- /.sidebar -->
        </aside>



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('header')
            </section>

            <!-- Main content -->
            <section class="content">
                @if(session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
            Impulsed by Enzo Geron
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2017 <a href="#">Altoke</a>.</strong> All rights reserved.
        </footer>

        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    {!! Html::script('adminlte/plugins/jQuery/jquery-2.2.3.min.js') !!}
    <!-- Bootstrap 3.3.6 -->
    {!! Html::script('adminlte/bootstrap/js/bootstrap.min.js') !!}

    @stack('scripts')

    <!-- AdminLTE App -->
    {!! Html::script('adminlte/js/app.min.js') !!}

</body>
</html>
