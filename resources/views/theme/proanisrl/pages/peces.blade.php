@extends('theme.proanisrl.master')

@section('title', 'Peces')

@section('body')

<header class="header_animal fondo-header-peces contenedor">
    <div class="header-contenido">
      <div class="logo_proani">
        <a href="./">
          <img src="{{asset('theme/proanisrl/img/logo_proani.avif')}}" alt="logo lideres en nutricion animal">
        </a>
      </div>
    </div>
  </header>

  <main class="contenedor text-center bg-white">
    <p class="texto-peces">Alimento balanceado extruido para peces. Está formulado estrictamente para cubrir  los requerimientos nutricionales en sus distintas fases de producción. El proceso de extrusión  rompe las cadenas largas de almidones y las convierte en un producto de mejor digestión  y asimilación, haciendo el alimento de mayor conversión alimenticia.</p>
    <section class="seccion-producto">
      <div class="detalle-producto">
        <div class="flechaizq-slice">
          <img
            class="imgflechaizq"
            src="{{asset('theme/proanisrl/img/asset-comun/flecha_borde.png')}}"
            alt="flecha izq"
          />
        </div>
        <div class="producto-slice">
          <img src="{{asset('theme/proanisrl/img/peces/producto-pez.png')}}" alt="producto" />
        </div>
        <div class="flechader-slice">
          <img
            class="imgflechader"
            src="{{asset('theme/proanisrl/img/asset-comun/flecha_borde.png')}}"
            alt="flecha der"
          />
        </div>
      </div>
    </section>

    <div class="contenedor">
        <!-- Start btn-back -->
        @include('theme.proanisrl.partials.btn-atras')
        <!-- End btn-back -->
    </div>
</main>





<!-- Start footer -->
@include('theme.proanisrl.partials.footer.footer-home')
<!-- End footer -->

@endsection

@section('custom_js')


@endsection
