<?php

namespace Database\Seeders;

use App\Models\Dato;
use Illuminate\Database\Seeder;

class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sexos = ['Macho', 'Hembra'];
        foreach ($sexos as $sexo) {
            Dato::create([
                'tipo' => 'sexo_mascota',
                'valor' => $sexo,
            ]);
        }

        $meses = ['Ninguno', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        foreach ($meses as $mes) {
            Dato::create([
                'tipo' => 'meses',
                'valor' => $mes,
            ]);
        }

        $especies = ['Canino', 'Gatuno', 'Avicola', 'Porcino', 'Vacuno', 'Equino', 'Piscicola'];
        foreach ($especies as $especie) {
            Dato::create([
                'tipo' => 'especie',
                'valor' => $especie,
            ]);
        }
        $eventos = ['Simposios', 'Ferias', 'Adopciones', 'Voluntariado'];
        foreach ($eventos as $evento) {
            Dato::create([
                'tipo' => 'eventos',
                'valor' => $evento,
            ]);
        }
        $departamentos = ['Santa Cruz', 'La Paz', 'Cochabamba', 'Chuquisaca', 'Tarija', 'Potosi', 'Oruro', 'Beni', 'Pando'];
        foreach ($departamentos as $deparamento) {
            Dato::create([
                'tipo' => 'departamentos',
                'valor' => $deparamento,
            ]);
        }
        $seccion_img = ['header', 'footer','body'];
        foreach ($seccion_img as $tipo) {
            Dato::create([
                'tipo' => 'seccion_img',
                'valor' => $tipo,
            ]);
        }
    }
}
