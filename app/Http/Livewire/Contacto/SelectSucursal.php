<?php

namespace App\Http\Livewire\Contacto;

use App\Models\Sucursale;
use Livewire\Component;

class SelectSucursal extends Component
{
    public $sucursales, $sucursal_id;
    protected $listeners = ['selectSucursal' => 'buscarSucursales'];


    public function buscarSucursales($departamento)
    {
        $this->sucursales = Sucursale::with('persona')->where('departamento', $departamento)->get();
    }

    public function buscaSucursal()
    {
        $sucursal = Sucursale::findOrFail($this->sucursal_id);
        $datos['nombre_sucursal'] = $sucursal->nombre_sucursal;
        $datos['direccion'] = $sucursal->direccion;
        $datos['coordenadas'] = $sucursal->coordenadas;
        $this->emit('mostrarMapa', $datos);
        $this->emit('enviarConsulta', $sucursal->id);

    }

    // public function mostrarMapa()
    // {
    //     $this->emit('mostrarMapa', $this->sucursal_id);
    // }


    public function render()
    {
        return view('livewire.contacto.select-sucursal');
    }
}
