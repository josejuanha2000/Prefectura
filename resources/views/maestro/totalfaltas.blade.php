@extends('layouts.admin')
@include('alerts.request')
@section('content')
@include('maestro.search_semana')
<div class="container-fluid">
<input type="button" value= "Imprimir" onclick="this.style.visibility='hidden';  print();this.style.visibility=''"/>
<div class="row">
 	<!--<input type="button" value= "Imprimir" onclick="window.print()">-->
</div>
	<div class="row">
		<div datos class="col-sm-12">
		@if(isset($tipo_incidencia))
			<h4>Filtro: {{$tipo_incidencia}}</h4>
			<h4>Desde Semana {{$desde}}, hasta semana {{$hasta}}</h4>
		@endif
		
			<table class="table table-bordered table-hover table-striped table-condensed data-table">
				<thead>
					<tr class ="success">
						<th>Id_Empleado </th>
						<th>Titulo</th>
						<th>Nombre</th>
						<th>Frecuencia</th>
						<th>Total Faltas</th>
						<th>Promedios</th>
						<th>Detalle Faltas</th>
					</tr>
				</thead>
				<tbody>
					@foreach($faltasp as $faltas)
					<tr>
						<td>{{$faltas->id_empleado}}</td>
						<td>{{$faltas->titulo}}</td>
						<td>{{$faltas->nombre_empleado}}</td>
						<td>{{$faltas->frecuencia}}</td>
						
						<td>
						{{$faltas->numeroDeFaltas($desde,$hasta,$periodo,$tipo_incidencia)}}
						</td>
				
						<td>
						{{$faltas->promedioDeFaltas($desde,$hasta,$periodo,$tipo_incidencia)}}
						</td>
						
						<td>

						<button class="btn btn-info btn-xs" onclick="window.location = '{!! 
							url('ver-faltas-periodo/'.$faltas->id_empleado.'/'.$periodo.
							$parametros_de_busqueda) !!}'">Ver faltas</button>

							{{-- 
							<button class="btn btn-warning btn-xs" onclick="window.location = '{!! 
							url('ver-faltas-periodo/'.$faltas->id_empleado.'/'.$periodo.
							$parametros_de_busqueda."&ver_todas=true") !!}'">Ver todas</button>
							--}}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
		<div>
	</div>
</div>
</div>
@stop