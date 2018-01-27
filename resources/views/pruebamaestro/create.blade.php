@extends('layouts.admin')
@include('alerts.request')
@section('content')
<h1> Nuevo Maestro </h1>
<hr/>
{!! Form::model([$maestro = new Maestro,'url'=>'pruebamaestro']) !!}

	@include ('pruebamaestro.form', ['submitButtonText'=>'Agregar Maestro'])

{!! Form::close() !!}


@include('errors.list')


@stop