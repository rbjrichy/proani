@extends('theme.proanisrl.master')

@section('title', 'Proani SRL')

@section('body')

    <!-- LOADER -->
    {{-- <div id="preloader">
        <div class="loader">
            <img src="{{asset('theme/currency/images/loader.gif')}}" alt="#" />
        </div>
    </div> --}}
    <!-- END LOADER -->
    <!-- Start header -->
    @include('theme.proanisrl.partials.header.header-home')
    <!-- End header -->

    @include('theme.proanisrl.partials.nav.menu-nav')
    <main class="contenedor bg-white">
        @include('theme.proanisrl.partials.nav.menu-animal')
        @include('theme.proanisrl.partials.reproductor')
        @include('theme.proanisrl.partials.actividades')
    </main>
    <!-- Start footer -->
    @php
        $cls_bg = "bg-white"
    @endphp
    @include('theme.proanisrl.partials.footer.footer-home')
<!-- End footer -->
@endsection

@section('custom_js')
<script src="{{asset('theme/proanisrl/js/video.js')}}"></script>
<script>
    // $(document).ready(function(){
    //     $("#contacto").trigger('click');
    //     console.log('cliente en contacto');
    // })
</script>
@endsection
