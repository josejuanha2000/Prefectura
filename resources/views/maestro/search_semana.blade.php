  <!--<input type="button" value= "Imprimir" onclick="this.style.visibility='hidden';print();this.style.visibility=''" /> -->

{!! Form::open(['url'=>'total-faltas-maestros/'.$periodo,'method'=>'GET', 'class'=>'navbar-form pull-right']) !!} 
       <div class="form-group pull-rigth">
        <div class="form-group ">
          {!! Form::label('Desde semana:')!!}
            {!! Form::Select('id_semana_desde',$semanai,['class'=>'form-control', 'placeholder'=>'Desde']) !!}
        </div>

       <div class="form-group has-success">
          {!! Form::label('Hasta semana:')!!}
            {!! Form::Select('id_semana_hasta',$semanaf,['class'=>'form-control', 'placeholder'=>'Hasta']) !!}
       </div>

        <div class="form-group has-success">
          {!! Form::label('Tipo incidencia:')!!}
            <select name="id_tipo_incidencia" class="form-control">
               @foreach(App\Incidencia::all() as $incidencia)
                <option value="{{$incidencia->id}}">{{$incidencia->tipo_incidencia}}</option>
               @endforeach
            </select>
        </div>

        <span class="input-group-btn-sm">
      			<button type="submit" class ="btn btn-primary btn-xs"><span class="glyphicon glyphicon-search"></span> Buscar </button>
    		</span>
      </div>

 
 
{!!Form::close()!!}



<!--   
<div class="container-fluid"> 
	<div class="form-group">
		<span class="input-group-btn">
			<button class="btn btn-primary">Incidencias </button>
			<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> <span class="caret"><span></button>
				<ul class="dropdown-menu">
					<li><a href="{!! url('total-faltas-maestros/'.$periodo) !!}">Ausencia</a><li>
					<li><a href="{!! url('promedios-inc2/'.$periodo) !!}">Suplencia</a><li>
					<li><a href="#">03</a><li>
					<li><a href="#">04</a><li>
					<li><a href="#">05</a><li>
				</ul>
			       
    </div>


</div>
-->
