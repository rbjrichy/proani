<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carrusel;
use App\Models\Especy;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio()
    {
        $carrusel = Carrusel::with('miespecie')->where('activa','1')->get();
        // dd($carrusel);
        return view('theme.proanisrl.index')->with(compact('carrusel'));
    }
}
