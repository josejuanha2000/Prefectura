
@extends('layouts.admin')
@section('content')
@include('alerts.errors')
<nav class="navbar-form navbar-left">
  <div class="container-fluid">
    {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
    
    <div class="form-group">
       {!!Form::label('Correo:')!!}
        <!-- {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa el 
        nombre del correo'])!!} -->
        <input type="text" class="form-control">
    </div>

      <div class="form-group">
        {!!Form::label('Password:')!!}
        <!--{!!Form::text('password',null,['class'=>'form-control', 'placeholder'=>'Ingresa el pasword'])!!} -->
        <input type="text" class="form-control">        
      </div>

       {!!Form::submit('Iniciar',['class'=>'btn btn-primary form-control']) !!}
     {!!Form::close()!!}

 </div>
 </navar>



 

      