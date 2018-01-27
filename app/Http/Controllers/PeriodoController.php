<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Periodo;
use App\Maestro;
use App\User;
use DB;

class PeriodoController extends Controller
{
	public function __construct()
	{
		//$this->middleware('auth');
		//$this->middleware('login');
		//$this -> middleware ('auth',['except' => ['index','show']]);
	}

    public function index()
	{
        /*$faltasp = Falta::where('id_empleado',$id)->get();*/
		//$periodop = Periodo::orderBy('id_periodo','dec')->paginate(20);
		$periodop = Periodo::orderBy('id','dec')->paginate(10);
		//return $periodop;
    	return view('maestro.periodo',compact('periodop'));
		/*dd($maestro);*/
	}
}
