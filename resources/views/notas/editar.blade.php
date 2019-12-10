@extends('plantilla')

@section('seccion')
	<h1>Editar nota {{$nota->id}}</h1>
	   <form method="POST" action="{{ route('notas.crear') }}">
	   	<!--
		* HTML no puede enviar el método PUT, por lo tanto utilizamos la directiva de blade method('PUT') la cual será oculta en nuestra 
		* aplicación pero permitirá ejecutar la actualización de un elemento.
	   	-->
	   	@method('PUT')
	   	
      	<!--
        * Este token se usa para verificar que el usuario autenticado es el que realiza las solicitudes a la aplicación.
    	-->
      @csrf
      
      <!--Validacion para los campos nombre y comentario, si no hay registros enviara el mensaje que esta dentro-->
      @error('nombre')
        <div class="alert alert-danger">
          Campo nombre es obligarorio
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
           </button>
        </div>
      @enderror
      
      @error('descripcion')
        <div class="alert alert-danger">
          Campo descripcion es obligaroria
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
           </button>
        </div>
      @enderror

        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{ old("nombre")}}"/>
        <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" value="{{ old("descripcion")}}"/>
        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>
@endsection