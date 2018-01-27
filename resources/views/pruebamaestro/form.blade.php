<div class="form-group">
	{!! Form::label('id_empleado', 'No_Empleado:') !!}
	{!! Form::text('id_empleado', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('titulo', 'Titulo:') !!}
	{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('nombre_empleado', 'Nombre Empleado:') !!}
	{!! Form::text('nombre_empleado', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('frecuencia', 'Frecuencias:') !!}
	{!! Form::text('frecuencia', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('act', 'Activo:') !!}
	{!! Form::text('act', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('published_at', 'Fecha de Registro:') !!}
	{!! Form::input('date','published_at', $maestro->published_at,  ['class' => 'form-control']) !!}
</div>

<div class="from-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>