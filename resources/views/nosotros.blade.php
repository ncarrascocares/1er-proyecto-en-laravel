@extends('plantilla')

@section('seccion')
<h1>Este es mi equipo de trabajo</h1>

@foreach($equipo as $item)
	
	<a href="{{ route('nosotros',$item)}}" class="h4 text-danger">{{ $item }}</a><br>

@endforeach
	
	@if(!empty($nombre))

		@switch($nombre)

			@case($nombre == 'Nicolas')
			<h2 class="mt-5">El nombre es {{ $nombre }}:</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			@break

			@case($nombre == 'Juanito')
			<h2 class="mt-5">El nombre es {{ $nombre }}:</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			@break

			@case($nombre == 'Pedrito')
			<h2 class="mt-5">El nombre es {{ $nombre }}:</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			@break
		@endswitch

	@endif

@endsection