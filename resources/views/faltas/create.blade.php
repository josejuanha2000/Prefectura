@extends('layouts.admin')
@section('content')
@include('alerts.request')

  {!!Form::open(['route'=>'faltas.store','method'=>'POST'])!!}
   		@include('faltas.forms.faltasmto')
   		<div class="form-grup">
   			<div class="=col-md-2 col-md-offset-5" >
	    		{!! Form::submit('Registrar Falta',['class'=>'btn btn-primary ']) !!}   
            </div>
	    </div>
	    
 	{!!Form::close()!!}
 	
  @stop