@extends('layouts.admin')
@section('content')
@include('alerts.request')

	{!!Form::model($maestro,['route'=> ['maestro.update',$maestro->id],'method'=>'PUT'])!!}
	     @include('maestro.forms.mto')

    <div class="=col-sm-2 col-md-2">
    	<div class="customDiv">
    		{!!Form::submit('Actualizar',['class'=>'btn btn-primary btn-xs form-control'])!!}
     		{!!Form::close()!!}
     	</div>	
     </div>

{!!Form::open(['route'=> ['maestro.destroy',$maestro->id],'method'=>'DELETE'])!!}

	<div class="=col-sm-2 col-md-2">
    	<div class="customDiv">
    		<button class="btn btn-danger "><span class="glyphicon glyphicon-trash"></span> Eliminar </button>
     	</div>	
   	</div>

@stop
