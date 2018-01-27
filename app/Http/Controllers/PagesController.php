<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller {
		public function index()
	{
		$title="Welcome  To Laravel";
		return view('pages.index')->with ('title', $title);
	}

	public function about()	{
   		 /*$first='JOSE JUAN';
   		 $last='HERNANDEZA ALANIS';
   		 return view('pages.about',compact('first'));*/
   		 $people=[
   		 'Juan Angel','Luis Alberto','Marian','Angel Esau'];
   		 return view('pages.about', compact('people'));
	}

	public function services() {
		$data=array('title'=>'Services:','services'=>['Web desing','Programing','Implementation']);
		return view('pages.services')->with($data);
	}

	public function contact() {
		return view('pages.contact');
	}
	
}
