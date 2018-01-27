<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\http\Controllers\Controller;
use Auth;
use Session;
use Redirect;
use App\User;

class LogController extends Controller
    {

        public function _construct()
        {

         $this->middleware('guest',['except'=>'logout']);

         }
        
       public function postLogin(LoginRequest $Request)
        {

    // return $Request->email;

         if(Auth::attempt(['email'=>$Request['email'],'password'=>$Request['password']]))

        {
            return Redirect::to('maestro/periodo');
            //return Redirect::to('admin');
                }
            Session::flash('message-error','Error al iniciar Sesion..');

           return Redirect::to('/');

        }

        public function usuarioLogin(LoginRequest $Request)
        {
        
          return $Request->email;

         }
   
           //return redirect('maestro/periodo')->with('message','Datos registrados correctamente');
    public function logout()
           {
             Auth::logout();
             return Redirect::to('/');

         }
    }
