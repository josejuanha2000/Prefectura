<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\MaestroCreateRequest;
use App\Http\Requests\MaestroUpdateRequest;
use App\Http\Requests\MaestroFormRequest;
use App\Maestro;
use App\Periodo;
use App\Falta;
use App\Semana;
use App\User;
use Session;
use Redirect;
use DB;
class MaestroController extends Controller	{
	
	public function index(Request $id)
    {

   			$maestrosp=Maestro::where('id_periodo',$id)->OrderBy('nombre_empleado','asc')->get();
			
						//->where('nombre_empleado','LIKE','%'.$query.'%')
						//->OrderBy('nombre_empleado','asc')->get();
			
			$periodo = Periodo::where('id_periodo',$id)->first()->id;

					//return $request->input();

		return view('maestro.index',compact('maestrosp','periodo'),['maestros'=>$maestrosp,'searchText'=>$query]);
			
		//return view('maestro.index',compact('maestrosp'),["periodo"=>$id]);
    	return view('maestro.index',compact('maestrosp'));
		//}
 	/*$maestrosp=Maestro::onlyTrashed()->paginate(10);*/ /*Muestra solo registros eliminados*/
 
	/*$maestro = Maestro::find($id);*/
	/*    $maestrosp = Maestro::where('id_periodo',$id)->get();	*/
   	/*$maestrosp = Maestro::orderBy('nombre_empleado','asc')->paginate(20);*/
    	/*$maestro=Maestro::all();
    	    	return $maestro;*/
	}

	public function vermaestros_periodo($id, request $request)
	{
		if ($request)
			{
			$query=trim($request->get('searchText'));
			$querye=trim($request->get('searchTexte'));

			$maestrosp=Maestro::where('id_periodo',$id)
						->where('nombre_empleado','LIKE','%'.$query.'%')
						->where('id_empleado','LIKE','%'.$querye.'%')
						->OrderBy('nombre_empleado','asc')->get();

			//$maestrose=Maestro::where('id_periodo',$id)
			//			->where('id_empleado', [
            //        $querye])
			//			->OrderBy('id_empleado','asc')->get();
			
			//return $maestrose;
			$periodo = Periodo::where('id_periodo',$id)->first()->id;
			//$semana=Semana::where('id_semana',$id)->get();


			//$faltasp=Falta::where('id_empleado',$id)
		    //          ->where('id_periodo',$periodo)->get();
				//	    ->groupby ('id_empleado')->count();

		
	        //select id_empleado, count(id_empleado) as faltasm from detalle_faltas
		//	group by id_empleado 

			//return $faltasm;

			//return view('maestro.index',["maestros"=>$maestrosp,"searchText"=>$query]);

		//return $request->input();

 			//return view('maestro.index',compact('maestrosp','periodo'));
			//return view('maestro.index',compact('maestrosp','periodo'),["maestros"=>$maestrosp,"periodo"=>$periodo,"searchText"=>$query]);

			return view('maestro.index',compact('maestrosp','maestrose'),["periodo"=>$id,"searchText"=>$query,"searchTexte"=>$querye]);

			
			//return view('maestro.index',["maestros"=>$maestrosp,"periodo"=>$id,"searchText"=>$query]);
		}	
	}
//////////////////////////////////////////////////////////////////
	public function totalfaltasmaestro_promedio($id, request $request)
	{
				
		if ($request->has('id_semana_desde'))
			{
			//return $request->input();
						
			$semanai=Semana::lists('id_semana','id');
			$semanaf=Semana::lists('id_semana','id');

			//$query=trim($r equest->get('searchText',$maestrosp));
			$query1=trim($request->get('id_semana_desde',$semanai));
			//$query1=Semana::find('id_semana',$semanai)->get();
			$query2=trim($request->get('id_semana_hasta',$semanaf));

			$desde = $request->id_semana_desde;
			$hasta = $request->id_semana_hasta;
			$tipo_incidencia = $request->id_tipo_incidencia;

			//return $hasta; 
		
			//$maestrosp=Maestro::where('id_periodo',$id)
			//			->where('nombre_empleado','LIKE','%'.$query.'%')
			//			->OrderBy('nombre_empleado','asc')->get();
			//$faltasp = Maestro::all();
			$faltasp = Maestro::where('id_periodo',$id)->get();
			//return $faltasp;
			 
			$parametros_de_busqueda = "?id_semana_desde=".$request->id_semana_desde."&id_semana_hasta=".$request->id_semana_hasta."&id_tipo_incidencia=".$request->id_tipo_incidencia;
			
			return view('maestro.totalfaltas',compact('faltasp','semanai','semanaf','desde','hasta','tipo_incidencia','query1','query2','parametros_de_busqueda'),["periodo"=>$id,"semanai"=>($query1),"semanaf"=>($query2)]);
					
	   	//////////////////////////////noo////////////////////////////////////
			$maestrosp=Maestro::where('id_periodo',$id)
						//->where('nombre_empleado','LIKE','%'.$query.'%')
						->OrderBy('nombre_empleado','asc')->get();

			$periodo = Periodo::where('id_periodo',$id)->first()->id;

						
		   	$faltasp=DB::table('maestros as a')
			->join('detalle_faltas as c','a.id_empleado','=','c.id_empleado')
			->select('a.id_empleado','a.titulo','a.nombre_empleado','a.frecuencia','c.tipo_incidencia','c.id_semana',

		    DB::raw('count(*) as totfal'))
			//->where('nombre_empleado','LIKE','%'.$query.'%')
			->where('c.tipo_incidencia','=','1')
			//->where('c.id_semana','>=',$query1,'and','c.id_semana','<=',$query2)
			//->wherein('c.id_semana',[$query1,$query2])
			//->where('c.id_semana','<=',$query1)
			//->where('c.id_semana','>=',$query2)

			->groupby('c.id_empleado')
			->OrderBy('nombre_empleado','asc')->get();
			/////////////////////////////////////////////////////////	
		}
			$semanai=Semana::lists('id_semana','id');
			$semanaf=Semana::lists('id_semana','id');
			$query=trim($request->get('searchText'));
			$query1=trim($request->get('id_semana_desde',$semanai));
			//$query1=Semana::find('id_semana',$semanai)->get();
			$query2=trim($request->get('id_semana_hasta',$semanaf));

			$desde = $request->id_semana_desde;
			$hasta = $request->id_semana_hasta;
			$faltasp = collect();


			return view('maestro.totalfaltas',compact('faltasp','semanai','semanaf','query1','query2','desde','hasta'),["periodo"=>$id,"semanai"=>($query1),"semanaf"=>($query2)]);
	}

///////////////////////////////////////////////////////////////////////
public function promedios_suplencia($id, request $request)
	{
		if ($request)
			{
			//$query=trim($request->get('searchText'));
			$semanai=Semana::lists('id_semana','id');
			$semanaf=Semana::lists('id_semana','id');

			$query1=($request->get('id_semana','id'));
			$query2=($request->get('id_semana','id'));
			
			$maestrosp=Maestro::where('id_periodo',$id)
						//->where('nombre_empleado','LIKE','%'.$query.'%')
						->OrderBy('nombre_empleado','asc')->get();

			$periodo = Periodo::where('id_periodo',$id)->first()->id;
					  	   
			$faltasp=DB::table('maestros as a')
			->join('detalle_faltas as c','a.id_empleado','=','c.id_empleado')
			->select('a.id_empleado','a.titulo','a.nombre_empleado','a.frecuencia','c.tipo_incidencia','c.id_semana',

		    DB::raw('count(*) as totfal'))
			//->where('nombre_empleado','LIKE','%'.$query.'%')
			->where('c.tipo_incidencia','=','2')
			//->where('c.id_semana','>=',$query1,'and','c.id_semana','<=',$query2)
			//->where('c.id_semana','>=',$query1,'and','c.id_semana','<=',$query2)
						//->where('id_semana','<=',$query2)
			//,'and','c.id_semana','<=',$query2)

			->groupby('c.id_empleado')
			->OrderBy('nombre_empleado','asc')->get();

			return view('maestro.totalfaltas',compact('faltasp','semanai','semanaf'),["periodo"=>$id,"semanai"=>$query1,"semanaf"=>$query2]);

		}	
	}

//////////////////////////////////////////////////////////////////////	
	public function show($id)
	{
		$maestro=Maestro::findOrFail($id);

		return view('maestro.show', compact('maestro'));

		//dd($maestro);
	}

    public function create()

	{
				return view('maestro.create');
			}

	public function store(MaestroCreateRequest $request)
	{
		/*return $request->input();;*/

		Maestro::create([
			'id_empleado' => $request['id_empleado'],
			'titulo'=> $request['titulo'],
			'nombre_empleado'=> $request['nombre_empleado'],
			'frecuencia'=> $request['frecuencia'],
			'act'=> $request['act'],
			]);
		

		return redirect('maestro.index')->with('message','Datos registrados correctamente');
	}

	public function edit($id)
	{
		$maestro = Maestro::find($id);
		return view('maestro.edit',['maestro'=>$maestro]);
	}

	public function update($id, MaestroUpdaterequest $request)
	{

		$maestro = Maestro::find($id);
		$maestro->fill($request->all());
		/*return $maestro;*/
		//return $request; 
		$maestro->save();
		Session::flash('message','Datos editados correctamente');
       //return $this->vermaestros(Maestro::where('id_periodo',$id));
		/*$maestrosp=Maestro::where('id_periodo',$id)->OrderBy('nombre_empleado','asc')->get();*/
		/*return Redirect::to('/ver-maestros/'.$maestro->id_periodo);*/
		 /*return view('maestro.index',compact('maestrosp'));*/
		//return Redirect::to('/maestro');

		return Redirect('/ver-maestros-periodo/'.$maestro['id_periodo']);
    	
       	//return view('maestro.index',compact('maestrosp'));
	}

	public function destroy($id)
	{
		 /*Maestro::destroy($id);*/
		 $maestro = Maestro::find($id);
		 $maestro->delete();

		 Session::flash('message','Datos Eliminado correctamente');
		//return Redirect::to('/maestro');
		 return Redirect('/ver-maestros-periodo/'.$maestro['id_periodo']);

	}	


}
