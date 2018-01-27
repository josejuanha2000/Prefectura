@extends('layouts.admin')
@section('content')
@include('alerts.request')
	<div class="form-grup">
   	 {!!Form::model($falta,['route'=> ['faltas.update',$falta->id],'method'=>'PUT'])!!}
	   
	    @include('faltas.forms.editfaltasmto')

			<div class="=col-sm-2 col-md-2">
    			<div class="customDiv">
    				<button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-cog"></span> Actualizar </button>
     			</div>	
   			</div>
	    
	   {{-- {!!Form::submit('Actualizar',['class'=>'btn  btn-success btn-xs'])!!} --}}


   	  {!!Form::close()!!}
			
			{!!Form::open(['route'=> ['faltas.destroy',$falta->id],'method'=>'DELETE'])!!}
			
			<div class="=col-sm-2 col-md-2">
    			<div class="customDiv">
    				<button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Eliminar </button>
     			</div>	
   			</div>

			{{--	{!!Form::submit('Eliminar',['class'=>'btn  btn-danger btn-xs'])!!}--}}
			
   	  {!!Form::close()!!}
	</div>

@stop

