<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrusel;
use App\Models\CategoriaProducto;
use App\Models\Especy;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio()
    {
        $carrusel = Carrusel::with('miespecie')->where('activa','1')->get();
        $especies = Especy::where('activo', '1')
                          ->join('carrusel', 'especies.id', '=', 'carrusel.especie_id')
                          ->select('especies.id','especies.nombre')
                          ->pluck('id','nombre')->toArray();
        $logos = [];
        foreach ($especies as $especie => $id) {
            $listaLogos = CategoriaProducto::where('especie_id', $id)
                                            ->select('logo')
                                            ->pluck('logo')
                                            ->toArray();
            $logos[$especie] = $listaLogos;
        }
        // dd($logos);
        return view('theme.proanisrl.index')->with(compact('carrusel','logos'));
    }
}
