@extends('plantilla')
@section('seccion')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    @if ( session('mensaje') )
      <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif
    <!--Formulario para el ingreso de informacion-->
    <form method="POST" action="{{ route('notas.crear') }}">
      @csrf
        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2"/>
        <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2"/>
        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>
    <div class="container my-4">
        <h1 class="display-4">Notas</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripción</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($notas as $item)
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td><a href="{{route('notas.detalle', $item)}}">{{$item->nombre}}</a></td>
                  <td>{{$item->descripcion}}</td>
                  <td>@mdo</td>
                </tr>
            @endforeach()
          </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
@endsection