@extends('layouts.admin')
@include('alerts.request')
@section('content')

<h1>{{ $maestro->id_empleado }}</h1>
<maestro>
{{ $maestro->nombre_empleado}}
</maestro>

@stop