@extends('app')

@section('content')

<h3> People I Like:</h3</h3>
<ul>
	@foreach ($people as $person)
		<li>{{ $person }}</li>
	@endforeach

</ul>

<p>
   Quieres conocer la historia hacerca de mi
</p>

@stop


