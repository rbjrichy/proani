<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
   

    public function update(Request $request, Persona $persona)
    {
        //actualizar datos persona
        dd($request->all());
    }

}
