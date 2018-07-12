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
                            <h2>titulacion</h2>
                            
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
                <img src="{{ asset('images/titulacion.gif') }}" alt="" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="block"  >
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Opciones de titulación. </h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                      <section id="team">

                        <div class="row">
                               <table class="table">
                                  
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Tesis.</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Seminario de titulación.</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td>Examen General de Conocimientos.</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">4</th>
                                      <td>Examen Egel.</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">5</th>
                                      <td>Promedio.</td>
                                    </tr>
                                  </tbody>
                                </table>
                        </div>
                    </p>
                   
                    
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<br>
<br>

@endsection