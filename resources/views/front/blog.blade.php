
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
                            <h2>BLOG</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Eventos / Noticias</li>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--=====================================
=            Full Width Blog            =
======================================-->
<section id="blog-full-width">
    <div class="container">
        @foreach($posts as $post)
        
                <div class="row">
                    <div class="col-md-12">
                        <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                            <div class="blog-post-image">
                                <a href="/blog/{{ $post->slug }}">

                                    <div class="text-center col-sm-12">
                                    <img class="rounded mx-auto d-block img-res mb-3" src="/images/publicaciones/{{ $post->file }}" alt="" /></a>
                                        <br>
                                    
                                    </div>
                                    
                            </div>

                            <div class="blog-content">
                                <span style="height: 10px;background-color: white;color: white;">Hola man</span>
                                <h2 class="blogpost-title">
                                <a href="/blog/{{ $post->slug }}">{{ $post->name }}</a>
                                </h2>
                               
                                <p class="text-justify">{{ $post->excerpt }}
                                </p>
                                <a href="/blog/{{ $post->slug }}" class="btn btn-primary btn-primary">Leer más ...</a>
                            </div>
                            
                        </article>


                    </div>
                </div>

        @endforeach
    </div>
</section>



@endsection