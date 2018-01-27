@extends('layouts.admin')
@include('alerts.request')
@section('content')
<div class="container-fluid">
<div class="row">
 	@include('maestro.search')
 </div>
	<div class="row">
		<div datos class="col-sm-12">
			<table class="table table-bordered table-hover table-striped table-condensed">
				<tr class ="success">
					<th>ID_Empleado </th>
					<th>Titulo</th>
					<Th>Nombre</Th>
					<th>Frecuencia</th>
					<th>Operación</th>
				</tr>
				@foreach($maestrosp as $maestros)
				<tbody>
					<td>{{$maestros->id_empleado}}</td>
					<td>{{$maestros->titulo}}</td>
					<td>{{$maestros->nombre_empleado}}</td>
					<td>{{$maestros->frecuencia}}</td>
					
					<td>
					{!!link_to_route('maestro.edit', $title = 'Editar', $parameters = $maestros->id, $attributes = ['class'=>'btn btn-primary btn-xs'] )!!}
					
			        <!--<a href="{!! url('reg-faltas/'.$maestros->id_empleado) !!}" class="btn btn-info">Reg_Faltas </a> -->

			        <a href="{!! url('reg-faltas/'.$maestros->id.'/'.$periodo) !!}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-pencil"></span> Registrar Faltas</a>

			         <!--<a href="{!! url('ver-faltas/'.$maestros->id_empleado) !!}" class="btn btn-success">Ver Faltas 	</a> -->
			         
			         <a href="{!! url('ver-faltas/'.$maestros->id_empleado.'/'.$periodo) !!}" class="btn btn-danger btn-xs"> <span class="glyphicon glyphicon-eye-open"></span> Incidencias</a>
      				</td>
				</tbody>
				@endforeach
			</table>
			
		<div>
	</div>
</div>
@stop