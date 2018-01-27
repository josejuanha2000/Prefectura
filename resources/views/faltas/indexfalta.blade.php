@extends('layouts.admin')
@include('alerts.request')
@section('content')
<h4>Faltas de: {{$nombrem->nombre_empleado}} </h4>
<h5>Total de Faltas: {{$faltasp->count()}}</h5>
<h5>Frecuencias x Semana: {{$nombrem->frecuencia}}</h5>
<table class="table table-bordered table-hover table-striped table-condensed">
	<tr class ="info">
		<th>Id_Empleado</th>
		<th>Fecha_Falta</th>
		<Th>Hora_Falta</Th>
		<th>Aula</th>
		<th>Incidencia</th>
		<th>Semana</th>
		<th>Periodo</th>
		<th>Operacion</th>
	</tr>
	@foreach($faltasp as $detalle_faltas)
	<tbody>
		<td>{{$detalle_faltas->id_empleado}}</td>
		<td>{{$detalle_faltas->fecha_falta}}</td>
		<td>{{$detalle_faltas->hora->hora_falta}}</td>
		<td>{{$detalle_faltas->aula->id_aula}}</td>
		<td>{{$detalle_faltas->incidencia->tipo_incidencia}}</td>
		<td>{{$detalle_faltas->semana->id_semana}}</td>
		<td>{{$detalle_faltas->id_periodo}}</td>
		<td>
		{!!link_to_route('faltas.edit', $title = 'Editar', $parameters = $detalle_faltas->id, $attributes = ['class'=>'btn btn-primary btn-xs'])!!}
		</td>
	</tbody>
	@endforeach
</table>
@stop