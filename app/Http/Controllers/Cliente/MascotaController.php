<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Http\Requests\MascotaRequest;
use App\Models\Dato;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MascotaController extends Controller
{

    public function index()
    {
        $mascotas = Mascota::where('persona_id', Auth::user()->persona_id)->where('activo','1')->get();
        return view('mascotas.index')->with(compact('mascotas'));
    }

    public function create()
    {
        $comboSexo = Dato::where('tipo', 'sexo_mascota')->pluck('valor','valor');
        // dd($comboSexo);
        return view('mascotas.create')->with(compact('comboSexo'));
    }

    public function store(MascotaRequest $request)
    {
        // dd($request->all());
        $mascota = Mascota::create($request->all());
        if ($request->hasFile('foto')) {
            $this->guardarImagen($request->file('foto'), 'public/mascotas', $mascota);
        }
        session(['msj-success'=>'Se guardaron los datos correctamente.']);
        return redirect()->route('mascota.index');
    }

    public function edit(Mascota $mascotum)
    {
        $mascota = $mascotum;
        $comboSexo = Dato::where('tipo', 'sexo_mascota')->pluck('valor','valor');
        return view('mascotas.edit')->with(compact('comboSexo','mascota'));
    }

    public function update(MascotaRequest $request, Mascota $mascotum)
    {
        if ($request->hasFile('foto')) {
            $this->guardarImagen($request->file('foto'), 'public/mascotas', $mascotum);
        }
        session(['msj-success'=>'Datos actualizados correctamente.']);
        $mascotum->update($request->except('foto'));
        return redirect()->route('mascota.index');
    }

    public function destroy(Request $request, Mascota $mascotum)
    {
        //Verificando que el usuario logueado elimine a sus mascotas
        if (Auth::user()->persona_id == $mascotum->persona_id) {
            //eliminar la imagen relacionada
            if ($mascotum->foto != 'default.png') {
                Storage::delete('public/mascotas/'.$mascotum->foto);
            }
            $mascotum->delete();
            session(['msj-success'=>'Eliminaci??n exitosa!']);
        }else{
            session(['msj-warning'=>'Usted no puede realizar esta acci??n']);
        }
        return redirect()->route('mascota.index');
    }

    public function guardarImagen($imagen, $ruta='public/mascotas', $mascota)
    {
        $nombreImg = $imagen->getClientOriginalName();
        $imgExtencion = substr($nombreImg, strlen($nombreImg)-4);
        $newFileName = $mascota->id.'_'.rand(100,9999).'_'.$imgExtencion;
        $imagen->storeAs($ruta, $newFileName);
        if($mascota->foto != 'default.png')
        {
            Storage::delete($ruta.'/'.$mascota->foto);
        }
        $mascota->foto = $newFileName;
        $mascota->save();
    }
}
