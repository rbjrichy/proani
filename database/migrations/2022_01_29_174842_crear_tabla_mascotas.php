<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMascotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 250);
            $table->date('fecha_nac')->nullable();
            $table->string('sexo',10)->nullable();
            $table->string('raza','250')->nullable();
            $table->string('foto', 100)->default('default.png');
            $table->string('descripcion',250)->nullable();
            $table->boolean('activo')->default(1);
            $table->unsignedBigInteger('persona_id');
            $table->timestamps();
            $table->foreign('persona_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
}
