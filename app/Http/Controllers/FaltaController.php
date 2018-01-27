<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\FaltaCreateRequest;
use App\Http\Requests\FaltaUpdateRequest;
use App\Falta;
use App\Semana;
use App\Hora;
use App\Aula;
use App\Maestro;
use App\Incidencia;
use App\Periodo;
Use Carbon\Carbon;
use Session;
use Redirect;
use DB;

class FaltaController extends Controller {
	public function verFaltasPeriodo($id,$periodo, request $request)
	{
			$nombrem = Maestro::where('id_empleado',$id)
		          ->where('id_periodo',$periodo)->first();

		if (request()->ver_todas) {
			$faltasp=Falta::where('id_empleado',$id)
		              ->where('id_periodo',$periodo)
		              ->get();
		              return $faltas;

		}else {
			$faltasp=Falta::where('id_empleado',$id)
		              ->where('id_periodo',$periodo)
		              ->whereBetween('id_semana',
		              	[request()->id_semana_desde,request()->id_semana_hasta])
		              ->where('tipo_incidencia',request()->id_tipo_incidencia)
		              ->get();
		}

		$promedio = $nombrem->promedioDeFaltas(
			request()->id_semana_desde,
			request()->id_semana_hasta,
			$periodo,
			request()->id_tipo_incidencia);

		$parametros_de_busqueda = "?id_semana_desde=".$request->id_semana_desde."&id_semana_hasta=".$request->id_semana_hasta."&id_tipo_incidencia=".$request->id_tipo_incidencia;


	return view('faltas.index',compact('faltasp','nombrem','promedio','tipo_incidencia','parametros_de_busqueda'));
	}

	public function verFaltas($id,$periodo)
	{

		//$faltasp=Falta::where('id_empleado',$id)->get();
		$nombrem = Maestro::where('id_empleado',$id)
		          ->where('id_periodo',$periodo)->first();

		$faltasp=Falta::where('id_empleado',$id)
		         	    ->where('id_periodo',$periodo)->get();
		             // return $faltasp;

		//return $parametros_de_busqueda;

		/*$faltasp = Falta::where('id_empleado',$id)->paginate(20);*/

        //return $parametros_de_busqueda;

				//return Redirect::to('/ver-faltas/'.$faltasp->id_empleado);
		return view('faltas.indexfalta',compact('faltasp','nombrem','promedio'));
		
		}

	public function registrofalta($id,$periodo=0)
	{
		/*$faltasp=Falta::where('id_empleado',$id)->paginate();*/
		/*$maestrosp = Maestro::find($id);*/
	     $maestrop=Maestro::find($id);

	     //$periodop=Periodo::find($periodo);
	     $periodop=Periodo::where('id_periodo',$periodo)->get();

	   // return $maestrop; 
        //return $periodop;

        //$maestrop=Maestro::find($id)->where('id_periodo',$periodo)->get();
        //$maestrop=Maestro::where('id_empleado',$id)->where('id_periodo',$periodo)->get();
        //$periodop=Periodo::find('id_periodo');
		//return $periodo;

		$idp=Maestro::lists('id_empleado','id');

		//INC1
		$horap=Hora::lists('hora_falta','id');
		$aulap=Aula::lists('id_aula','id');
		$incidenciap=Incidencia::lists('tipo_incidencia','id');
		$semanap=Semana::lists('id_semana','id');
		//$periodop=Periodo::lists('id_periodo','id');
		//$periodop=Periodo::where('id_periodo',$periodo)->get();
		//return $periodop;

		//INC2
		$horap2=Hora::lists('hora_falta','id');
		$aulap2=Aula::lists('id_aula','id');
		$incidenciap2=Incidencia::lists('tipo_incidencia','id');
		//INC3
		$horap3=Hora::lists('hora_falta','id');
		$aulap3=Aula::lists('id_aula','id');
		$incidenciap3=Incidencia::lists('tipo_incidencia','id');
		//INC4
		$horap4=Hora::lists('hora_falta','id');
		$aulap4=Aula::lists('id_aula','id');
		$incidenciap4=Incidencia::lists('tipo_incidencia','id');
		//INC5
		$horap5=Hora::lists('hora_falta','id');
		$aulap5=Aula::lists('id_aula','id');
		$incidenciap5=Incidencia::lists('tipo_incidencia','id');
		//INC5
		$horap6=Hora::lists('hora_falta','id');
		$aulap6=Aula::lists('id_aula','id');
		$incidenciap6=Incidencia::lists('tipo_incidencia','id');

	
				/*return view('faltas.create',compact('faltasp'));*/

		/*return view('faltas.create',compact('maestro','idp','horap','aulap','incidenciap','semanap'));*/

		return view('faltas.create',compact('maestrop','idp','horap','aulap','incidenciap','semanap','periodop','horap2','aulap2','incidenciap2','horap3','aulap3','incidenciap3','horap4','aulap4','incidenciap4','horap5','aulap5','incidenciap5','horap6','aulap6','incidenciap6'));

	}

	   public function index(Request $request)
	{
	   			/*$semanap=Semana::lists('semana','id');*/
		
       /* $faltasp=Falta::all();*/
        /*$maestro=Maestro::find($id);*/
        /*$faltasp=$maestrosp->faltas();	*/
        /*return $request->input();*/
		/*$faltasp=Falta::where('id_empleado',$id)->paginate(5);*/
		
		//$faltasp=Falta::paginate(20);

		$faltasp = Falta::where('id_periodo',$id)->get();

		//return $faltasp;		


		return view('faltas.index',compact('faltasp'));
	} 
	/*public function index()
    {
        $maestrosp=Maestro::find($id);
    $faltasp=Falta::all();
	$faltasm=$maestrosp->faltas();
	
	return view("faltas.index")
	->with("Maestro",$maestrosp)
	->with("falta",$faltasm);
	}*/
	public function create()
	{

        /*$empleado=Maestro::lists('id_empleado','id');*/
		/*$faltasp = Falta::lists('id_empleado');*/

		        /*$faltasp=Falta::where('id_empleado','=')-paginate(5);*/
		        /*$faltasp=Falta::paginate(5);*/
                 /*return view('faltas.create',compact('faltasp'));*/

		/*$faltasp=lists('id_empleado');
		$horap=Hora::lists('hora_falta','id');
		$aulap=Aula::lists('aula','id');
		$incidenciap=Incidencia::lists('incidencia','id');
		$semanap=Semana::lists('semana','id');	*/
			
		/*return view('faltas.create');*/
		/*return view('faltas.create',compact('faltasp','horap','aulap','incidenciap','semanap'));*/
	}

	public function store(FaltaCreateRequest $request)
	{
		/*return $request->input();;*/
		/*return ('si pasa por aqui');*/
	//if ($_POST['checkbox1'] !="")
	//{
		//$conn=mysql_connect('localhost','root','');
		//mysql_select_db('prefectura',$conn);

		 		
 	//INC1
		$horap=$_POST['hora_falta'];
		$aulap=$_POST['id_aula'];
		$incidenciap=$_POST['tipo_incidencia'];
	

		if (isset($_POST['checkbox1'])) {
			Falta::create([
			'id_empleado' => $request['id_empleado'],
			'fecha_falta'=> $request['fecha_falta'],
			'hora_falta'=> $request['hora_falta'],
			'id_aula'=> $request['id_aula'],
			'tipo_incidencia'=> $request['tipo_incidencia'],
			'id_semana'=> $request['id_semana'],
			'id_periodo'=> $request['id_periodo'],
			]);
			}
	
	//INC2
	  	$horap2=$_POST['hora_falta2'];
   		$aulap2=$_POST['id_aula2'];
		$incidenciap2=$_POST['tipo_incidencia2'];
		if (isset($_POST['checkbox2'])) {
			//return $horap2;
			Falta::create([
			'id_empleado' => $request['id_empleado'],
			'fecha_falta'=> $request['fecha_falta'],
			'hora_falta'=> $request['hora_falta2'],
			'id_aula'=> $request['id_aula2'],
			'tipo_incidencia'=> $request['tipo_incidencia2'],
			'id_semana'=> $request['id_semana'],
			'id_periodo'=> $request['id_periodo'],
			]);
			}

	//INC3
		 $horap3=$_POST['fecha_falta'];
		 $aulap3=$_POST['hora_falta'];
		 $incidenciap3=$_POST['tipo_incidencia'];
		if (isset($_POST['checkbox3'])) {
			Falta::create([
			'id_empleado' => $request['id_empleado'],
			'fecha_falta'=> $request['fecha_falta'],
			'hora_falta'=> $request['hora_falta3'],
			'id_aula'=> $request['id_aula3'],
			'tipo_incidencia'=> $request['tipo_incidencia3'],
			'id_semana'=> $request['id_semana'],
			'id_periodo'=> $request['id_periodo'],
			]);
			}

	 //INC4
		 $horap4=$_POST['fecha_falta'];
		 $aulap4=$_POST['hora_falta'];
		 $incidenciap4=$_POST['tipo_incidencia'];	
		if (isset($_POST['checkbox4'])) {
			Falta::create([
			'id_empleado' => $request['id_empleado'],
			'fecha_falta'=> $request['fecha_falta'],
			'hora_falta'=> $request['hora_falta4'],
			'id_aula'=> $request['id_aula4'],
			'tipo_incidencia'=> $request['tipo_incidencia4'],
			'id_semana'=> $request['id_semana'],
			'id_periodo'=> $request['id_periodo'],
			]);
			}

	//INC5
		 $horap5=$_POST['fecha_falta'];
		 $aulap5=$_POST['hora_falta'];
		 $incidenciap5=$_POST['tipo_incidencia'];
		if (isset($_POST['checkbox5'])) {
			Falta::create([
			'id_empleado' => $request['id_empleado'],
			'fecha_falta'=> $request['fecha_falta'],
			'hora_falta'=> $request['hora_falta5'],
			'id_aula'=> $request['id_aula5'],
			'tipo_incidencia'=> $request['tipo_incidencia5'],
			'id_semana'=> $request['id_semana'],
			'id_periodo'=> $request['id_periodo'],
			]);
			}
		
	//INC6
		$horap6=$_POST['fecha_falta'];
		$aulap6=$_POST['hora_falta'];
		$incidenciap6=$_POST['tipo_incidencia'];
		if (isset($_POST['checkbox6'])) {
			Falta::create([
			'id_empleado' => $request['id_empleado'],
			'fecha_falta'=> $request['fecha_falta'],
			'hora_falta'=> $request['hora_falta6'],
			'id_aula'=> $request['id_aula6'],
			'tipo_incidencia'=> $request['tipo_incidencia6'],
			'id_semana'=> $request['id_semana'],
			'id_periodo'=> $request['id_periodo'],
			]);
			}
		//var_dump($_POST);
	
		 //$Incidencia='';
		/*
		if (isset($_POST['checkbox1'])) {
			{
			$sql1=mysql_query("INSERT INTO detalle_faltas(id_empleado,hora_falta,id_aula,tipo_incidencia,id_semana,id_periodo) VALUES ('$idp','$horap','$aulap','$incidenciap','$semanap','$periodop')");
			}
			echo $sql;
		}

		if (isset($_POST['checkbox2'])) {
			{
			$sql2=mysql_query("INSERT INTO detalle_faltas(id_empleado,hora_falta,id_aula,tipo_incidencia,id_semana,id_periodo) VALUES ('$idp','$horap2','$aulap2','$incidenciap2','$semanap','$periodop')");
			}
			echo $sql2;
		}
			//return $_POST['checkbox2'];
		if ($_POST['checkbox3'] = "INC3") {
			{
			$sql3=mysql_query("INSERT INTO detalle_faltas(id_empleado,hora_falta,id_aula,tipo_incidencia,id_semana,id_periodo) VALUES ('$idp','$horap3','$aulap3','$incidenciap3','$semanap','$periodop')");
			}
			echo $sql3;
		}

		
		 if ($_POST['checkbox4'] !="")
			$cadena4=("INSERT INTO detalle_faltas(id_empleado,hora_falta,id_aula,tipo_incidencia,id_semana,id_periodo) VALUES ('$idp','$horap4','$aulap4','$incidenciap4','$semanap','$periodop')");
			echo $cadena4;

		if ($_POST['checkbox5'] !="")
			$cadena5=("INSERT INTO detalle_faltas(id_empleado,hora_falta,id_aula,tipo_incidencia,id_semana,id_periodo) VALUES ('$idp','$horap5','$aulap5','$incidenciap5','$semanap','$periodop')");
			echo $cadena5;

		if ($_POST['checkbox6'] !="")
			$cadena6=("INSERT INTO detalle_faltas(id_empleado,hora_falta,id_aula,tipo_incidencia,id_semana,id_periodo) VALUES ('$idp','$horap6','$aulap6','$incidenciap6','$semanap','$periodop')");
			echo $cadena6;
			*/


		//REGRESA NUEVAMENTE A LA CAPTURA DE FALTAS

   		//return $this->registrofalta(Maestro::where('id_empleado',$request['id_empleado'])->first()->id);
		
		//return Redirect('/reg-faltas/'.$request->id_empleado)->with('message','Incidencia registrada correctamente');

		return Redirect('/ver-maestros-periodo/'.$request['id_periodo'])->with('message','Incidencia registrada correctamente');
		
		//}
	}
	public function edit($id,request $request)
	{
				//$maestrop=Maestro::find($id)->id_empleado;
		//$nombrem = Maestro::where('id_empleado',$id);
		              //->where('id_periodo',$periodo)->first();
		//$nombrem = Maestro::where('id_empleado',$this->$id);
                //->where('id_periodo',$id)->first()
		$falta = Falta::find($id);
		
 		$idempleado = ($falta['id_empleado']);
 		$nombremaestro = Maestro::where('id_empleado',$idempleado)->first();
		$fecha_f=($falta['fecha_falta']); 
       	//return $nombremaestro;	
		//return $fecha_f;

		$idp=Falta::lists('id_empleado','id');
		$horap=Hora::lists('hora_falta','id');
		$aulap=Aula::lists('id_aula','id');
		$incidenciap=Incidencia::lists('tipo_incidencia','id');
		$semanap=Semana::lists('id_semana','id');
		$periodop=Periodo::lists('id_periodo','id');
		//return $request;
		 $parametros_de_busqueda = "?id_semana_desde=".$request->id_semana_desde."&id_semana_hasta=".$request->id_semana_hasta."&id_tipo_incidencia=".$request->id_tipo_incidencia;
		//return $request;
		return view('faltas.edit',compact('idp','fecha_f','horap','aulap','incidenciap','semanap','periodop','nombremaestro','idempleado','parametros_de_busqueda'),['falta'=>$falta]);
 	}

	public function update($id, FaltaUpdaterequest $request)
	{
		
		$falta = Falta::find($id);
		$idempleado = ($falta['id_empleado']);
		$falta->fill($request->all());
		$falta->save();
		
		//return $falta;

		Session::flash('flash_message','Datos actualizados correctamente');
	
        /*return Redirect('/reg-faltas/'.$request->id_empleado)->with('message','Datos registrados correctamente');*/

		/*return Redirect::to('/ver-maestros/'.$falta->id_periodo);*/
		/*return Redirect::to('/ver-maestros/'.$request->id_empleado)->with ($falta->id_periodo);*/

		//return Redirect::to('/ver-faltas-periodo/'.$falta->id_empleado);

		//return view('faltas.edit'.$falta->id);
		//return Redirect::to('/ver-faltas/'.$falta['id_periodo']);
		// $parametros_de_busqueda = "?id_semana_desde=".$request->id_semana_desde."&id_semana_hasta=".$request->id_semana_hasta."&id_tipo_incidencia=".$request->id_tipo_incidencia;

		// return $request;

		return Redirect('/ver-faltas/'.$falta['id_empleado'].'/'.$falta->id_periodo);
			
	}
	public function destroy($id)
	{
		 /*Falta::destroy($id);*/
		 
		 $falta = Falta::find($id);
		 $falta->delete();
		 /*Session()->flash('flash_message', 'Datos actualizados correctamente!');*/

		 Session::flash('flash_message','Datos Eliminado correctamente');
		 		//return Redirect::to('/maestro');
		 return Redirect::to('/ver-faltas/'.$falta->id_empleado.'/'.$falta->id_periodo);
	}	
}
?>