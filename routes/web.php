<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// redireccion de localhost y lgout
Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('welcome');
});
Route::get('/blog/inicio', function () {
    return view('welcome');
});

// fin redireccion de localhost y lgout

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

// redireccion de paginas

Route::get('/index','Front\FrontController@index');
Route::get('/mapa-curricular','Front\FrontController@mapaCurricular');
Route::get('/estrategia-didactica','Front\FrontController@estrategiaDidactica');
Route::get('/titulacion','Front\FrontController@titulacion');
Route::get('/normas-de-comunicacion','Front\FrontController@normasComunicacion');
Route::get('/estudiantes','Front\FrontController@estudiantes');
Route::get('/ubicacion','Front\FrontController@ubicacion');
Route::get('blog/mapa-curricular','Front\FrontController@mapaCurricular');
Route::get('/blog/estrategia-didactica','Front\FrontController@estrategiaDidactica');
Route::get('/blog/titulacion','Front\FrontController@titulacion');
Route::get('/blog/normas-de-comunicacion','Front\FrontController@normasComunicacion');
Route::get('/blog/estudiantes','Front\FrontController@estudiantes');
Route::get('/blog/ubicacion','Front\FrontController@ubicacion');

Route::resource('blog','Front\BlogController',['only'=>['index','show']]);

// fin redireccion de paginas
Route::resource('posts','Back\BackController');

//despues del blog, retorna a front Controller

