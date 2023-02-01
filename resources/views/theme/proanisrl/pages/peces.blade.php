@extends('theme.proanisrl.master')

@section('title', 'Peces')

@section('body')

<header class="header_animal fondo-header-peces contenedor">
    <div class="header-contenido-animal">
      <div class="animal_logo">
          <div class="fondo_icon_animal">
              <p>Peces</p>
              <img src="{{asset('theme/proanisrl/img/logo_proani.avif')}}" alt="icon actividades simposios">
          </div>
      </div>
    </div>

  </header>

  <main class="contenedor text-center bg-white">
      <p class="texto-ganaderia">Alimento balanceado extruido para peces. Está formulado estrictamente para cubrir  los requerimientos nutricionales en sus distintas fases de producción. El proceso de extrusión  rompe las cadenas largas de almidones y las convierte en un producto de mejor digestión  y asimilación, haciendo el alimento de mayor conversión alimenticia.</p>

  <section class="principal-pez">
    <div class="imagen-prod-pez">
      <div class="contenedor-img-pez">
        <img src="{{asset('theme/proanisrl/img/peces/producto-pez.png')}}" alt="imagen pez">
      </div>
      <div class="boton btn-vermas">
        <img class="btn-icon" src="{{asset('theme/proanisrl/img/ferias/ver_mas.png')}}" alt="imagen boton mas info">
      </div>
    </div>
    <div class="desc-prod-pez">
      <div class="texto-descripcion">
        <h4>OTORGAMOS:</h4>
        <ul class="lista-pez">
          <li>- Planes de nutrición</li>
          <li>- Asesoría de alto nivel profesional</li>
          <li>- Red de contactos en materias a fines a la piscicultura</li>
          <li>- Seguimiento en la aplicación de nuestros productos</li>
        </ul>
      </div>
      <div class="tabla-descripcion">
        <img src="{{asset('theme/proanisrl/img/peces/tabla-pez.png')}}" alt="tabla descripcion">
      </div>
    </div>
  </section>



<div class="contenedor">
    <!-- Start btn-back -->
    @include('theme.proanisrl.partials.btn-atras')
    <!-- End btn-back -->
</div>

<!-- Start footer -->
@include('theme.proanisrl.partials.footer.footer-home')
<!-- End footer -->

@endsection

@section('custom_js')


@endsection
