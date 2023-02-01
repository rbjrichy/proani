@extends('theme.proanisrl.master')

@section('title', 'Detalle Knino')

@section('body')
<div class="contenedor bg_color_knino">
    <header class="header contenedor">
      <div class="logo_proani">
        <a href="./">
          <img src="{{asset('theme/proanisrl/img/knino/logo_proani.png')}}" alt="logo proani" />
        </a>
      </div>
    </header>
    <div class="bg_stampado">
      <section class="seccion-producto">
        <div class="detalle-producto">
          <div class="flechaizq-slice">
            <img
              class="imgflechaizq"
              src="{{asset('theme/proanisrl/img/asset-comun/flechaizq.png')}}"
              alt="flecha izq"
            />
          </div>
          <div class="producto-slice">
            <img src="{{asset('theme/proanisrl/img/knino/adulto.png')}}" alt="producto" />
          </div>
          <div class="flechader-slice">
            <img
              class="imgflechader"
              src="{{asset('theme/proanisrl/img/asset-comun/flechaizq.png')}}"
              alt="flecha der"
            />
          </div>
        </div>
      </section>
      <section class="detalle-nutrientes">
        <div class="tabla-nutrientes">
          <table class="tbl-nutrientes tbl-azul">
            <thead>
              <tr>
                <th class="text-center" colspan="2">
                  <span>Sabueso Adulto</span>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center" colspan="2">
                  <span>Niveles nutricionales</span>
                </td>
              </tr>
              <tr>
                <td>Proteína Total (min)</td>
                <td class="text-center">22%</td>
              </tr>
              <tr>
                <td>Grasa (min)</td>
                <td class="text-center">7%</td>
              </tr>
              <tr>
                <td>Humedad (máx)</td>
                <td class="text-center">12%</td>
              </tr>
              <tr>
                <td>Materia fibrosa (máx)</td>
                <td class="text-center">3.5%</td>
              </tr>
              <tr>
                <td>Minerales (máx)</td>
                <td class="text-center">10%</td>
              </tr>
              <tr>
                <td>Calcio (máx)</td>
                <td class="text-center">2%</td>
              </tr>
              <tr>
                <td>Fósforo (prom)</td>
                <td class="text-center">1.30%</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="descripcion">
          <p>
            Perros fuertes y saludables. Sabueso favorece al desarrollo de
            músculos, huesos y dientes. Matiene una piel sana y el pelo
            brillante gracias a la presencia de ácidos grasos omega 3 y 6.
            Alta nutrición y excenlente digestabilidad
          </p>
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
