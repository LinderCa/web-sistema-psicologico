<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * EVALUACION
     */
    public function up(): void
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->char('tipo',1); //TEst o otra_evaluacion
            $table->double('nota',8,2);//Con una presicion de 8 digitos, con 2 decimales
            $table->unsignedBigInteger('idUsuario');
            $table->timestamps();
            //restricciones
            $table->foreign('idUsuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
