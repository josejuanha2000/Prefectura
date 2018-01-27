@extends('layouts.admin')
@include('alerts.request')
@section('content')
<h1> Editar Catedratico:  {!! $maestro->nombre_empleado !!} </h1>
<hr/>
{!! Form::model($maestro,['method'=>'PATCH','action' => ['PruebaMaestrosController@update', $maestro->id]]) !!}

	@include ('pruebamaestro.form', ['submitButtonText'=> 'Actualizar Maestro'])

{!! Form::close() !!}

@include('errors.list')


@stop