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
{{-- menu flotante --}}
@include('theme.proanisrl.partials.nav.menu-flot')
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
