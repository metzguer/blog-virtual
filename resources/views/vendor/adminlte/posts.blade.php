@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(session('info'))
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success">
                            {{ session('info') }}
                        </div>
                    </div>
                </div>
                 @endif
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">POSTS</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                     <div class="tabletable-responsive-sm table-responsive-md">
                    <div class="box-body" style="font-size: 15px;">
                       
                          <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">URL</th>
                                  <th scope="col" colspan="3" class="text-center">Opciones</th>
                                   <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                 @foreach($posts as $post)   

                                    <tr>
                                        
                                      <th scope="row">{{ $post->id }}</th>
                                      <td>{{ $post->name }}</td>
                                      <td>{{ $post->slug }}</td>
                                      <td class="text-center"><a href="/posts/{{ $post->slug }}" class="btn btn-success btn-sm">Ver</a></td>
                                      <td class="text-center">
                                        {!! Form::open(['route'=>['posts.edit',$post->slug],'method'=>'GET']) !!}
                                        {!! Form::submit('Editar',['class'=>'btn btn-warning btn-sm']) !!}
                                        {!! Form::close() !!}
                                      </td>
                                      <td class="text-center">
                                        {!! Form::open(['route'=>['posts.destroy',$post->slug],'method'=>'DELETE']) !!}
                                        {!! Form::submit('Eliminar',['class'=>'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                        
                                      </td>
                                    </tr>
                                 @endforeach
                              </tbody>
                            </table> 
                       
                    </div>    </div>     
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
@endsection
