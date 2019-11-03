<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>AbastCam</title>
  <style>
  .i{display: none;}
  .i{font-size: 3em;}
  a:not(last-child){
    margin-right: 0.2em;
  }
  </style>
</head>
<body>
  <!-- aca va  la barra de navegacion-->
  <div><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('inicio') }}">AbastCam
      <img src="img/logo.png" width="80" height="50">
    </a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('quienes')}}">Contactenos <span class="sr-only">(current)</span></a>
        </li>
        &nbsp;&nbsp;
        <li class="nav-item active">
          <a class="nav-link" href="{{route('politicas')}}">Politicas <span class="sr-only">(current)</span></a>
        </li>
      </ul>

      @include('navbar.navbar')
      
    </form>
  </div>
</nav></div>
<br>
<h1 class="text-center">Usuarios Registrados</h1>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-11 offset-md-1">
      <table class="table striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>RUT</th>
            <th>Dirección</th>
            <th>Fecha de Nacimiento</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Editar</th>
          </tr>
        </thead>
        @foreach ($user as $data)
          <tbody>
            <tr>
              <td>{{ $data->id }}</td>
              <td>{{ $data->name }}</td>
              <td>{{ $data->rut }}</td>
              <td>{{ $data->direccion }}</td>
              <td>{{ $data->fechaNacimiento }}</td>
              <td>{{ $data->email }}</td>
              <td>{{ $data->nombre }}</td>
              <td><a href="{{ route('usuarios.edit', ['id' => $data->id]) }}" style="color: black"><i class="fa fa-pencil-square fa-lg" aria-hidden="true"></i></a></td>
            </tr>
          </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>
</body>
</html>
