@extends('theme.proanisrl.master')

@section('title', 'Contacto')
@section('custom_css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
    integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
    crossorigin=""/>
@endsection
{{-- @section('classes_body')
    {{'bg-patitas'}}
@endsection --}}
@section('body')
{{-- menu flotante --}}
@include('theme.proanisrl.partials.nav.menu-flot')
<header class="contenedor bg-white">
    <div class="header-contenido-contacto">
      <div class="contacto-bloque">
          <div class="redes-sociales">
              <div class="fondo_icon_header">
                  <a href="https://es-la.facebook.com/proanisrl/">
                    <img class="btn-icon" src="{{asset('theme/proanisrl/img/social_media/facebook_cir.png')}}" alt="redes sociales">
                  </a>
                </div>
                <div class="fondo_icon_header">
                  <a href="https://www.instagram.com/proanisrl/?hl=es">
                    <img class="btn-icon" src="{{asset('theme/proanisrl/img/social_media/instagram_cir.png')}}" alt="redes sociales">
                  </a>
                </div>
                <div class="fondo_icon_header">
                  <a href="https://www.youtube.com/channel/UC2ievPPA6SdEGvCEE_GfYkg">
                    <img class="btn-icon" src="{{asset('theme/proanisrl/img/social_media/youtube_cir.png')}}" alt="redes sociales">
                  </a>
                </div>
          </div>
      </div>
      <div class="contacto-bloque">
          <div class="somos-familia">
              <div class="logo-somos-familia">
                  <a href="./">
                      <img class="btn-icon" src="{{asset('theme/proanisrl/img/asset-comun/logo-proani-letras-negras.png')}}" alt="logo lideres en nutricion animal">
                    </a>
              </div>
          </div>
      </div>
    </div>

</header>
<div class="contenedor bg-white bg-contacto">
    <main class="contenedor text-center">
    <section class="form-contacto">
        <h3>Consulta con un especialista</h3>
        @livewire('contacto.select-departamento', ['departamentos' => $departamentos])
        @livewire('contacto.select-sucursal', ['sucursales' => $sucursales])
        @livewire('contacto.enviar-consulta')

    </section>

    <section class="contenedor contenedor-btn">
        <a class="ancla_sec" href="/proani_frontend">
            <div class="btn-volver">
                <span>Volver</span>
                <svg id="btn-atras" width="32" height="32" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M29.333 16c0-7.352-5.981-13.333-13.333-13.333a13.259 13.259 0 00-9.414 3.919l-3.92-3.92V12H12L8.466 8.466A10.62 10.62 0 0116 5.333c5.881 0 10.667 4.786 10.667 10.667S21.88 26.667 16 26.667 5.333 21.88 5.333 16H2.667c0 7.352 5.981 13.333 13.333 13.333S29.333 23.352 29.333 16z"/></svg>
            </div>
        </a>
    </section>
    </main>

</div>

<!-- Start footer -->
@php
    $cls_bg = "bg-white"
@endphp
@include('theme.proanisrl.partials.footer.footer-home')
<!-- End footer -->
@endsection
@section('custom_js')
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
 integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
 crossorigin=""></script>
 <script>
    var direccion_sucursal = 'Oficina central';
    var coordenadas = [-17.851, -63.254];
    var nombre_sucursal = 'Oficinas de ProAni SRL';
 </script>
    <script src="{{asset('theme/proanisrl/js/maps.js')}}"></script>
<script>
    Livewire.on('mostrarMapa', datos => {
        coordenadas = datos.coordenadas.split(',');
        nombre_sucursal = datos.nombre_sucursal;
        direccion_sucursal = datos.direccion;
        // limpiarMarcadores(map);
        aniadir_marcador(map, coordenadas, nombre_sucursal, direccion_sucursal);
        centrarMarcador(map,coordenadas);
    });
    Livewire.on('abrirLink', link => {
        var win = window.open(link, '_blank');
        win.focus();
    });
</script>
@endsection
