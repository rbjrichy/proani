@extends('theme.proanisrl.master')

@section('title', 'Contacto')
@section('custom_css')

@endsection
{{-- @section('classes_body')
    {{'bg-patitas'}}
@endsection --}}
@section('body')
<main class="contenedor bg-white guia-gato">
    <div class="contenedor-gato">
     <div class="content-formulario">
         <form class="formulario" action="#" method="post">
           <div class="campo">
               <label for="Nombre">Nombre</label>
               <div class="inline">
                   <input type="text" name="Nombre" id="Nombre">
               </div>
           </div>
           <div class="campo">
             <span class="btn-enviar"><input type="radio" name="tipo-mascota" id="gato">&nbsp; Gato</span>
             <span class="btn-enviar"><input type="radio" name="tipo-mascota" id="perro">&nbsp; Perro</span>

           </div>
           <div class="campo">
             <label for="raza">Raza</label>
             <div class="inline">
                 <input type="text" name="raza" id="raza">
             </div>
         </div>
         <div class="campo">
           <label for="edad">Edad</label>
           <div class="inline">
               <input type="text" name="edad" id="edad">
           </div>
         </div>
         <div class="campo">
           <label for="peso">Peso</label>
           <div class="inline">
               <input type="text" name="peso" id="peso">
           </div>
         </div>
         <div class="campo">
           <label for="vacunas">Vacunas</label>
           <div class="inline">
               <input type="text" name="vacunas" id="vacunas">
           </div>
         </div>
         <div class="campo">
           <span class="titulo-guia">MIS DATOS</span>
         </div>
         <div class="campo">
           <label for="nombre">Nombre</label>
           <div class="inline">
               <input type="text" name="nombre" id="nombre">
           </div>
         </div>
         <div class="campo">
           <label for="apellidos">Apellidos</label>
           <div class="inline">
               <input type="text" name="apellidos" id="apellidos">
           </div>
         </div>
         <div class="campo">
           <label for="telefono">Tel??fono</label>
           <div class="inline">
               <input type="text" name="telefono" id="telefono">
           </div>
         </div>
         <div class="campo">
           <input type="checkbox" name="whatsapp" id="whatsapp"> <span>Usa Whatsapp</span>
         </div>
         <div class="campo">
           <label for="email">Correo electr??nico</label>
           <div class="inline">
               <input type="text" name="email" id="email">
           </div>
         </div>
       </form>
     </div>
     <div class="content-gato">
       <div class="logo">
         <a href="{{asset('/')}}">
           <img src="{{asset('theme/proanisrl/img/asset-comun/logo_proani_2.png')}}" alt="proani somos familia">
         </a>
       </div>
       <div class="gato">
         <img src="{{asset('theme/proanisrl/img/guia_alimentacion/bg_gatitus.png')}}" alt="gatito">
       </div>
     </div>
    </div>
    <div class="contenedor-tabla-guia">
     <p class="txt-bold">Guia de alimentaci??n</p>
     <table class="tabla-guia">
       <tbody>
         <tr>
           <td>Peso del perro (Kg)</td>
           <td>Raci??n Diaria (g)</td>
         </tr>
         <tr>
           <td colspan="2"></td>
         </tr>
         <tr>
           <td colspan="2"></td>
         </tr>
         <tr>
           <td colspan="2"></td>
         </tr>
         <tr>
           <td colspan="2"></td>
         </tr>
         <tr>
           <td colspan="2"></td>
         </tr>

       </tbody>
     </table>
    </div>
 </main>
 <section class="contenedor bg-white registro-mascota">
   <div class="formulario-registro">
     <p class="txt-bold">??Que alimento es ideal para tu consentido?</p>
     <form action="">
       <div class="campo">
         <div class="inline">
           <input type="text" name="nombre-mascota" id="nombre-mascota">
         </div>
         <label for="nombre-mascota">Nombre Mascota</label>
       </div>
       <div class="campo-fila">
         <div class="campo-item">
           <input class="d-bloque" type="text" name="raza" id="raza">
           <label class="d-bloque" for="raza">Raza</label>
         </div>
         <div class="campo-item">
           <input class="d-bloque" type="text" name="edad" id="edad">
           <label class="d-bloque" for="edad">Edad</label>
         </div>
         <div class="campo-item">
           <input class="d-bloque" type="text" name="peso" id="peso">
           <label class="d-bloque" for="peso">Peso</label>
         </div>
         <div class="campo-item">
           <input class="d-bloque" type="text" name="condicion-fisica" id="condicion-fisica">
           <label class="d-bloque" for="condicion-fisica">Condici??n Fisica</label>
         </div>
       </div>
       <div class="campo">
         <div class="inline">
           <button class="btn-enviar">Consultar</button>
         </div>
       </div>
     </form>
     <div class="campo">
       <p><span class="txt-bold">Respuesta:</span> Para Lobo se recomienda <span class="txt-bold">Kanino Adulto Raza Mediana Grande</span></p>
     </div>
   </div>

 </section>
 <div class="contenedor img-perros">
   <img src="{{asset('theme/proanisrl/img/guia_alimentacion/bg_perritus.png')}}" alt="Imgane de perros">
 </div>

<!-- Start footer -->
@php
    $cls_bg = "bg-white"
@endphp
@include('theme.proanisrl.partials.footer.footer-home')
<!-- End footer -->
@endsection
@section('custom_js')

@endsection
