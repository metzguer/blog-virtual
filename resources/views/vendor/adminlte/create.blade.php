@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<section class="content">

 @if($errors->any())
<div class="alert alert-danger mt-4">
  <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
  </ul>
</div>
@endif
                
      <!-- Default box -->
      <div class="box">
 
          <div class="box-header with-border">
            <h3 class="box-title">Crear nueva publicación</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
        <div class="box-body">
          <br>
           <div class="text-center">

            <form class="form-horizontal"  method="POST" action="/posts" enctype="multipart/form-data">
              @csrf
              <div class="box-body">

                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Título</label>
                  <div class="col-sm-9">
                    <input class="form-control" id="name" name="name" placeholder="Título de publicación" type="text" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="excerpt" class="col-sm-2 control-label">Descripción</label>
                  <div class="col-sm-9">
                    <input class="form-control" id="excerpt" name="excerpt" placeholder="Escriba una breve introduccion de la publicación" type="text" required>
                  </div>
                </div>

                <div class="form-group">
                 <center><br>
                    <label for="file">Imagen</label>
                    <input id="file" name="file" type="file" required>
                    <p class="help-block">Seleccione ua imagen.</p>
                 </center>
                </div>

              
                 <div class="form-group">
                    <label for="">Contenido de la publicación</label>
                    <div id="toolbar-container" ></div>
                     <textarea name="body" id="editor" required="" style="height: 200px;" >
                    
                     </textarea>
                 </div>
              
                <div class="form-group">
                  <br><br>
                   <label>Slug:  nombre de título usando (-) en los espacios: nombre-de-titulo</label>
                  <input class="form-control" id="slug" name="slug" placeholder="nombre-de-mi-titulo-sin-espacios" type="text" required>
                </div>

                  <input class="form-control hidden" id="status" name="status"  type="text" value="PUBLISHED">

                

              </div>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
 
    
           </div>
           <br>
          
          <br><br>
        </div>
        <!-- /.box-body -->
      
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      <br>
    
   

    </section>

 
   
@endsection
    