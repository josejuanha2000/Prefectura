@extends('layouts.admin')
@include('alerts.request')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div datos class="col-sm-12">
			<table class="table table-bordered table-hover table-striped table-condensed">
				<tr class ="success">
					<th>ID_EMPLEADO </th>
					<th>TITULO</th>
					<Th>NOMBRE</Th>
					<th>FRECUENCIA</th>
					<th>OPERACION</th>
				</tr>
				@foreach($maestrosp as $maestros)
				<tbody>
					<td>{{$maestros->id_empleado}}</td>
					<td>{{$maestros->titulo}}</td>
					<td>{{$maestros->nombre_empleado}}</td>
					<td>{{$maestros->frecuencia}}</td>
				
				<td><input  type="checkbox" name="checkbox"  value="Ausencia"/>Ausencia </td>
				<td><input  type="checkbox" name="checkbox"  value="Suplencia"/>Suplencia</td>
				<td><input  type="checkbox" name="checkbox"  value="Retardo"/>Retardo</td>
				<td><input  type="checkbox" name="checkbox"  value="Asistencia Parcial"/>Asistencia Parcial</td>
				<td><input  type="checkbox" name="checkbox"  value="No firma"/>No firma</td>
				<td><input  type="checkbox" name="checkbox"  value="Falta Justificada"/>Falta Justificada</td>
				
				</tbody>

				@endforeach
				
				<td>
					<a href="{!! url('ver-maestros/'.$maestros) !!}" class="btn btn-success">Maestros</a>
				</td>
				
				
			</table>
			
		<div>

	</div>

</div>

@stop