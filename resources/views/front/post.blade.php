@extends('front.layout.app')

@section('content')
      

<!--
==================================================
Global Page Section Start
================================================== -->
 <br><br>
        <section class="global-page-header" style="background-color: #163163;">
            <div class="container" style="background-color: #163163;">
                <div class="row" style="background-color: #163163;">
                    <div class="col-md-12 ">
                        <div class="block">
                            <h2 style="color: white">{{ $newpost->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<section class="single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post-img">
                    <center>
                    <img class="rounded mx-auto d-block img-res" src="/images/publicaciones/{{ $newpost->file }}">
                    </center>
                </div>
                <div class="post-content">
                    <div class="text-center">
                     <!--<img class="rounded mx-auto d-block img-res" src="/images/publicaciones/{{ $newpost->file }}">-->
                   </div>
                   <br>
                    <p class="text-justify">
                       {!! $newpost->body !!}
                    </p>
                    
                  
                
                </div>
                
                
            </div>
        </div>
      
    </div>
</section>   

@endsection

