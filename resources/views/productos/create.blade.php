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
      <img src="img/Logo.png" width="80" height="50">
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

          <div class="card-header">Crear Producto</div>

          <div class="card-body">

            <form action="{{ route('producto.save') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                <div class="col-md-6">
                    <input id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" required autofocus/>
                    @error('nombre')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="precio" class="col-md-4 col-form-label text-md-right">Precio</label>
                <div class="col-md-6">
                    <input id="precio" type="number" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio') }}" required autofocus/>
                    @error('precio')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>
                <div class="col-md-6">
                    <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus/>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="image_path" class="col-md-4 col-form-label text-md-right">Image</label>

                <div class="col-md-6">
                  <div class="custom-file">
                    <input type="file" id="image_path" name="image_path" class="form-control @error('image_path') is-invalid @enderror custom-file-input">
                      @error('image_path')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                      <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                    </div>
                  </div>
                </div>

              <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">Descripción</label>
                <div class="col-md-6">
                    <textarea id="description" name="description" class="form-control" required></textarea>
                    @error('description')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary btn-block">
                    Save
                  </button>
                </div>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
