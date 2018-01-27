<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::get('/users/{id}/{name}', function($id, $name){
//	return 'Este es el usario: '.$name. ' con el ID:'.$id;
//});
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/contact', 'PagesController@contact');

Route::get('ver-faltas/{id}/{periodo}','FaltaController@verFaltas');

Route::get('ver-faltas-periodo/{id}/{periodo}','FaltaController@verFaltasPeriodo');

Route::get('reg-faltas/{id}/{periodo}','FaltaController@registrofalta');

Route::get('pruebamaestro','PruebaMaestrosController@index');

Route::get('pruebamaestro/create','PruebaMaestrosController@create');

Route::get('pruebamaestro/{id}','PruebaMaestrosController@show');
Route::post('pruebamaestro','PruebaMaestrosController@store');

Route::get('pruebamaestro/{id}/edit','PruebaMaestrosController@edit');

Route::patch('pruebamaestro/{id}','PruebaMaestrosController@update');

Route::get('maestro/periodo','PeriodoController@index');

Route::get('maestro/index','MaestroController@index');

Route::get('maestro/show/{id}','MaestroController@show');

Route::get('ver-maestros/{id}','MaestroController@vermaestros');

Route::get('ver-maestros-periodo/{id}','MaestroController@vermaestros_periodo');

//Route::get('total-faltas-maestros/{id}','MaestroController@totalfaltasmaestro');

Route::get('total-faltas-maestros/{id}','MaestroController@totalfaltasmaestro_promedio');
Route::get('promedios-inc2/{id}','MaestroController@promedios_suplencia');
Route::get('promedios-inc3/{id}','MaestroController@promedios_retardo');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' =>'Auth\PasswordController',
	]);

/*
Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');

Route::resource('movie','MovieController');

Route::get('index','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
*/
/*Route::get('/','UsuarioController@index');*/
/*Route::get('maestro/{id}','MaestroController@show');*/
/*Route::get('faltas/{id}','FaltasController@registrofalta');*/

//Route::resource('log','LogController');
//Route::get('auth','logController@store');

//Route::resource('usuario','UsuarioController');

Route::resource('usuario','UsuarioController');
Route::resource('maestro','MaestroController');
Route::resource('faltas','FaltaController');
Route::resource('semana','SemanaController');
//Route::get('auth','authController@store');


/*Route::get('faltas/indexfalta','MaestroFaltaController@indexfalta');*/

/*Rute::resource('maestrofalta','MaestroFaltaController');*/

/*Route::get('faltas/faltasmto','MaestroFaltaController@ver_faltas_maestro');*/

/*Route::get('ver', function(){
  	
  	$faltas = Maestro::find($id_empleado)->detalle_faltas;S
	$lista= '<ul>';
	foreach ($falta as $item) {
		$lista .='<li>';
		$lista .='<h2> ' . $item ->maestro['id_empleado'] .' </h2>';
		$lista .='<div> ' . $item ->maestro['fecha_falta'] .' </div>';
		$lista .='<div> ' . $item ->maestro['hora_falta'] .' </div>';
		$lista .='</li>';
	}
	$lista .= '</ul>';
	return $lista;

	});
*/
//<form method="post" action="{{url('login/usuario_login')}}">
    //{{csrf_field()}}

//{!! Form::open(['url'=>'usuario_login','method'=>'GET', 'class'=>'navbar-form pull-left']) !!} 
  //{!!Form::open(['route'=>'auth.usuario_login','method'=>'POST'])!!}
 //<input type="text" class="form-control">
//Route::get('loyout/master','LogController@master');



//Route::get('layouts/admin','LogController@admin');
//Route::get('auth/login','LogController@Login');
Route::get('admin','FrontController@admin');
Route::post('/login','LogController@postLogin');

//Route::get('auth/logout','LogController@logout');
Route::get('logout','LogController@logout');

Route::get('/',function() {
return view('Auth/login');
});


//Route::auth();

Route::get('home',function() {
	
		return view('home');
});


Route::get('welcome', function () {
    return view('welcome');
});
