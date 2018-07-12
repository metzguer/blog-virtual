
@extends('front.layout.app')

@section('content')
<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area" >
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
                <!-- Slider -->
                <section class="cd-intro">
                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                    <span>computacion modalidad virtual</span><br>
                    <span class="cd-words-wrapper">
                        <b class="is-visible">Innovacion</b>
                        <b>movilidad</b>
                        <b>incluyente</b>
                    </span>
                    </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                        El programa educativo de Ingeniería en Computación en modalidad virtual, tiene como objetivo que el estudiante adquiera y aplique las competencias necesarias,  sustentado en el sistema de Instituciones de Educación Superior                 </h2>
                    
                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->

<!--
==================================================
Block Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                    presentacion
                    </h2>
                    <p class="text-justify">
                       La finalidad que tiene este programa es que el estudiante adquiera y aplique las competencias necesarias para contribuir al desarrollo regional, nacional e internacional, mediante la solución de la problemática generada por las necesidades de infraestructura computacional, tanto de hardware como de software, que hagan posible la automatización, administración y protección de la información en organizaciones públicas y privadas dentro de un marco de ética y legalidad. 
                    </p>
                   
                </div>
                
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="{{ asset('images/presentacion.jpg') }}" alt="">
                </div>
            </div>
        </div> 
           
        </div>
    </div>
</section> <!-- /#about -->

<section id="about">
    <div class="container">
        <div class="row">
             <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="{{ asset('images/vision.jpg') }}" alt="">
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                    mision
                    </h2>
                    <p class="text-justify">
                       Formar profesionales en el campo de la computación, que de manera integral y comprometida con la actualización permanente, aporten soluciones tecnológicas que contribuyan al desarrollo regional,  nacional e internacional, con una visión humanista, innovativa y de compromiso social.
                    </p>
                   
                </div>
                
            </div>
           
        </div>
    </div>
</section> <!-- /#about -->


<!-- 
================================================== 
    Service Page Section  Start
================================================== -->
<section id="service-page" class="pages service-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Programa Educativo</h2>
                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">El plan de estudios 2011 del PE de Ingeniero en Computación está estructurado por tres etapas. </p>
                    <div class="row service-parts">
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                                <img src="{{ asset('images/graf.jp') }}g">
                                <h4>ETAPAS</h4>
                              <p>Etapa de Formación Institucional (EFI)<br>la Etapa de Formación Profesional (EFP)<br> 
                              la Etapa de Integración y Vinculación.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="800ms">
                                <i class="ion-ios-pint-outline"></i>
                                <h4>UAGro Virtual</h4>
                                <p>Promueve e implementar la modalidad de educación a distancia para desarrollar el potencial de las personas a través de ambientes virtuales de aprendizaje con metodologías y estándares de calidad e inclusión social. </p>
                                <a href="http://virtual.uagro.mx/conocenos.php">Leer más..</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1s">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>Educación a Distancia</h4>
                                <p>La educación en línea es una modalidad de educación a distancia que habilita un entorno de comunicación para los procesos de enseñanza y aprendizaje a través de las tecnologías de la información y la comunicación. </p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>



<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Requisitos</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                
            </p>
        </div>
        <div class="row">
 
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-plus"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Habilidades y herramientas informaticas.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-social-facebook"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Comunicacion online.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-cloudy"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Actualizaciones</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-android-wifi"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Conectividad</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-body"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Autoaprendizaje</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#feature -->


@endsection