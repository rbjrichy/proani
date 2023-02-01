@extends('theme.proanisrl.master')

@section('title', 'Detalle Knino')

@section('body')

<div class="contenedor bg_color_ktito">
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
            <img
              src="{{asset('theme/proanisrl/img/ktito/ktito-adulto-salmon.png')}}"
              alt="producto"
            />
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
          <table class="tbl-nutrientes tbl-white texto-white">
            <thead>
              <tr>
                <th class="text-center" colspan="2">
                  <span>Ktito Adulto</span>
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
                <td class="text-center">28%</td>
              </tr>
              <tr>
                <td>Extracto Etéreo (min)</td>
                <td class="text-center">12%</td>
              </tr>
              <tr>
                <td>Fibra Cruda (min)</td>
                <td class="text-center">3.5%</td>
              </tr>
              <tr>
                <td>Minerales Totales (min)</td>
                <td class="text-center">10%</td>
              </tr>
              <tr>
                <td>Calcio (min - máx)</td>
                <td class="text-center">1.50% - 1.90%</td>
              </tr>
              <tr>
                <td>Fósforo (min - máx)</td>
                <td class="text-center">1.10% - 1.30%</td>
              </tr>
              <tr>
                <td>Taurina (min)</td>
                <td class="text-center">0.07%</td>
              </tr>
              <tr>
                <td>Magnesio (min)</td>
                <td class="text-center">0.13%</td>
              </tr>
              <tr>
                <td>Humedad (min)</td>
                <td class="text-center">0.12%</td>
              </tr>
              <tr>
                <td>Valor Energético</td>
                <td class="text-center">3.000 Kcal/Kg en MS</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="descripcion">
          <p class="texto-white">
            Combina nutrientes minuciosamente seleccionados y adaptados a los
            requerimientos nutricionales que los gatos adultos y cachorros
            necesitan durante esta estapa de la vida. Evita el sobre peso que
            resulta nocivo para sus huesos y articulaciones.
          </p>
          <p class="texto-white">
            Irresistible sabor, Mayor vitalidad, Pelo Brillante y Heces mas
            firmes.
          </p>
          <p class="texto-white">
            El aporte de aceites (fuente de ácidos grasos Omega 6), vitamina
            A, biotina, ácido pantoténico y zic aseguran una piel sana y un
            pelo fuerte, suave y brillante, minimizando su caída.
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
