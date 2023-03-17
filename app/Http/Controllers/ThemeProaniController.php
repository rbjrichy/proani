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

    public function kninodetalle($producto)
    {
        $producto = Producto::FindOrFail($producto);
        return view('theme.proanisrl.pages.knino-detalle')->with(compact('producto'));
    }
    public function ktito()
    {
        $categoria = CategoriaProducto::where('especie','gatuno')->first();
        $productos = $categoria->productos;
        return view('theme.proanisrl.pages.ktito')->with(compact('productos'));
    }

    public function ktitodetalle($producto)
    {
        $producto = Producto::FindOrFail($producto);
        return view('theme.proanisrl.pages.ktito-detalle')->with(compact('productos'));
    }

    public function ganaderia()
    {
        $categorias = CategoriaProducto::where('especie','Vacuno')->get();
        return view('theme.proanisrl.pages.ganaderia')->with(compact('categorias'));
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
    public function ganaderiadetalle($categoria)
    {
        $categoria = CategoriaProducto::FindOrFail($categoria);
        $producto = $categoria->productos()->first();
        return view('theme.proanisrl.pages.ganaderia-detalle')->with(compact('producto'));
    }
    public function guia_alimentaria()
    {
        return view('theme.proanisrl.pages.guia-alimentaria');
    }
}
