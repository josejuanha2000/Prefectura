@section('content')
@include('alerts.errors')
@include('alerts.request')

<!--<nav class="navbar-form navbar-left">  -->

<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Lista de maestros con promedios y faltas">
    <meta name="author" content="Facdyc-Cetia">
    <link rel="icon" href="../../favicon.ico">


    <title>FACULTAD DE DERECHO</title>

        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->

       <!-- Latest compiled and minified CSS -->
       
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
    <!-- <img src="img/logofdc.jpeg" width="100" alt=""> -->
    
      <!-- <link href="stylesheet" type="text/css" href="css/usuario.css" /> -->
      <link rel="stylesheet" type="text/css" href="css/usuario.css" /> 
  </head>
  <body>
   <div class="container"> 
      <div class="row">
        <div class="col-xs-3 col-xs-offset-4">
        
          <img src="img/logofdc.jpg" class="pull-rigth  "/>
           <div class="panel panel-info">
             <div class="panel-heading">
                <h3 class="panel-title"> Inicio de Sesión</h3>
             </div> 
            <div class="panel-body">
              <Form method="post" action="{{url('/login')}}">
               {{csrf_field()}}
            
               <div class="input-group input-group-sm input-group-right"> 
                    <div class="form-group">
                      {!!Form::label('Usuario:')!!}

                       <div class="col-sm-10">
                          {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa el usuario'])   !!} 
                      </div>
                    </div>
                    <div class="form-group">
                       {!!Form::label('contrasena','Contraseña:')!!} 
                      <div class="col-sm-10">
                           {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
                      </div>
                    </div>
               </div>
            
               <!--<input type="text" class="form-control"> -->       
               <div class="btn btn-default btn-sm " >
                     {!!Form::submit('Ingresar',['class'=>'btn btn-primary form-control']) !!}
                    {!!Form::close()!!}
                </div>
               
                <div class="panel-footer">
                   ¿Has olvidado tu contraseña o no tienes una cuenta creada? Comunicate a CETIA
                </div>
              </Form>
            </div>
         </div>
   </body>
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script>
      $('div.alert').not('.alert-important').delay(3000).slideUp(300);
     </script>
    <!-- /.FLASH MESSAGE -->
</html>
 <!--</navar>-->

 