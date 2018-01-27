@include('alerts.request')

  <h4>Catedrático: 
      {{$maestrop->nombre_empleado}}
  </h4>
  <hr/>
<div class="row" >
  <div class="col-xs-4">
    <!-- <div class="customdiv"></div> -->
      <div class="container-fluid">
        <div class="form-group has-success">
          {!!Form::label('Clave Empleado:')!!}
       	  {!!Form::text('id_empleado',$maestrop->id_empleado,['class'=>'form-control', 'placeholder'=>'Ingresa id'])!!}
       	</div>

        <div class="form-group has-success">
          {!! Form::label('fecha_falta:') !!}
          {!! Form::input('date','fecha_falta', date('Y-m-d'), ['class'=> 'form-control','placeholder'=>'Ingresa fecha']) !!}
        </div>

         <div class="form-group has-success ">
              {!! Form::label('Semana:')!!}
              {!! Form::select('id_semana',$semanap,null,['class'=>'form-control', 'placeholder'=>'Ingresa Semana'])!!}
         </div>
          <div class="form-group has-success-disabled">
              {!! Form::label('Periodo:')!!}
              {!! Form::text('id_periodo',$maestrop->id_periodo,['class'=>'form-control', 'placeholder'=>'Ingresa Periodo'])!!}
          </div>
      </div>   
    </div> 
</div>    
  <table class="table table-bordered table-hover table-striped table-condensed">
      <tr class ="danger">
        <span>Incidencia</span>
          <th><label><input  type="checkbox" name="checkbox1"  value="INC1"/> 1a Incidencia</th></label>
          <th><label><input  type="checkbox" name="checkbox2"  value="INC2"/> 2a Incidencia</th></label>
          <Th><label><input  type="checkbox" name="checkbox3"  value="INC3"/> 3a Incidencia</Th></label>
          <th><label><input  type="checkbox" name="checkbox4"  value="INC4"/> 4a Incidencia</th></label>
          <th><label><input  type="checkbox" name="checkbox5"  value="INC5"/> 5a Incidencia</th></label>
          <th><label><input  type="checkbox" name="checkbox6"  value="INC6"/> 6a Incidencia</th></label>
        </tr>
        <!-- 1a inc -->
      <td>
          <div class="form-group has-success" >
            {!!Form::label('Hora:')!!}
            {!! Form::select('hora_falta',$horap,['class'=>'form-control', 'placeholder'=>'Ingresa hora']) !!}
          </div>
          <div class="form-group has-success">
           {!! Form::label('Aula:')!!}
           {!! Form::select('id_aula',$aulap,['class'=>'form-control', 'placeholder'=>'Ingresa aula']) !!}
          </div>
          <div class="form-group has-error">
            {!! Form::label('Incidencia:')!!}
            {!! Form::select('tipo_incidencia',$incidenciap,['class'=>'form-control', 'placeholder'=>'Ingresa Incidencia']) !!}
          </div>
      </td>

      <!-- 2a inc -->
      <td>
        <div class="form-group has-success">
          {!!Form::label('Hora:')!!}
          {!! Form::select('hora_falta2',$horap2,['class'=>'form-control', 'placeholder'=>'Ingresa hora']) !!}
         </div>
         <div class="form-group has-success">
          {!! Form::label('Aula:')!!}
          {!! Form::select('id_aula2',$aulap2,['class'=>'form-control', 'placeholder'=>'Ingresa aula']) !!}
       </div>
       <div class="form-group has-error">
         {!! Form::label('Incidencia:')!!}
          {!! Form::select('tipo_incidencia2',$incidenciap2,['class'=>'form-control', 'placeholder'=>'Ingresa Incidencia']) !!}
       </div>
    </td>
    <!-- 3a inc -->
    <td>
        <div class="form-group has-success">
          {!!Form::label('Hora:')!!}
          {!! Form::select('hora_falta3',$horap3,['class'=>'form-control', 'placeholder'=>'Ingresa hora']) !!}
         </div>
         <div class="form-group has-success">
          {!! Form::label('Aula:')!!}
          {!! Form::select('id_aula3',$aulap3,['class'=>'form-control', 'placeholder'=>'Ingresa aula']) !!}
       </div>
       <div class="form-group has-error">
         {!! Form::label('Incidencia:')!!}
          {!! Form::select('tipo_incidencia3',$incidenciap3,['class'=>'form-control', 'placeholder'=>'Ingresa Incidencia']) !!}
       </div>
    </td>
    <!-- 4a inc -->
    <td>
        <div class="form-group has-success">
          {!!Form::label('Hora:')!!}
          {!! Form::select('hora_falta4',$horap4,['class'=>'form-control', 'placeholder'=>'Ingresa hora']) !!}
         </div>
         <div class="form-group has-success">
          {!! Form::label('Aula:')!!}
          {!! Form::select('id_aula4',$aulap4,['class'=>'form-control', 'placeholder'=>'Ingresa aula']) !!}
       </div>
       <div class="form-group has-error">
         {!! Form::label('Incidencia:')!!}
          {!! Form::select('tipo_incidencia4',$incidenciap4,['class'=>'form-control', 'placeholder'=>'Ingresa Incidencia']) !!}
       </div>
    </td>
    <!-- 5a inc -->
    <td>
        <div class="form-group has-success">
          {!!Form::label('Hora:')!!}
          {!! Form::select('hora_falta5',$horap5,['class'=>'form-control', 'placeholder'=>'Ingresa hora']) !!}
         </div>
         <div class="form-group has-success">
          {!! Form::label('Aula:')!!}
          {!! Form::select('id_aula5',$aulap5,['class'=>'form-control', 'placeholder'=>'Ingresa aula']) !!}
       </div>
       <div class="form-group has-error">
         {!! Form::label('Incidencia:')!!}
          {!! Form::select('tipo_incidencia5',$incidenciap5,['class'=>'form-control', 'placeholder'=>'Ingresa Incidencia']) !!}
       </div>
    </td>
    <!-- 6a inc -->
    <td>
        <div class="form-group has-success">
          {!!Form::label('Hora:')!!}
          {!! Form::select('hora_falta6',$horap6,['class'=>'form-control', 'placeholder'=>'Ingresa hora']) !!}
         </div>
         <div class="form-group has-success">
          {!! Form::label('Aula:')!!}
          {!! Form::select('id_aula6',$aulap6,['class'=>'form-control', 'placeholder'=>'Ingresa aula']) !!}
       </div>
       <div class="form-group has-error">
         {!! Form::label('Incidencia:')!!}
          {!! Form::select('tipo_incidencia6',$incidenciap6,['class'=>'form-control', 'placeholder'=>'Ingresa Incidencia']) !!}
       </div>
    </td>
 </table>

          
