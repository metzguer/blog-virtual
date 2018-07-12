<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class FrontController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function mapaCurricular(){
        return view('front.mapac');
    }
    public function estrategiaDidactica(){
    	 return view('front.estrategias');
    }
    public function titulacion(){
    	 return view('front.titulacion');
    }
    public function normasComunicacion(){
    	 return view('front.normas');
    }
    public function estudiantes(){
    	 return view('front.estudiantes');
    }
    public function ubicacion(){
    	 return view('front.ubicacion');	
    }
  
  
}
