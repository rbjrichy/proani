<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'categoria_productos';

    protected $fillable = ['marca','especie','logo'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'categoria_id');
    }


}
