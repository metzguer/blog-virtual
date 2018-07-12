<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BackPost;
use App\Http\Requests\StorePostRequest;

class BackController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $posts = BackPost::orderBy('id','desc')->get();

        return view('adminlte::posts', compact('posts'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('adminlte::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post = new BackPost();

        if($request->hasFile('file')){
            $file=$request->file('file');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/publicaciones/', $name);
        }
       ///return $request->all();
        
        $post->name=$request->input('name');
        $post->excerpt=$request->input('excerpt');
        $post->file=$name;
        $post->body = $request->input('body');
        $post->slug = $request->input('slug');
        $post->status = $request->input('status');
        $post->save();
        return redirect()->route('posts.index', $post->slug)->with('info', 'Post Creado con Exito !!');
       // return redirect()->route('trainers.index', $trainer->slug)->with('info', 'Post Creado con Exito !!');
        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BackPost $post)
    {
         return view('adminlte::show',compact('post'));
        //return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BackPost $post)
    {
       return view('adminlte::edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BackPost $post)
    {
        //base de datos
        // return $request;
        //viene del form
        //return $post;
        $post->fill($request->except('file'));
         
         
         if($request->hasFile('file')){

            $file_path=public_path().'/images/publicaciones/'.$post->file;
            \File::delete($file_path);

            $file=$request->file('file');
            $name=time().$file->getClientOriginalName();
            $post->file=$name;
            $file->move(public_path().'/images/publicaciones/', $name);
            
         }else{
            $name=$post->file;
           
         }
         
         $post->save();
        return redirect()->route('posts.show', $post->slug)->with('info', 'Publicación Actualizada con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BackPost $post)
    {
         $file_path=public_path().'/images/publicaciones/'.$post->file;
        \File::delete($file_path);
        
        $post->delete();
        return redirect()->route('posts.index', $post->slug)->with('info', 'Puplicación eliminada con exito');
    }
}
