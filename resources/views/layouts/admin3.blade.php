<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>FACDYC-CETIA</title>
</head>
<body>
  <div class="container">
  <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container-fluid"  
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="  #bs-example-navbar-collapse-1" 
            aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <!--
          <a class="navbar-brand btn-default btn-ms hvr-grow-shadow" href="{{url('/')}}"><span class="glyphicon-homr" style="padding-right:20px"></span>Control de faltas</a>
          -->
          <a href="#" class="navbar-brand">FACDYC</a>
        </div>
     
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav nav-pills">

             <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle hvr-glow" data-toogle="dropdown" role="button" aria-expanded="false">PEFECTURA<span class="caret"></span></a>-->
              <li role="presentation" class="active"><a href="#">MAESTROS</a></li>
              
              <li role="presentation"><a href="#">PROMEDIOS</a></li>


              <li class="dropdown">
                  <a href="#" class="dropdown-toggle hvr-glow-shadow" data-toggle="dropdown" role="button">PREFECTURA <span class="caret"></span> 
                  </a>
            
                <ul class="dropdown-menu" role="menu">
                  
                    <li><a href="#">lista Maestros</a></li>
                    <li><a href="#">lista faltas</a></li>

                    
                    <li role="presentation" class="active"><a href="#">Maestro</a></li>
                    <li role="presentation"><a href="#">Faltas</a> </li>
                    <li role="presentation"><a href="#">Promedio</a></li> 
                  
                    <li><a href="{!! url('maestro/index') !!}">Lista de Maestros</a></li>
                    <li><a href="{!! url('maestro/index') !!}">Alta Maestros</a></li>
                    <li class="divider"></li>
                    <li><a href="{!! url('maestro/index') !!}">Alta Maestros</a></li>
                    <li><a href="{!! url('maestro/index') !!}">Alta Maestros</a></li>
                   

               </ul>
             </li>
           </ul>

        </div><!--/.nav-collapse -->

        </nav>
     
    @yield('content')
  </div>
   
</body>
</html>
