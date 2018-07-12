@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<section class="content">


      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $post->name }}</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body text-justify">
          <br>
           <div class="text-center">
             <img class="rounded mx-auto d-block img-res" src="/images/publicaciones/{{ $post->file }}">
           </div>
           <br>
             {!! $post->body !!}
         
          
          <br><br>
        </div>
        <!-- /.box-body -->
      
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      <br>
      <table>
        </thead>
        <tbody>
          <tr> 
          <a class="btn btn-warning btn-sm" href="/posts/{{ $post->slug }}/edit">Editar</a>
          </tr>&nbsp;&nbsp;
          <tr> 
            {!! Form::open(['route'=>['posts.destroy',$post->slug],'method'=>'DELETE']) !!}
            {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm']) !!}
            {!! Form::close() !!}

          </tr>
        </tbody>

      </table>
      <!--
      <div> &nbsp;&nbsp;<br>
        <div style="color:white;">asasa</div>
         
        <br><br>
      </div>
-->
    </section>



@endsection