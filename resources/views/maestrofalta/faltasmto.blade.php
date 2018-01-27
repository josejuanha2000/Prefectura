@extends('layouts.admin')
@include('alerts.request')
@section('content')

  
<table class="table">
	<thead>
		<th>Id_Empleado</th>
		<th>Fecha_Falta</th>
		<Th>Hora_Falta</Th>
		<th>Aula</th>
		<th>Incidencia</th>
		<th>Semana</th>
		<th>Operacion</th>
	</thead>
	@foreach($faltasp as $detalle_faltas)
	<tbody>
		<td>{{$detalle_faltas->id_empleado}}</td>
		<td>{{$detalle_faltas->fecha_falta}}</td>
		<td>{{$detalle_faltas->hora_falta}}</td>
		<td>{{$detalle_faltas->aula}}</td>
		<td>{{$detalle_faltas->incidencia}}</td>
		<td>{{$detalle_faltas->semana}}</td>
		<td>

		{!!link_to_route('faltas.edit', $title = 'Editar', $parameters = $detalle_faltas->id, $attributes = ['class'=>'btn btn-prymary'])!!}
		</td>
		
	</tbody>
	@endforeach

</table>

{!!$faltasp->render()!!}

@stop