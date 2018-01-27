<h4>Catedrático: {{$nombremaestro->nombre_empleado}}</h4>
@include('alerts.request')
  <div class="row" >
    <div class="col-xs-4">
      <div class="form-group">
          {!!Form::label('Clave Empleado:')!!}
          {!!Form::text('id_empleado',null,['class'=>'form-control', 'placeholder'=>'Ingresa id'])!!}
      </div>
       <div class="form-group">
            {!! Form::label('fecha_falta:') !!}
            {{--{!! Form::input('date','fecha_falta', date('Y-m-d'), ['class'=> 'form-control','placeholder'=>'Ingresa fecha']) !!} --}}           
            {!! Form::date('fecha_falta',$fecha_f,['class'=> 'form-control','placeholder'=>'Ingresa fecha']) !!}            
       </div>

       <div class="form-group">
         {!!Form::label('Hora_Falta:')!!}
         {!! Form::select('hora_falta',$horap,null,['class'=>'form-control', 'placeholder'=>'Ingresa hora']) !!}
      </div>

      <div class="form-group">
         {!! Form::label('Aula:')!!}
         {!! Form::select('id_aula',$aulap,null,['class'=>'form-control', 'placeholder'=>'Ingresa aula']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('Incidencia:')!!}
        {!! Form::select('tipo_incidencia',$incidenciap,null,['class'=>'form-control', 'placeholder'=>'Ingresa Incidencia']) !!}
      </div>
     
      <div class="form-group">
         {!! Form::label('Semana:')!!}
         {!! Form::select('id_semana',$semanap,null,['class'=>'form-control', 'placeholder'=>'Ingresa Semena'])!!}
      </div>
      <div class="form-group">
         {!! Form::label('Periodo:')!!}
         {!! Form::text('id_periodo',null,['class'=>'form-control', 'placeholder'=>'Ingresa Periodo'])!!}
      </div>
    </div>
  </div>
      