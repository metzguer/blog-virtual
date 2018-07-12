
<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}">
        <title>UAGro</title>
         <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="{{ asset('plugins/ionicons/ionicons.min.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="{{ asset('plugins/slider/slider.css') }}">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.theme.css') }}">
        <!-- Fancybox -->
        <link rel="stylesheet" href="{{ asset('plugins/facncybox/jquery.fancybox.css') }}">
        <!-- template main css file -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
                             <style type="text/css">
                                .img-res{
                                    max-height: 100%;
                                    max-width: 100%;
                                }
                            </style>

    </head>
    <body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">

                <div class="navbar-header">
                    <!-- responsive nav button -->

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                <div class="categories widget">
                            <ul>
                                <li>
                                    
                                    <a href="">
                                        <img  class="img-res" src="{{ asset('images/logoH.png') }}" style="height: 50px;margin-right: 5px;margin-bottom:8px; ">
                                    <span class="title" style="font-size: 15px;margin-top: 5px;color:#444;font-weight: 500"> Facultad de Ingenieria UAGro</span>
                                    </a> 
                                </li>
                               
                            </ul>
                        </div>
                    <!-- logo 
                    <div class="navbar-brand">
                        <a href="index.html" >
                            
                        </a>
                    </div>
                     /logo -->
                </div>
                
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="inicio" >Inicio</a>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Formación <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="mapa-curricular">Mapa Curricular</a></li>
                                        <li><a href="estrategia-didactica">ESTRATEGIA DIDACTICA</a></li>
                                         <li><a href="titulacion">titulacion</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">plataforma <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="http://licenciaturasuv.uagro.mx/">Aula Virtual</a></li>
                                        <li><a href="normas-de-comunicacion">Normativas de comunicacion</a></li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="estudiantes">Estudiantes</a></li>
                                        <li><a href="ubicacion">Ubicacion</a></li>
                                        <li><a href="">Otro</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sitios de Interes <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="https://www.uagro.mx">uagrO</a></li>
                                        <li><a href="http://ingenieria.uagro.mx/inicio">FACULTAD DE INGENIERIA</a></li>
                                        <li><a href="http://www.conricyt.mx">CONRICYT</a></li>
                                        <li><a href="http://virtual.uagro.mx">uagro VIRTUAL</a></li>
                                        <LI><a href="http://dae.uagro.mx/regweb">DAE</a>  </LI>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="/blog">blog</a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
        
          <!-- /contenido -->

            @yield('content')


            <!-- /contenido -->


         <footer id="footer" style="background-color: #163163; color: white;">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Av. Javier Méndez Aponte S/N.<br>
                            Col. Servidor Agrario, C.P. 39077.<br>
                            Chilpancingo de los Bravo, Guerrero.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/groups/134777786644730/ " class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                          
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->

    <!-- Template Javascript Files
    ================================================== -->
    <!-- jquery -->
    <script src="{{ asset('plugins/jQurey/jquery.min.js') }}"></script>
    <!-- Form Validation -->
    <script src="{{ asset('plugins/form-validation/jquery.form.js') }}"></script> 
    <script src="{{ asset('plugins/form-validation/jquery.validate.min.js') }}"></script>
    <!-- owl carouserl js -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('plugins/wow-js/wow.min.js') }}"></script>
    <!-- slider js -->
    <script src="{{ asset('plugins/slider/slider.js') }}"></script>
    <!-- Fancybox -->
    <script src="{{ asset('plugins/facncybox/jquery.fancybox.js') }}"></script>
    <!-- template main js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>









