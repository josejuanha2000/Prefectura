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
           <!-- <img src="img/logofdc.jpeg" width="100" alt=""> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         <!-- <link rel="stylesheet" type="text/css" href="/css/estilos.css"> -->
          <!--<link rel="stylesheet"  href="{{asset('css/estilos.css')}}"> -->
          
  </head>

  <body>
    <header>
      <div>
       <!-- <img src="/img/logofdc.jpeg" width="100" alt="Logotipo"> -->
      </div>
    </header>
    <!-- Optional theme -->
    <!-- Latest compiled and minified JavaScript -->
     <!--  <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> -->
     <!-- <nav class="navbar navbar-inverse navbar-fixed-top"> -->
    <nav class="navbar navbar-default">  
       <div class="container-fluid">  
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="  #bs-example-navbar-collapse-1" ria-expanded="false" aria-controls="navbar"> 
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>   </button> 
                   <!-- <a class="navbar-brand btn-default btn-ms hvr-grow-shadow" href="{{url('/')}}"><span class="glyphicon-homr" style="padding-right:20px"></span>FACDYC</a> -->
              <a href="#" class="navbar-brand">FACDYC-Prefectura</a>
               <ul class="nav nav-pills">
             <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle hvr-glow" data-toogle="dropdown" role="button" aria-expanded="false">PEFECTURA<span class="caret"></span></a>-->
           
                <li role="presentation" class="active">
        
                <!-- <a href="{!! url('maestro/periodo') !!}" class="btn btn-success"><span -->
             
                <a href="{!! url('maestro/periodo') !!}" class="btn btn-success btn-xs"><span 
                           class="glyphicon glyphicon-home"></span> Periodos</a></li> 
        
             <!-- <li role="presentation"><a href="#">PROMEDIOS</a></li> -->

            <!-- <ul class="nav navbar-nav navbar-right"> -->
             <ul class="nav navbar-top-links navbar-right"> 
                @if (Auth::check())
                      <!-- <li><a href="{!! url('maestro/index') !!}">Usuario</a></li> -->
                    {!!Auth::user()->name!!}<i class="fa fa-sign-out fa-fw"></i> <i class=
                    "fa fa-caret-down"></i> 

                    <li class="divider"></li>
                      <a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                @else
                    <li><a href="{!! url('auth/login') !!}">Iniciar Sesion</a></li> 
                    
                @endif
              </ul> 
              <!--  
              <li class="dropdown">
               
                    <a href="#" class="dropdown-toggle hvr-glow-shadow" data-toggle="dropdown" role="button">Prefectura <span class="caret"></span> 
                  </a> 
            
                <ul class="dropdown-menu" role="menu">
               
                    <li><a href="#">lista Maestros</a></li>
                    <li><a href="#">lista faltas</a></li>
                    <li role="presentation" class="active"><a href="#">Maestro</a></li>
                    <li role="presentation"><a href="#">Faltas</a> </li>
                    <li role="presentation"><a href="#">Promedio</a></li> 
                    <li class="divider"></li>
                    
                  <li><a href="{!! url('maestro/periodo') !!}">Periodo</a></li> -->
                  <!--  
                    <li><a href="{!! url('maestro/periodo') !!}">[1] Ausencias</a></li>
                    <li><a href="{!! url('maestro/periodo') !!}">[2] Suplencia</a></li>
                    <li><a href="{!! url('maestro/periodo') !!}">[3] Retardo</a></li>
                    <li><a href="{!! url('maestro/periodo') !!}">[4] Asistencia Parcial</a></li>
                    <li><a href="{!! url('maestro/periodo') !!}">[5] Nofirma</a></li>
                    <li><a href="{!! url('maestro/periodo') !!}">[6] Falta Justificada</a></li>
                    <li><a href="{!! url('maestro/periodo') !!}">    Todas</a></li>   -->
                    <!-- <li><a href="{!! url('faltas') !!}">Faltas</a></li> -->
                    <!-- <li><a href="{!! url('maestro/index') !!}">Promedio</a></li> 
               </ul>

             </li>
              -->
           </ul>
             </div>
    </nav>


   <div class="container" 
      <!-- /.FLASH MESSAGE -->
      @if (Session::has('flash_message'))
          <div class="alert alert-success {{ Session::has('flash_message_important') ? 'alert-important':'' }}">
             @if (Session::has('flash_message_important'))
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             @endif   
           
               {{ Session::get('flash_message') }}

           </div>

       @endif  
 
     @yield('content')

    </div><!-- /.container --> 
    

    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>

    
    <script>
      $('div.alert').not('.alert-important').delay(3000).slideUp(300);
     </script>
     <script type="text/javascript">
      $(document).ready(function() {
         $('.data-table').DataTable({
          theme: 'bootstrap'
         });
     } );
     </script>
    <!-- /.FLASH MESSAGE -->

  </body>
  
</html>