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
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          {{-- MENSAJE DE EDITADO --}}
          @if(session('status'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          @endif
            <div class="card">
                <div class="card-header">{{ __('Editar Usuarios') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('usuarios.update', ['id' => $user->id]) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Completo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rut" class="col-md-4 col-form-label text-md-right">{{ __('RUT') }}</label>

                            <div class="col-md-6">
                                <input id="rut" type="text" class="form-control @error('rut') is-invalid @enderror" name="rut" value="{{ $user->rut }}" required autocomplete="rut">

                                @error('rut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ $user->direccion }}" required autocomplete="direccion">

                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fechaNacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fechaNacimiento" type="date" class="form-control @error('fechaNacimiento') is-invalid @enderror" name="fechaNacimiento" value="{{ $user->fechaNacimiento }}" required autocomplete="fechaNacimiento">

                                @error('fechaNacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>
                          <div class="col-md-6">
                          <select class="form-control" id="rol" name="rol_id">
                              @foreach ($rol as $row)
                                <option value="{{ $row->id }}" {{ ($row->id == $id_rol) ? 'selected' : '' }}>
                                  {{ $row->nombre }}
                                </option>
                              @endforeach
                            </select>
                          </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
