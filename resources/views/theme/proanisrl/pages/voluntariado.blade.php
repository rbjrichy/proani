@extends('theme.proanisrl.master')

@section('title', 'Adopciones')
@section('classes_body')
    {{'bg-patitas'}}
@endsection
@section('body')
<div class="contenedor bg-plomo">

    <header class="header_event fondo-header-voluntariado contenedor bg-plomo">
        <div class="header-contenido-event">
          <div class="event_logo">
              <div class="contenedor-icon"">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="#ffffff"><path d="M46.33 21.5c.24-.41.57-.79.7-1.23 1.22-4.19 2.4-8.38 3.6-12.58.17-.58.33-1.17.59-1.71.49-1.03 1.42-1.49 2.44-1.28 1.07.22 1.34 1.07 1.36 1.95.02 1.1-.02 2.24-.26 3.31-.92 4.07-1.94 8.11-2.9 12.16-.11.46-.11.94-.16 1.41.11.04.21.08.32.11.2-.25.42-.48.6-.75 1.96-2.99 3.91-5.99 5.88-8.98.3-.45.65-.88 1.05-1.23.72-.63 1.54-.56 2.34-.15.75.38.93 1.09.73 1.8-.31 1.09-.65 2.2-1.19 3.2-1.45 2.66-2.99 5.27-4.53 7.89-.58.98-.9 1.98-.93 3.15-.1 3.24-.14 6.5-1.32 9.61-.83 2.17-1.88 4.18-3.69 5.74-.22.19-.37.59-.36.89.22 6.72.46 13.44.7 20.16.15 4.2.3 8.4.45 12.67-5.17 1.25-10.35 1.67-15.56 1.14 0-2.12-.05-4.15.01-6.18.27-9.49.57-18.98.82-28.48.01-.34-.29-.82-.6-1.03-1.67-1.17-3.64-1.98-4.88-3.69-.97-1.34-1.98-2.69-2.68-4.17-1.76-3.73-4.09-6.9-7.89-8.84-.74-.38-1.12-1.07-1-1.91.11-.74 1.16-1.62 2.02-1.48 1.54.24 3.12.5 4.55 1.07 2.48.98 4.32 2.84 5.84 4.99.17.24.43.43.65.64.2-.26.49-.49.58-.78.65-2.12 1.1-4.26.45-6.47-1.28-4.37-2.56-8.73-3.82-13.11-.16-.57-.29-1.2-.22-1.77.12-1.06.94-1.72 2.05-1.82 1.09-.1 1.9.39 2.31 1.48 1.11 3.02 2.2 6.05 3.28 9.07.47 1.32.9 2.65 1.41 3.96.13.33.48.58.73.86.31-.39.87-.78.89-1.18.07-1.78-.04-3.57-.06-5.35-.05-3.25-.09-6.5-.13-9.75-.02-1.4.47-2.2 1.53-2.61 1.56-.59 2.77-.03 3.21 1.57.17.64.23 1.32.25 1.98.11 4.81.2 9.62.3 14.43.01.39.09.79.14 1.18.13.04.26.07.4.11zm-10.76 7.31c3.96 1.05 6.97 3.19 8.34 7.2-.22-4.19-3.95-7.38-8.34-7.2z"/><path d="M10.11 48.28c.47-1.52.5-3.07-.14-4.6-1.07-2.56-2.18-5.1-3.26-7.65-.32-.76-.42-1.5.4-2.03.79-.51 1.58-.26 2.05.67 1.19 2.33 2.35 4.67 3.53 7.01.17.33.36.65.55.99.86-.3.68-.9.6-1.45-.38-2.84-.77-5.68-1.16-8.52-.1-.68 0-1.28.62-1.68 1-.66 2.04-.25 2.32 1.02.28 1.27.41 2.58.59 3.87.28 1.92.54 3.85.82 5.77.03.21.13.41.3.9.22-.52.41-.79.46-1.09.45-2.67.88-5.34 1.32-8.01.05-.31.04-.71.23-.91.37-.38.84-.87 1.3-.89.33-.02.89.59.99 1.01.18.72.18 1.51.11 2.26-.24 2.38-.56 4.74-.83 7.12-.04.36-.01.73.17 1.17.13-.18.28-.35.38-.55.93-1.85 1.84-3.72 2.76-5.57.17-.34.32-.77.62-.95.39-.24.97-.45 1.37-.34.31.09.66.69.66 1.07 0 .65-.2 1.32-.44 1.93-.43 1.13-.85 2.28-1.44 3.33-1.06 1.9-1.19 3.88-.98 5.99.26 2.73-.21 5.32-2 7.56-.19.24-.19.71-.14 1.06.65 4.28 1.33 8.56 2 12.84.34 2.16.67 4.32 1.04 6.69-1-.4-1.88-.67-2.69-1.09-2.28-1.17-4.55-2.37-6.78-3.63-.36-.2-.69-.75-.73-1.17-.44-4.41-.8-8.82-1.23-13.23-.03-.35-.37-.85-.68-.98-2.42-.94-4.1-2.62-5.42-4.81-1.14-1.89-2.77-3.32-4.89-4.17-.38-.15-.92-.89-.83-1.08.25-.47.82-1.1 1.24-1.09 1.16.04 2.42.16 3.45.65 1.3.65 2.44 1.66 3.76 2.58zm6.84 2.56c-.2-2.14-2.82-3.93-4.91-3.44 2.16.39 3.82 1.39 4.91 3.44zm52.24-6.08c.19-.34.41-.67.55-1.03.9-2.25 1.78-4.5 2.68-6.75.13-.32.21-.74.46-.93.4-.29.95-.63 1.38-.56.31.05.7.7.73 1.11.04.64-.11 1.33-.31 1.96-.73 2.24-1.53 4.46-2.29 6.68-.11.32-.19.64-.28.96.07.04.14.09.21.13.18-.18.37-.35.52-.55 1.24-1.54 2.47-3.1 3.73-4.63.24-.29.52-.65.84-.75.38-.11.9-.09 1.24.09.24.13.43.68.35.97-.17.63-.47 1.25-.83 1.8-.66 1.02-1.32 2.05-2.11 2.96-1.31 1.49-1.83 3.2-2.05 5.12-.31 2.63-1.27 4.98-3.44 6.72-.26.21-.34.73-.37 1.11-.21 2.99-.38 5.98-.59 8.96-.02.34-.18.78-.43.98-2.7 2.17-5.63 4-8.89 5.51 0-.36-.03-.62 0-.89.67-5.18 1.32-10.36 2.04-15.53.13-.89-.08-1.43-.81-1.91-1.77-1.15-2.81-2.82-3.47-4.79-.72-2.13-1.93-3.93-3.83-5.25-.33-.23-.64-1.11-.52-1.22.39-.36 1.02-.76 1.49-.69 2.13.3 3.69 1.54 4.88 3.27.27.39.51.79.87 1.33.84-1.4 1.25-2.77 1-4.25-.42-2.48-.93-4.94-1.4-7.41-.05-.25-.1-.5-.13-.75-.1-.95.26-1.52 1.03-1.67.78-.15 1.32.22 1.56 1.16.64 2.43 1.25 4.87 1.88 7.3.08.3.17.58.26.88.12.02.24.05.36.07.16-.41.42-.82.46-1.24.25-2.63.44-5.27.68-7.9.04-.4.05-.96.31-1.16.43-.34 1.05-.62 1.58-.61.72.01 1 .68.98 1.32-.03 1.4-.14 2.8-.24 4.19-.13 1.75-.29 3.49-.43 5.24-.01.18.04.36.06.54.11.03.2.07.29.11zm-6.4 3.38c1.92.88 3.38 2.17 3.97 4.5.12-2.3-1.34-3.88-3.97-4.5z"/></svg>
              </div>
          </div>
        </div>
      </header>
      <div class="contenedor contenedor-titulo-feria">
        <img src="{{asset('theme/proanisrl/img/voluntariado/voluntariado-letras.png')}}" alt="imagenes voluntariado">
      </div>
      <main class="contenedor bg-plomo">
        <section class="all-adopcion">
            <div class="feria-contenedor">
                @foreach ($voluntariados as $row)
                <div class="card-feria">
                    <div class="imagen">
                      <div class="marco-img fig-oval-inv">
                        <img src="{{asset(Storage::url($row->foto_evento))}}" alt="imagen adopcion">
                      </div>
                      <div class="img-text-der">
                        <div class="contenedor-img-texto">
                          <img class="img-alin-der" src="{{asset('theme/proanisrl/img/btn/ferias-txt.svg')}}" alt="imagen adopcion">
                          <p class="tit-adopta">{{$row->titulo}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="texto">
                        <span>
                            {{$row->descripcion}}
                        </span>
                    </div>
                    <div class="boton btn-vermas">
                        <img class="btn-icon" src="{{asset('theme/proanisrl/img/ferias/ver_mas.png')}}" alt="imagen boton mas info">
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    <!-- Start btn-back -->
    @include('theme.proanisrl.partials.btn-atras')
    <!-- End btn-back -->
    </main>
<!-- Start footer -->
@include('theme.proanisrl.partials.footer.footer-home')
<!-- End footer -->
</div>
@endsection
@section('custom_js')


@endsection
