@extends('layouts.admin')
@section('content')

 @include('alerts.request')
  {!!Form::open(['route'=>'maestro.store','method'=>'POST'])!!}
   		@include('maestro.forms.mto')

      {!!Form::submit('Registrar',['class'=>'btn btn-primary form-control']) !!}
      
    {!!Form::close()!!}
 
@stop