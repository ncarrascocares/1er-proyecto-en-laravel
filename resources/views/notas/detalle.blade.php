@extends('plantilla')

@section('seccion')

<h1>Detalle de la nota:</h1>
<h4>id: {{$nota->id}}</h4>
<h4>Nombre: {{$nota->id}}</h4>
<h4>Detalle: {{$nota->descripcion}}</h4>

@endsection

