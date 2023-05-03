<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProducto;
use App\Models\Dato;
use App\Models\Especy;
use App\Models\Evento;
use App\Models\Producto;
use App\Models\Sucursale;
use App\Models\ThemeImg;
use App\Models\Video;
use Illuminate\Http\Request;
use Psy\Output\Theme;

class ThemeProaniController extends Controller
{
    public function simposios()
    {
        $simposios = Evento::where('tipo_evento','Simposios')->get();
        return view('theme.proanisrl.pages.simposio')->with(compact('simposios'));
    }

    public function ferias()
    {
        $ferias = Evento::where('tipo_evento','Ferias')->get();
        return view('theme.proanisrl.pages.feria')->with(compact('ferias'));
    }

    public function adopcion()
    {
        $adopciones = Evento::where('tipo_evento','Adopciones')->get();
        return view('theme.proanisrl.pages.adopciones')->with(compact('adopciones'));
    }

    public function voluntariado()
    {
        $voluntariados = Evento::where('tipo_evento','Voluntariado')->get();
        return view('theme.proanisrl.pages.voluntariado')->with(compact('voluntariados'));
    }
    public function videos()
    {
        $lista_videos = Video::all();
        return view('theme.proanisrl.pages.videos')->with(compact('lista_videos'));
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
        return view('theme.proanisrl.pages.ktito-detalle')->with(compact('producto'));
    }

    public function ganaderia()
    {
        $categorias = CategoriaProducto::where('especie','Vacuno')->get();
        return view('theme.proanisrl.pages.ganaderia')->with(compact('categorias'));
    }
    public function peces()
    {
        $categoria = CategoriaProducto::where('especie','Piscicola')->first();
        // dd($categoria);
        $producto = $categoria->productos()->first();
        // dd($producto);
        return view('theme.proanisrl.pages.peces')->with(compact('producto'));
    }

    public function quienes_somos()
    {
        return view('theme.proanisrl.pages.quienes_somos');
    }

    public function contacto()
    {
        $sucursales = Sucursale::with('persona')->where('departamento', 'Santa Cruz')->get();
        // dd($sucursales);
        $departamentos = Sucursale::select('departamento')->groupBy('departamento')->get()->pluck('departamento','departamento');
        // dd($departamentos);
        return view('theme.proanisrl.pages.contacto')->with(compact('departamentos', 'sucursales'));
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
    public function generico($nombre)
    {
        $categoria = CategoriaProducto::where('especie',$nombre)->first();
        $especie = Especy::with('imagenesTheme')->where('nombre', $nombre)->first();
        // dd($especie->getElemento('header')->ruta_img);
        // $imgTheme = ThemeImg::all();
        $producto = null;
        if($categoria){
            $producto = $categoria->productos()->first();
        }
        return view('theme.proanisrl.pages.generico')->with(compact('producto','especie'));
    }
}
