<div class="container-fluid"> 
   <div class="row" >
      <div class="col-xs-4">

        <div class="form-group">
            {!!Form::label('Clave Empleado:')!!}
         	  {!!Form::text('id_empleado',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del usuario'])!!}
      	</div>

      	<div class="form-group">
            {!!Form::label('Titulo:')!!}
            {!!Form::text('titulo',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del correo'])!!}
         </div>

        <div class="form-group">
            {!!Form::label('Nombre Empleado:')!!}
            {!!Form::text('nombre_empleado',null,['class'=>'form-control', 'placeholder'=>'Ingresa el pasword'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('Frecuencia:')!!}
            {!!Form::text('frecuencia',null,['class'=>'form-control', 'placeholder'=>'Ingresa una descripcion'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('Activo:')!!}
            {!!Form::text('act',null,['class'=>'form-control', 'placeholder'=>'Ingresa una descripcion'])!!}
        </div>
    </div>
  </div>
</div>

      
