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
    <div class="row">
      <div class="col-md-8">
        {{-- Se recorre la variable productos donde ahi se encuentra la imagen y la mostramos mediante esa ruta --}}
        <div class="card">
          <div class="card-header">
            {{ $producto->nombre }}
          </div>
            <img src="{{ route('image.file',['filename' => $producto->foto]) }}" alt="Picture" style="width:100%;">
          </div><br>
        </div>
        <div class="col-4">
          <form action="{{ route('cart.agregar', ['id' => $producto->id]) }}" method="POST">
            @csrf

            <div class="card">
              <div class="card-header text-center">Datos Publicación</div>
              <div class="col-md-12">

                <div class="form-group mb-2">
                  <label for="nombreProducto" style="padding-top: 10px"><strong>Producto: </strong></label>
                  <label for="nombreProducto" style="padding-top: 10px">{{ $producto->nombre }}</label>
                </div>

                <div class="form-group mb-2">
                  <label for="nombre"><strong>Descripción: </strong></label>
                  <label for="nombre">{{ $producto->descripcion }}</label>
                </div>

                <div class="form-group mb-2">
                  <label for="precio"><strong>Precio: </strong></label>
                  <label for="precio">${{ $producto->precio }}</label>
                </div>

                <hr>

                <div class="form-group mb-2">
                  <label for="nombre"><strong>Vendedor: </strong></label>
                  <label for="nombre">{{ $producto->name }}</label>
                </div>

                {{-- AQUI SI QUIEREN DESCOMENTAN ESTAS LINEAS DE CODIGO SI QUIEREN QUE APAREZCA MAS INFO DEL USUARIO
                <div class="form-group mb-2">
                  <label for="rut"><strong>RUT: </strong></label>
                  <label for="rut">{{ $producto->rut }}</label>
                </div>

                <div class="form-group mb-2">
                  <label for="rut"><strong>Dirección: </strong></label>
                  <label for="rut">{{ $producto->direccion }}</label>
                </div> --}}

                <div class="form-group mb-2">
                  <label for="rut"><strong>Email: </strong></label>
                  <label for="rut">{{ $producto->email }}</label>
                </div>
              </div>
            </div><br>

            {{-- <div class="col-md-4">
              <label for="cantidad">Cantidad: </label>
              <input type="number" name="cantidad" id="cantidad" class="form-control @error('cantidad') is-invalid @enderror" value="{{ old('cantidad') }}" placeholder="0" required>
              @error('cantidad')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div><br> --}}

            <button type="submit" name="button" class="btn btn-primary btn-block">Agregar al carro</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
