<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Semana;

class SemanaController extends Controller {
 
 public function index()
	{
		$semanap=Semana::lists('semana','id');
    	return view('faltas.indexsemana',compact('semanap'));

	}
}