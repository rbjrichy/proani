@extends('theme.proanisrl.master')

@section('title', 'Knino')

@section('body')
    <div class="contenedor bg_color_knino">
        <div class="bg_stampado">
            <header class="header contenedor">
                <div class="logo_proani">
                    <a href="./">
                        <img src="theme/proanisrl/img/knino/logo_proani.png" alt="logo proani">
                    </a>
                </div>
            </header>
            <main class="contenedor">
                <div class="main_contenedor">
                    <img src="theme/proanisrl/img/knino/img_central.png" alt="imagen central">
                </div>
            </main>

            <section class="productos">
                @foreach ($productos as $producto)
                    <div class="caja-producto">
                        <div class="producto">
                            <img id="{{$producto->nombre_producto}}{{$producto->id}}" src="{{asset('storage/'.str_replace('public/','',$producto->img_producto))}}" alt="imagen producto">
                        </div>
                        <div class="btn-producto">
                            <a href="{{route('knino.detalle')}}">
                                <img class="btn-descarga" src="theme/proanisrl/img/knino/btn.png" alt="boton descarga">
                            </a>
                        </div>
                    </div>
                @endforeach

                <div class="caja-producto">
                    <div class="producto">
                        <img id="adulto" src="theme/proanisrl/img/knino/adulto.png" alt="imagen producto">
                    </div>
                    <div class="btn-producto">

                        <a href="{{route('knino.detalle')}}">
                            <img class="btn-descarga" src="theme/proanisrl/img/knino/btn.png" alt="boton descarga">
                        </a>

                    </div>
                </div>
                <div class="caja-producto">
                    <div class="producto">
                        <img id="cachorro" src="theme/proanisrl/img/knino/cachorro.png" alt="imagen producto">
                    </div>
                    <div class="btn-producto">

                        <a href="{{route('knino.detalle')}}">
                            <img class="btn-descarga" src="theme/proanisrl/img/knino/btn.png" alt="boton descarga">
                        </a>

                    </div>
                </div>
                <div class="caja-producto">
                    <div class="producto">
                        <img id="knino" src="theme/proanisrl/img/knino/knino.png" alt="imagen producto">
                    </div>
                    <div class="btn-producto">

                        <a href="{{route('knino.detalle')}}">
                            <img class="btn-descarga" src="theme/proanisrl/img/knino/btn.png" alt="boton descarga">
                        </a>

                    </div>
                </div>
            </section>

            <footer class="footer">
                <p class="copyright">© 2022 Proani - Todos los derechos reservados.</p>
            </footer>
        </div>
    </div>
@endsection
@section('custom_js')


@endsection
