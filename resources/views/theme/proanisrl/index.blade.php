@extends('theme.proanisrl.master')

@section('title', 'Proani SRL')
@section('custom_css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@stop

@section('body')
    <!-- LOADER -->
    {{-- <div id="preloader">
        <div class="loader">
            <img src="{{asset('theme/currency/images/loader.gif')}}" alt="#" />
        </div>
    </div> --}}
    <!-- END LOADER -->
{{-- menu flotante --}}
@php
    $menuComponent = new App\View\Components\CargarMenu();
    $menu = $menuComponent->menu;
@endphp
@include('theme.proanisrl.partials.nav.menu-flot')

    {{-- navegador superior --}}
    @include('theme.proanisrl.partials.nav.menu-nav-new')


    @include('theme.proanisrl.partials.carrusel.carrusel')


    <!-- Start header -->
    {{-- @include('theme.proanisrl.partials.header.header-home') --}}
    <!-- End header -->

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

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<script src="{{asset('theme/proanisrl/js/video.js')}}"></script>

<script>
    var bandera = true ;
    setInterval(function(){
        if(bandera){
            var images1 = document.getElementsByClassName("img-noshow");
            this.cambiar_attributo(images1," block")
            var images2 = document.getElementsByClassName("img-show");
            this.cambiar_attributo(images2, "none")
            bandera = false;
        }
        else {
            var images1 = document.getElementsByClassName("img-noshow");
            this.cambiar_attributo(images1, "none")
            var images2 = document.getElementsByClassName("img-show");
            this.cambiar_attributo(images2, "block")
            bandera = true;
        }
        // console.log(bandera);
    }, 6000);

    function cambiar_attributo(listaObjetos, estado){
        for (let nodo of listaObjetos){
            // console.log(nodo)
            nodo.style.display = estado;
        }
    }

</script>
@endsection
