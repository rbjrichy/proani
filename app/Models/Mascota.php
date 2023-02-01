<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'mascotas';
    protected $dates = ['fecha_nac'];
    protected $fillable = [
        'nombres', 'sexo', 'descripcion', 'foto', 'fecha_nac', 'persona_id'
    ];

    public function miPersona()
    {
        return $this->belongsTo(Persona::class);
    }

}
