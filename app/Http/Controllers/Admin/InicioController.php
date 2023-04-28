<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Especy;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio()
    {
        $menu = Especy::where('activo',1)->select('id','nombre', 'codigo_svg', 'icono', 'usar_icono', 'name_ruta')->get();
        session(['menu' => $menu]);
        return view('theme.proanisrl.index');
    }
}
