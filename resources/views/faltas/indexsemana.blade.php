@extends('layouts.admin')
@include('alerts.request')
@section('content')

   <div class="form-group">
          {!!Form::label('Clave Empleado:')!!}
       	  {!!Form::text('id_empleado',null,['class'=>'form-control', 'placeholder'=>'Ingresa id'])!!}
    	</div>
    	<div class="form-group">
          {!!Form::label('Fecha_falta:')!!}
          {!!Form::text('fecha_falta',null,['class'=>'form-control', 'placeholder'=>'Ingresa fecha'])!!}
       </div>
      
      <div class="form-group">
          {!!Form::label('Hora_Falta:')!!}          
          {!!Form::text('hora_falta',null,['class'=>'form-control', 'placeholder'=>'Ingresa falta'])!!}
      </div>

      <div class="form-group">
          {!!Form::label('Aula:')!!}
          {!!Form::text('aula',null,['class'=>'form-control', 'placeholder'=>'Ingresa Aula'])!!}
      </div>

      <div class="form-group">
          {!!Form::label('Incidencia:')!!}
          {!!Form::text('incidencia',null,['class'=>'form-control', 'placeholder'=>'Ingresa una Incidencia'])!!}
      </div>
  <div class="form-group">
       {!!Form::label('Semana:')!!}
		{!! Form::select('semana',$semanap) !!}
   </div>
@endsection
