<section>
    <div class="slider">
        <div class="alto_icon_animal slider_icon">
            @php
                $menu = session('menu');
            @endphp
            @foreach ($menu as $item)
                @if ($item->usar_icono) {{-- usa el archivo png --}}
                <a href="{{route($item->name_ruta,[$item->nombre])}}">
                    <div class="btn-icon icon_nav">
                        <img src="{{asset(Storage::url($item->icono))}}">
                    </div>
                </a>
                @else
                    @if ($item->name_ruta == 'generico')
                    <a href="{{route($item->name_ruta,[$item->nombre])}}">
                        <div style="margin: 0 2.5rem">
                            {!!$item->codigo_svg!!}
                        </div>
                    </a>
                    @else
                    <a href="{{route($item->name_ruta)}}">
                        <div style="margin: 0 2.5rem">
                            {!!$item->codigo_svg!!}
                        </div>
                    </a>
                    @endif

                @endif
            @endforeach

        </div>
    </div>
</section>
