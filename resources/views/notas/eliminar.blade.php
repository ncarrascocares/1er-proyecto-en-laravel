@extends('plantilla')

@section('seccion')
	
	<form action="{{ route('notas.eliminar')}}" method="POST">
		@method('DELETE')
		@csrf
		
		<button type="submit" .btn btn-danger btn-sm>Eliminar</button>
	</form>

@endsection