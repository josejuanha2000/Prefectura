<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Maestro;
use App\Falta;
use Session;
use Redirect;

class MaestroFaltaController extends Controller
{
   /* public function faltas_maestro($id)
    {
    $maestrosp=Maestro::find($id);
    $faltasp=Falta::all();
	$faltasm=$maestrosp->faltas();
	
	return view("faltas.forms.faltasmto")
	->with("Maestro",$maestrosp)
	->with("falta",$faltasp);
	}	*/
	
		public function index()
	{
	
	/*	$semanap=Semana::lists('semana','id');*/

		$faltasp=Falta::paginate(5);
		return view('faltas.index',compact('faltasp'));
	}
				 
}
