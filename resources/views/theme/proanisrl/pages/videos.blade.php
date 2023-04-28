@extends('theme.proanisrl.master')

@section('title', 'Videos')

@section('body')
{{-- menu flotante --}}
@include('theme.proanisrl.partials.nav.menu-flot')
<header class="contenedor">
    <div class="header-videos">
      <a href="./">
        <img src="{{asset('theme/proanisrl/img/logo_proani.avif')}}" alt="icon actividades simposios">
      </a>
    </div>
    <section>
        @include('theme.proanisrl.partials.nav.menu-animal')
  </section>
  </header>

      <main class="contenedor text-center bg-white">
          <section class="videos">
              <div class="contenedor-videos">
                  <div class="fb-video"
                      data-href="https://fb.watch/fzkjMLT_rQ/"
                      data-width="320"
                      data-allowfullscreen="true"
                      data-lazy="true">
                  </div>
                  <div class="fb-video"
                      data-href="https://fb.watch/fzklc3OOxz/"
                      data-width="320"
                      data-allowfullscreen="true"
                      data-lazy="true">
                  </div>

                  <div class="fb-video"
                      data-href="https://www.facebook.com/watch/?v=718322586484384"
                      data-width="320"
                      data-allowfullscreen="true"
                      data-lazy="true">
                  </div>
                  <div class="fb-video"
                      data-href="https://www.facebook.com/watch/?v=438890825083355"
                      data-width="320"
                      data-allowfullscreen="true"
                      data-lazy="true">
                  </div>
                  <div class="fb-video"
                      data-href="https://www.facebook.com/watch/?v=1912684455560223"
                      data-width="320"
                      data-allowfullscreen="true"
                      data-lazy="true">
                  </div>
                  <div class="fb-video">
                    <div class="fb-video" data-href="https://www.facebook.com/proanisrl/videos/3526748084038560/" data-width="320" data-show-text="true"><blockquote cite="https://www.facebook.com/proanisrl/videos/3526748084038560/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/proanisrl/videos/3526748084038560/">KNINO TERAPIA</a>
                  </div>
              </div>
          </section>
      <!-- Start btn-back -->
    @include('theme.proanisrl.partials.btn-atras')
    <!-- End btn-back -->
      </main>

<!-- Start footer -->
@php
    $cls_bg = "bg-white"
@endphp
@include('theme.proanisrl.partials.footer.footer-home')
<!-- End footer -->
@endsection
@section('custom_js')
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

@endsection
