@extends('layouts.admin')
@include('alerts.request')
@section('content')

	<table class="table">
		<thead> 
			<th>Nombre      </th>
			<th>Correo      </th>
			<th>Departamento </th>
			<th>Operacion   </th>
		</thead>

	@foreach($usersp as $users)

	<tbody>
		
		<td>{{$users->name}}</td>
		<td>{{$users->email}}</td>
		<td>{{$users->departamento}}</td>

		<td>

		{!!link_to_route('usuario.edit', $title='Editar', $parameters = $users->id, $attributes = ['class'=>'btn btn-primary'])!!}

		</td>
	</tbody>

	@endforeach

	</table>

	{!!$usersp->render()!!}

@stop




