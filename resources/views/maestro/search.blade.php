{!! Form::open(['url'=>'ver-maestros-periodo/'.$periodo,'method'=>'GET', 'class'=>'navbar-form pull-right']) !!} 
  <div class="form-group">
  	<div class="input-group">
  	  	<input type="text" calss="form-control" name="searchText" placeholder="Nombre..." value="{{$searchText}}"> 

  		<span class="input-group-btn-sm">
  			<button type="submit" class ="btn btn-primary btn-xs"><span class="glyphicon glyphicon-search"></span> Buscar </button>
		</span>
	</div>
</div>

 <div class="form-group">
  	<div class="input-group">
  	  	<input type="text" calss="form-control" name="searchTexte" placeholder="Numero..." value="{{$searchTexte}}" autofocus=""> 

  		<span class="input-group-btn-sm">
  			<button type="submit" class ="btn btn-primary btn-xs"><span class="glyphicon glyphicon-search"> </span> Buscar </button>
		</span>
	</div>
</div>
{!!Form::close()!!}


