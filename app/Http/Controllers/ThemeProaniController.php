<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProducto;
use App\Models\Producto;
use Illuminate\Http\Request;

class ThemeProaniController extends Controller
{
    public function simposios()
    {
        return view('theme.proanisrl.pages.simposio');
    }

    public function ferias()
    {
        return view('theme.proanisrl.pages.feria');
    }

    public function adopcion()
    {
        return view('theme.proanisrl.pages.adopciones');
    }

    public function voluntariado()
    {
        return view('theme.proanisrl.pages.voluntariado');
    }
    public function videos()
    {
        return view('theme.proanisrl.pages.videos');
    }

    public function knino()
    {
        $categoria = CategoriaProducto::where('especie','canino')->first();
        $productos = $categoria->productos;
        return view('theme.proanisrl.pages.knino')->with(compact('productos'));
    }

    public function kninodetalle()
    {
        return view('theme.proanisrl.pages.knino-detalle');
    }
    public function ktito()
    {
        return view('theme.proanisrl.pages.ktito');
    }

    public function ktitodetalle()
    {
        return view('theme.proanisrl.pages.ktito-detalle');
    }

    public function ganaderia()
    {
        return view('theme.proanisrl.pages.ganaderia');
    }
    public function peces()
    {
        return view('theme.proanisrl.pages.peces');
    }

    public function quienes_somos()
    {
        return view('theme.proanisrl.pages.quienes_somos');
    }

    public function contacto()
    {
        return view('theme.proanisrl.pages.contacto');
    }
    public function ganaderiadetalle()
    {
        return view('theme.proanisrl.pages.ganaderia-detalle');
    }
    public function guia_alimentaria()
    {
        return view('theme.proanisrl.pages.guia-alimentaria');
    }
}
