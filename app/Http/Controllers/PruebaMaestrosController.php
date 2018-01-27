<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\http\Requests;
use App\Http\Requests\PruebaMaestroRequest;
use App\Http\Requests\PruebaMaestroRequestUpdate;
use App\Maestro;
Use Carbon\Carbon;
use Session;
use Redirect;


class PruebaMaestrosController extends Controller {
	public function _construct()
	{
		$this -> middleware ('auth',['except' => ['index','show']]);
	}

    public function index()
	{
		/*$maestros=Maestro::latest('published_at')->unpublished()->get();*/
		$maestros=Maestro::latest('published_at')->published()->get();
		/*$maestros=Maestro::latest('published_at')->where('published_at','<=', Carbon::now())->get();*/
		/*$maestros=Maestro::latest('published_at')->get();
				/*$maestros=Maestro::latest('id_empleado')->get();*/
		/*$maestros=Maestro::latest('id_empleado')->get();*/
		/*$maestros=Maestro::oldest('id_empleado')->get();*/
		/*$maestros=Maestro::order_by('id_empleado','desc')->get();*/
		/*$maestros=Maestro::all();*/
		//return $maestros;

		return view('pruebamaestro.index', compact('maestros'));
	}

	public function show(Maestro $maestro)
	{
		/*dd('show');*/
		/*return $id;*/

		/*$maestro=Maestro::findorFail($id);*/

		/*return $maestro;*/

		/*dd($maestro->published_at);*/

	return view ('pruebamaestro.show', compact('maestro'));

	}

	public function create()
	{
		return view('pruebamaestro.create');
	}
	public function store(PruebaMaestroRequest $request)
	{

		Maestro::create($request->all());

		
		Session()->flash('flash_message', 'Maestro fue dado de alta!');
		/*Session()->flash('flash_message_important', true);  /* QUITAR TIEMPO DE DURACION DE MENSAJE */
		

		/*Auth::user()->maestros()->save($Maestro);*/

		return redirect('pruebamaestro');

		/*$input = Request::all();******/

		/*$input = Maestro::get('id_empleado');*/

		/*$input['deleted_at'] = Carbon::now();*/
		/*$input['published_at'] = Carbon::now();*/
		/*$input = Request::get('nombre_empleado');*/

		/*Maestro::create($input);*******/
	
		/*return $input;*/
	}
	
	public function edit($id)
	{
		$maestro=Maestro::findorFail($id);
		return view ('pruebamaestro.edit', compact('maestro'));
	}
	public function update($id, PruebaMaestroRequestUpdate $request)
	{
		$maestro=Maestro::findorFail($id);
		$maestro->update($request->all());
		return redirect('pruebamaestro');
		
	}

}