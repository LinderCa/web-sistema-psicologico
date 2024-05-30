<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        //Postulante
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            //$table->string('documento')->nullable();
            $table->date('fecha');
            $table->boolean('estado'); //Activo e inactivo
            $table->unsignedInteger('promedio')->nullable(); //Promedio de las evaluaciones
            $table->timestamps();
            $table->unsignedBigInteger('idUsuario');
            //Agregamos la restriccion de clave foranea
            $table->foreign('idUsuario')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }

    //
};
