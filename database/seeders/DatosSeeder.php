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
    }
}
