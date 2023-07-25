<div class="nav-header-container contenedor">
  <div class="box logo-pro-center">
    <img src="{{asset('theme/proanisrl/img/general/somos_familia.png')}}" alt="Logo proani srl">
  </div>
  <div class="box menu-super-fondo">
    <nav class="nav-principal">
      <a class="nav-link" href="{{route('quienessomos')}}">Home</a>
      <a class="nav-link" href="{{route('quienessomos')}}">Quienes Somos</a>
      <a class="nav-link" href="{{route('guia_alimentaria')}}">Productos</a>
      <a class="nav-link" href="{{route('videos')}}">Noticias</a>
      <a class="nav-link" href="{{route('contacto')}}">Contáctanos</a>
    </nav>
    <div class="icon-container">
      {{-- <label for="searchInput">Buscar</label> --}}
      <input class="form-control" type="text" id="searchInput" placeholder="Buscar.." />
      <img class="lupa-buscar" src="{{asset('theme/proanisrl/img/general/lupa.png')}}" alt="lupa buscar">
    </div>
  </div>
</div>
