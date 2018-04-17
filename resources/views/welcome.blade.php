<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ url('favicon.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ url('favicon.png') }}" type="image/x-icon" />

    <title>Altoke App - Grupo de Desarrollo Universitario</title>

   	<meta name="description" content="Altoke - Todo mas rápido y fácil">
   	<meta name="author" content="Enzo Geron">

    <meta property="og:description" content="Altoke - La app que necesitaba Exactas. Deja de perder tiempo, con Altoke todo es mas rápido y fácil."/>
    <meta property="og:site_name" content="Altoke"/>
    <meta property="og:url" content="http://altoke.xyz/"/>
    <meta property="og:title" content="Altoke | Todo mas rápido y fácil"/>
    <meta property="og:image" content="{{ url('img/facebook.jpg') }}"/>
    <meta property="fb:admins" content="1870004986617179"/>
    <meta property="author" content="Enzo Geron" />
    <meta property="keywords" content="estudiantes, equipo, grupo, unsa, informatica, programacion, programadores, club, amigos, facultad ciencias exactas"/>

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('css/nivo-lightbox.css') !!}
    {!! Html::style('css/nivo-lightbox-theme/default/default.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('color/default.css') !!}
    {!! Html::style('css/magnific-popup.css') !!}

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <div id="wrapper">

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container navigation">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ url('img/logo_altoke.png') }}" alt="Altoke App" width="30" height="30" />
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li><div id="cart"></div></li>
                        <li class="active"><a href="#intro">Inicio</a></li>
                        <li><a href="#content1">Características</a></li>
                        <li><a href="#works">Imágenes</a></li>
                        <li><a class="popup-with-zoom-anim" href="#contact-dialog">Contacto</a></li>
                        <li><a href="{{ route('login') }}"><i class="fa fa-external-link"></i></a></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        <!-- /.container -->
        </nav>

        <div id="contact-dialog" class="zoom-anim-dialog mfp-hide">
            <h1>¿Querés formar parte?</h1>
            <p>Si tenes ganas de participar en este proyecto aportando ideas, programando o creando contenido, no dudes en ponerte en contacto con nosotros. Podes hacerlo a través de nuestras redes sociales, estamos para ayudarte.</p>
            <ul class="social text-center">
            	<li><a href="https://facebook.com/gdusalta" target="_blank"><i class="fa fa-facebook"></i></a></li>
            	<li><a href="https://twitter.com/gdusalta" target="_blank"><i class="fa fa-twitter"></i></a></li>
            	<li><a href="https://www.instagram.com/gdusalta" target="_blank"><i class="fa fa-instagram"></i></a></li>
            	<li><a href="https://www.youtube.com/gdusalta" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>

        </div>

        <br>

        <!-- Section: intro -->
        <section id="intro" class="intro">
            <div class="intro-content">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                                <img src="{{ url('img/image_altoke.png') }}" class="img-responsive" alt="" />

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 slogan">
                            <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                <h2>Altoke App</h2>
                                <p>
                                    Deja de perder tiempo, con Altoke todo es más rápido y fácil.<br>
                                    Con esta aplicación vas a poder:
                                    <ul>
                                    	<li>Enterarte de los llamados a inscripción que se realizan en la facu</li>
                                    	<li>Conocer cuáles son las becas de formación disponibles para todas las carreras</li>
                                    	<li>Consultar información sobre tu departamento al instante</li>
                                    	<li>Enterarte de todos los eventos que se realizan en la facu</li>
                                    	<li>Participar activamente en actividades relacionadas al deporte universitario</li>
                                    	<li>Descargar los modelos de notas que necesites para hacer tus tramites</li>
                                    	<li>Ver vídeos creados por tus compañeros y profes para reforzar aquellos temas que no entendiste</li>
                                    </ul>
                                </p>
                                <p>
                                	La aplicación que necesitaba la Facultad de Ciencias Exactas.</br>
                                	Descárgala ahora, que estas esperando...
                                </p>
                            </div>
                            <div class="buttons">
                                <a href="https://play.google.com/store/apps/details?id=xyz.altoke" class="btn btn-success btn-lg wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s" target="_blank"><i class="fa fa-android fa-2x"></i> Descargar<br /> <small>Android</small></a>
                            </div>
                            
                        </div>                  
                    </div>      
                </div>
            </div>      
        </section>
    
        <!-- /Section: intro -->
        <div class="divider-short"></div>
    
        <section id="content1" class="home-section">

            <div class="container">
                <div class="row text-center heading">
                    <h3>Estas son algunas de las características de Altoke</h3>
                </div>
            
            
                <div class="row">
                    <div class="col-md-6">
                        <div class="wow fadeInLeft" data-wow-delay="0.2s">
                            <img src="{{ url('img/altoke_img1.png') }}" alt="" class="img-responsive" />
                        </div>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <div class="wow fadeInRight" data-wow-delay="0.3s">

                            <div class="features">                          
                                <i class="fa fa-check fa-2x circled bg-skin float-left"></i>
                                <h5>Notificaciones al instante</h5>
                                <p>
                                Con Altoke vas a recibir diariamente notificaciones sobre las noticias mas relevantes en la facu
                                </p>
                            </div>

                            <div class="features">                          
                                <i class="fa fa-check fa-2x circled bg-skin float-left"></i>
                                <h5>Actualizada constantemente</h5>
                                <p>
                                La aplicación se mantendrá actualizada constantemente con información proveniente del Centro de Estudiantes y el Departamento de Alumnos de la Facultad
                                </p>
                            </div>

                            <div class="features">                          
                                <i class="fa fa-check fa-2x circled bg-skin float-left"></i>
                                <h5>Más nuevas funcionalidades</h5>
                                <p>
                                Este proyecto es una realidad gracias al trabajo conjunto de muchas personas, te invitamos a participar para seguir mejorando la app
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: content -->
    
        <div class="divider-short"></div>
    
        <section id="content2" class="home-section">

            <div class="container">
                <div class="row text-center heading">
                    <h3>Mas funcionalidades</h3>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="wow fadeInLeft" data-wow-delay="0.2s">
                            <p>
                           		Con Altoke queremos hacer que tu día a día en la facu sea mucho mas fácil. Una de nuestras funcionalidades es brindarte un canal de comunicación mas eficiente y actualizado por el cual vas a poder consultar cualquier tipo de información académica sin dar vueltas.
                            </p>
                            <p>
                            	La app por el momento la podes encontrar en la PlayStore, pero muy pronto estara disponible en la Apple Store y Windows App Store.
                            </p>
                            <div class="divider-short marginbot-30 margintop-30"></div>
                            <div class="features">                          
                                <i class="fa fa-android fa-2x circled bg-skin float-left"></i>
                                <h5>Android</h5>
                            </div>
                            <div class="features">                          
                                <i class="fa fa-apple fa-2x circled bg-skin float-left"></i>
                                <h5>iOS</h5>
                            </div>
                            <div class="features">                          
                                <i class="fa fa-windows fa-2x circled bg-skin float-left"></i>
                                <h5>Windows Phone</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInRight" data-wow-delay="0.3s">
                            <img src="{{ url('img/altoke_img2.png') }}" alt="" class="img-responsive" />
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /Section: content -->
    
        <div class="divider-short"></div>

        <section id="works" class="home-section text-center">
            <div class="container">
                <div class="row text-center heading">
                    <h3>Altoke - La app que necesitaba Exactas</h3>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12" >

                        <div class="row gallery-item">
                            <div class="col-md-3">
                            	<a class="image-popup-vertical-fit" href="{{ url('img/works/work_1.jpg') }}" title="Llamados a inscripción"><img src="{{ url('img/works/work_1.jpg') }}" class="img-responsive" alt="img"></a>
                            </div>
                            <div class="col-md-3">
                          		<a class="image-popup-vertical-fit" href="{{ url('img/works/work_2.jpg') }}" title="Modelos de notas"><img src="{{ url('img/works/work_2.jpg') }}" class="img-responsive" alt="img"></a>
                            </div>
                            <div class="col-md-3">
                                <a class="image-popup-vertical-fit" href="{{ url('img/works/work_3.jpg') }}" title="Envíanos tus consultas y propuestas"><img src="{{ url('img/works/work_3.jpg') }}" class="img-responsive" alt="img"></a>
                            </div>
                            <div class="col-md-3">
                                <a class="image-popup-vertical-fit" href="{{ url('img/works/work_4.jpg') }}" title="Seguimos por los estudiantes"><img src="{{ url('img/works/work_4.jpg') }}" class="img-responsive" alt="img"></a>
                            </div>
                        </div>

                    </div>
                </div>  
            </div>
        </section>

        <div class="divider-short"></div>

        <footer>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">

                            <ul class="social">
                                <li><a href="https://facebook.com/gdusalta" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/gdusalta" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/gdusalta" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/gdusalta" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>

                            <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="text-left">
                                    <p>&copy; Copyright 2018 - Altoke App. All rights reserved.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <div class="text-right margintop-30">
                                    <p>Impulsed by <a href="http://enzogeron.com" target="_blank">Enzo Geron</a></p>
                                <!-- 
                                    All links in the footer should remain intact. 
                                    Licenseing information is available at: http://bootstraptaste.com/license/
                                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Appland
                                -->
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </footer>

    </div>

    <!-- Core JavaScript Files -->
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/jquery.easing.min.js') !!}
    {!! Html::script('js/wow.min.js') !!}
    {!! Html::script('js/jquery.scrollTo.js') !!}
    {!! Html::script('js/nivo-lightbox.min.js') !!}
    {!! Html::script('js/custom.js') !!}
    {!! Html::script('js/jquery.magnific-popup.min.js') !!}

    <script type="text/javascript">
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
            $('.image-popup-vertical-fit').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-img-mobile',
                image: {
                    verticalFit: true
                }
            });
        });
    </script>
    
</body>

</html>
