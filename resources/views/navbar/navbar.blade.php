&nbsp;&nbsp;&nbsp;
<!--aqui va el login y el registro-->
@if (Route::has('login'))
  <div class="top-right links">

    @auth
      {{-- si el usuario es admin tendrá estos accesos --}}
      @if (Auth::user()->id_rol == 1)
        <a href="{{ route('inicio') }}">Inicio</a>
        <a href="{{ route('usuarios.show') }}">usuarios</a>
        <a href="{{ route('producto.show') }}">Ver productos</a>
        <a href="{{ route('producto.create') }}">Subir Imagenes</a>
        <a href="{{ route('logout') }}">Logout</a>
      @else
        <a href="{{ route('inicio') }}">Inicio</a>
        <a href="{{ route('logout') }}">Logout</a>
      @endif
    @else
      <a href="{{ route('login') }}">INGRESAR</a>
      &nbsp;&nbsp;
      @if (Route::has('register'))
        <a href="{{ route('register') }}">REGISTRARSE</a>
      @endif
    @endauth
  </div>
@endif
