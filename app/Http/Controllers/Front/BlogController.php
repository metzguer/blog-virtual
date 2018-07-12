<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BackPost;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BackPost::orderBy('id','desc')->get();
        return view('front.blog', compact('posts'));
    }
     

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($post)
    {
        $newpost = BackPost::where('slug','=',$post)->firstOrFail();
         return view('front.post',compact('newpost'));
        //return $post;
    }

}
