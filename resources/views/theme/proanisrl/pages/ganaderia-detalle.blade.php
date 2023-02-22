@extends('theme.proanisrl.master')

@section('title', 'Ganadería Detalle')

@section('body')
<div class="bg-ganaderia-black contenedor">
    <header class="header-detalle-producto-ganaderia">
      <div class="header-contenido-detalle-producto">
        <a href="./">
          <img
            src="{{asset('theme/proanisrl/img/asset-comun/logo_proani.png')}}"
            alt="icon lideres en nutricion animal"
          />
        </a>
      </div>
    </header>

    <main class="contenedor text-center">
      <p class="texto-producto-detalle texto-white">
        Suplementos minerales listo para consumo, equilibrado para cubrir las
        deficiencias y desequilibrio de macro y micro minerales en bovinos en
        pastoreo en suelos de alta fertilidad, para mejorar la conversión
        alimenticia, generando mayor ganancia y mayor índices productivos en
        bovinos de engorde.
      </p>
    </main>
    <section class="seccion-producto">
      <div class="detalle-producto">
        <div class="flechaizq-slice">
          <img
            class="imgflechaizq"
            src="{{asset('theme/proanisrl/img/asset-comun/flechaizq.png')}}"
            alt="flecha izq"
          />
        </div>
        <div class="producto-slice-50">
          <img src="{{asset('theme/proanisrl/img/product-ganaderia/cacimin.png')}}" alt="producto" />
        </div>
        <div class="flechader-slice">
          <img
            class="imgflechader"
            src="{{asset('theme/proanisrl/img/asset-comun/flechaizq.png')}}"
            alt="flecha der"
          />
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
  </div>







@endsection

@section('custom_js')


@endsection
