@extends('layouts.admin')
@include('alerts.request')
@section('content')
<h1>Maestros</h1>

@foreach ($maestros as $maestro)
	<maestro>
		<h2>
			<a href="/maestro/{{ $maestro->id }}">{{$maestro->id_empleado}}</a>
			
		</h2>

		<div class="body">{{ $maestro->nombre_empleado }}</div>
</maestro>
@endforeach

@stop