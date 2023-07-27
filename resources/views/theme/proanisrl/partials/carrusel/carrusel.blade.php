<div class="contenedor-carrusel">
    <div id="carruselProaniIndicador" class="carousel slide mt-2 bg-green contenedor" data-ride="carousel">
        <ol class="carousel-indicators" style="bottom: 30px;">
            @php
                $active = true;
            @endphp
            @foreach ($carrusel as $indicador)
                <li data-target="#carruselProaniIndicador" especie="{{$indicador->miespecie->nombre}}" data-slide-to="{{$indicador->orden - 1}}" class="{{($active)?'active':''}}"></li>
                @php
                    if ($active) {
                        $active = false;
                    }
                @endphp
            @endforeach
        </ol>
        <div class="carousel-inner">
            @php
                $active = true;
            @endphp
            @foreach ($carrusel as $imagen)
            <div class="carousel-item carrusel-alto {{($active)?'active':''}}" especie="{{$imagen->miespecie->nombre}}" >
                <img class="d-block w-100" src="{{asset(Storage::url($imagen->url_imagen))}}" alt="Slide {{$indicador->orden - 1}}">
            </div>
                @php
                    if ($active) {
                        $active = false;
                    }
                @endphp
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carruselProaniIndicador" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previo</span>
        </a>
        <a class="carousel-control-next" href="#carruselProaniIndicador" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
    </div>
    <div class="contenedor-logos-producto">
        <div class="imagen-productos">
            @foreach ($logos as $keyEspecie => $itemLogos)
                {{-- {{$keyEspecie}} --}}
                <div class="contenedor-logos" id="{{$keyEspecie}}">
                    @foreach ($itemLogos as $rutaLogo)
                        <img src="{{asset(Storage::url($rutaLogo))}}" alt="logo producto">
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>

