<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Citas
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->boolean('estado');//Antendido , no Atendido
            $table->unsignedBigInteger('idUsuario');
            $table->timestamps();

            //Restrincion
            $table->foreign('idUsuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
