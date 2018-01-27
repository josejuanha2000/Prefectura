@extends('layouts.admin')
@include('alerts.request')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div datos class="col-sm-8">
			<table class="table table-bordered table-hover table-striped table-condensed">
				<h4>
				<tr class ="success">
					<th>ID_ Periodo</th>
					<th>Descripción</th>
					<th>Operación</th>					
				</tr>
				</h4>

				@foreach($periodop as $periodos)
				<tbody>

				<td>{{$periodos->id_periodo}}</td>
				<!--				
				<td><a href="/maestro/periodo/{{$periodos->id }}">{{$periodos->id_periodo}}</a>	</td>
				-->
				<td>{{$periodos->descripcion}}</td>					
				<td>
					 <a href="{!! url('ver-maestros-periodo/'.$periodos->id_periodo) !!}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-user"></span> Maestros</a>

					 <a href="{!! url('total-faltas-maestros/'.$periodos->id_periodo) !!}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-eye-open"> Promedios</a>
				</td>
				
				<!--
				<td>
					 <a href="{!! url('ver-maestros-periodo/') !!}" class="btn btn-success">Maestros</a>
				</td>
				-->

				</tbody>

				@endforeach

			</table>

			
		<div>
	</div>
</div>
@stop