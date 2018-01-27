<!DOCTYPE html>

    {!! Form::open()!!}
        <div class="form-group">
            {!! Form::label('Nombre:')!!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del usuario'])!!}
      </div>
    {!! Form::close()!!}


<form action="">
    <div class="form-group">
        <label for="">Nombre</label>
        <imput type="text" class="form-control">  
    </div>
    <div class="form-group">
        <label for="">Correo</label>
        <imput type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <imput type="text" class="form-control">
    </div>
    <button class="btn btn-primary">Registrar</button>
</form>

