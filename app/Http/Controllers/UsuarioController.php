<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\http\Requests\UserCreateRequest;
use App\http\Requests\UserUpdateRequest;
use App\http\Controllers\Controller;
use App\user;
use Session;
use Redirect;
use Destroy;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
//use Illuminate\Support\Facades\Redirect;
use DB;

class UsuarioController extends Controller {

	/*public function __construct(){
		$this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
	}*/

	/*public function find(Route $route){
		$this->user = User::find($route->getParameter('usuario'));
		
	} */

	/*public function index()
	{
   		 return view('index');
	}
	public function contacto()
	{
		return view('contacto');
	}
	public function reviews()
	{
		return view('reviews');
	}*/

	public function index()
	{	
		/*$usersp = User::all();*/
		/*$usersp = User::onlyTrashed()->paginate(5);*/
		
		$usersp = User::paginate(50);

		return view('usuario.index',compact('usersp'));
    	
	}

	public function create()
	{
		return view('usuario.create');
	}
	public function store(UserCreateRequest $request)
	{
		/*User::create($request->all());*/

		User::create([
			'name' => $request['name'],
			'email'=> $request['email'],

			/*'password'=> bcrypt($request['password']),*/

			'password'=> $request['password'],
			'departamento'=> $request['departamento'],

			]);

			return redirect('/usuario')->with('message','Usuario Guardado correctamente');

			/*return redirect('/usuario')->with('message','store');*/
	}

		/*return "Usuario Registrado";*/
		
	

	/*public function show($id)
	{
		/*$usersp=User::find($id)
		return view('usuario.edit',['users'==>]);*/
      /*return "usuario show";*/

	/*}*/

	public function edit($id)
	{
		$user=User::find($id);
		return view('usuario.edit',['user'=>$user]);
		
		/*return view('usuario.edit',['user'=>$this->user]);*/

      /*return "usuario edit";*/
	}

	public function update($id, UserUpdateRequest $request)
	{
		$user = User::find($id);
		$user->fill($request->all());
		$user->save();
		
		/*$user->user->fill($request->all());
		$this->user-> save();*/

		Session::flash('message','Usuario actualizado correctamente');
		return Redirect::to('/usuario');
	}
	public function destroy($id)
	{
		/*User::destroy($id);*/
		$user = User::find($id);
		$user->delete();
		Session::flash('message','Usuario Eliminado correctamente');
		return Redirect::to('/usuario');
	}
}