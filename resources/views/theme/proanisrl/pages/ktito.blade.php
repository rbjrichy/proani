@extends('theme.proanisrl.master')

@section('title', 'Ktito')

@section('body')

<div class="contenedor bg_color_ktito">
    <header class="header contenedor">
      <div class="logo_proani">
        <a href="./">
          <img src="{{asset('theme/proanisrl/img/knino/logo_proani.png')}}" alt="logo proani" />
        </a>
      </div>
    </header>

    <div class="bg_stampado">
            <main class="contenedor">
              <div class="main_contenedor">
                <img src="{{asset('theme/proanisrl/img/ktito/ktito-fondo.png')}}" alt="imagen central" />
              </div>
            </main>
            <section class="productos">
              <div class="caja-producto">
                <div class="producto">
                  <img
                    src="{{asset('theme/proanisrl/img/ktito/ktito-cachorro.png')}}"
                    alt="imagen producto"
                  />
                </div>
                <div class="btn-producto">
                  <a href="{{route('ktito.detalle')}}">
                    <img
                      class="btn-descarga"
                      src="{{asset('theme/proanisrl/img/knino/btn.png')}}"
                      alt="boton descarga"
                    />
                  </a>
                </div>
              </div>
              <div class="caja-producto">
                <div class="producto">
                  <img
                    src="{{asset('theme/proanisrl/img/ktito/ktito-adulto-salmon.png')}}"
                    alt="imagen producto"
                  />
                </div>
                <div class="btn-producto">
                  <a href="{{route('ktito.detalle')}}">
                    <img
                      class="btn-descarga"
                      src="{{asset('theme/proanisrl/img/knino/btn.png')}}"
                      alt="boton descarga"
                    />
                  </a>
                </div>
              </div>
              <div class="caja-producto">
                <div class="producto">
                  <img
                    src="{{asset('theme/proanisrl/img/ktito/ktito-adulto-leche.png')}}"
                    alt="imagen producto"
                  />
                </div>
                <div class="btn-producto">
                  <a href="{{route('ktito.detalle')}}">
                    <img
                      class="btn-descarga"
                      src="{{asset('theme/proanisrl/img/knino/btn.png')}}"
                      alt="boton descarga"
                    />
                  </a>
                </div>
              </div>
              <div class="caja-producto">
                <div class="producto">
                  <img
                    src="{{asset('theme/proanisrl/img/ktito/ktito-adulto-carne.png')}}"
                    alt="imagen producto"
                  />
                </div>
                <div class="btn-producto">
                  <a href="{{route('ktito.detalle')}}">
                    <img
                      class="btn-descarga"
                      src="{{asset('theme/proanisrl/img/knino/btn.png')}}"
                      alt="boton descarga"
                    />
                  </a>
                </div>
              </div>
            </section>

            <footer class="footer">
              <p class="copyright">
                © 2022 Proani - Todos los derechos reservados.
              </p>
            </footer>
    </div>
  </div>

@endsection
@section('custom_js')


@endsection
