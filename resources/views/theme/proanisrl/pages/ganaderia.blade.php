@extends('theme.proanisrl.master')

@section('title', 'Ganadería')

@section('body')

<header class="header_animal_bovino fondo-header-ganaderia contenedor">
    <div class="header-contenido-animal">
      <div class="logo_posicion_der">
        <div class="fondo_icon_logo">
          <div class="mas-info">

          </div>
          <img src="{{asset('theme/proanisrl/img/logo_proani.avif')}}" alt="icon actividades">
        </div>
      </div>
    </div>

  </header>

  <main class="contenedor text-center">
      <p class="texto-ganaderia">Suplementos minerales listo para consumo, equilibrado para cubrir las deficiencias  y desequilibrio de macro y micro minerales en bovinos en pastoreo en suelos de alta fertilidad,  para mejorar la conversión alimenticia, generando mayor ganancia  y mayor índices productivos en bovinos de engorde.</p>
  </main>
  <section class="marcas-ganaderia bg-panal contenedor">
    <div class="contenido-marcas">
        <div class="marcas">
            <div class="marca-producto">
                <img src="{{asset('theme/proanisrl/img/ganaderia/logo_ganaderia1.png')}}" alt="Ganaderia links">
            </div>
            <div class="btn-masinfo">
              <a href="{{route('ganaderiadetalle')}}">
                <img class="btn-icon" src="{{asset('theme/proanisrl/img/ganaderia/boton_mas_info.png')}}" alt="mas informacion">
              </a>
            </div>
        </div>
        <div class="marcas">
            <div class="marca-producto">
                <img src="{{asset('theme/proanisrl/img/ganaderia/logo_ganaderia2.png')}}" alt="Ganaderia links">
            </div>
            <div class="btn-masinfo">
              <a href="{{route('ganaderiadetalle')}}">
                <img class="btn-icon" src="{{asset('theme/proanisrl/img/ganaderia/boton_mas_info.png')}}" alt="mas informacion">
              </a>
            </div>
        </div>
        <div class="marcas">
            <div class="marca-producto">
                <img src="{{asset('theme/proanisrl/img/ganaderia/logo_ganaderia3.png')}}" alt="Ganaderia links">
            </div>
            <div class="btn-masinfo">
              <a href="{{route('ganaderiadetalle')}}">
                <img class="btn-icon" src="{{asset('theme/proanisrl/img/ganaderia/boton_mas_info.png')}}" alt="mas informacion">
              </a>
            </div>
        </div>
    </div>
</section>
<div class="contenedor contenedor-btn">
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
