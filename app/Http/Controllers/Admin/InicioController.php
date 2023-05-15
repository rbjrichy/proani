<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Especy;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio()
    {
        return view('theme.proanisrl.index');
    }
}
