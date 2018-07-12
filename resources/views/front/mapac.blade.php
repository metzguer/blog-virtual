@extends('front.layout.app')

@section('content')

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
          <br>  <br>
        <section class="global-page-header" style="background-color: #163163;">
            <div class="container" style="background-color: #163163;">
                <div class="row" style="background-color: #163163;">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Mapa Curricular</h2>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Company Description Section Start
================================================== -->
<section class="company-description">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="{{ asset('images/rutas.jpg') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="block"  >
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">PLAN DE ESTUDIOS</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                       El plan de estudios 2011 se compone de 407 créditos , que pueden ser cubiertos preferentemente a través de una de las 3 rutas sugeridas, de acuerdo a la disponibilidad y desempeño del estudiante. 
                    </p>
                    <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                       <strong>Duración</strong>  Los periodos de implementación se establecen de acuerdo con las siguientes rutas formativas: 
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Company Feature Section Start
================================================== -->
<section class="about-feature clearfix">
    <div class="container-fluid">
        <div class="row">
            
                    <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s" style="background-color: #163163;">
                    <h2>
                   Ruta mínima
                    </h2>
                    <p>
                        Esta ruta es recomendada para los estudiantes que disponen de tiempo completo y tienen un excelente desempeño. Esto es, de acuerdo a su historial académico de los niveles precedentes, mantiene un desempeño académico sobresaliente.
                    </p>
               
            </div>
                         <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s" style="background-color: #163163;">
                <h2 class="item_title">
               Ruta promedio
                </h2>
                <p>
                   Esta ruta es recomendada para los estudiantes que si bien disponen de tiempo completo, el desempeño académico de acuerdo a su historial en los niveles precedentes está entre regular y muy bueno.
                </p>
            </div>
           
            <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s" style="background-color: #163163;">
                <h2 class="item_title">
               Ruta máxima
                </h2>
                <p>
                   Esta ruta es sugerida para aquellos estudiantes con desempeño regular o bueno, y para quienes si bien han logrado un buen desempeño, no tienen disponilidad de tiempo completo porque necesitan trabajar para mantener sus estudios.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Team Section Start
================================================== -->
<section id="team">
    <div class="container">
        <div class="row">
            <h2 class="subtitle text-center">ESQUEMA CURRICULAR</h2>

            <section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                    Nomenclatura de UAP
                    </h2>
                    <p class="text-justify">
                       Unidad de Aprendizaje
                    </p>
                   
                </div>
                
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="{{ asset('images/detail-uap.png') }}" alt="" style="height: 250px;">
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
                    <img src="{{ asset('images/efi.png') }}" alt="">
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                   EFI
                    </h2>
                    <p class="text-justify">
                       Etapa de formación institucional, Asignadas por el SUVUAGro
                    </p>
                   
                </div>
            </div>

        </div>
    </div>
        
</section>

<section id="about">
    <div class="container">
        <div class="row">
             

            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                  NFBAD
                    </h2>
                    <p class="text-justify">
                      Etapa de formación institucional, Asignadas por el SUVUAGro 
                    </p>
                   
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="{{ asset('images/efi.png') }}" alt="">
                </div>
            </div>

        </div>
    </div>
        
</section>
<section id="about">
    <div class="container">
        <div class="row">
             

            <div class="col-sm-6 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item animated animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="{{ asset('images/nfpe.png') }}" class="img-responsive" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('images/nfpe.png') }}">Ampliar</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>

            <div class="col-md-6 col-sm-3">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                   NFPE
                    </h2>
                    <p class="text-justify">
                       Núcleo de formación de etapa profesional, Asignadas por la Facultad de ingeniería
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</section>


   @endsection