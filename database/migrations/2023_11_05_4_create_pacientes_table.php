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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("idade");
            $table->string("sexo");
            $table->string("pelagem");
            $table->string("peso");
            $table->unsignedBigInteger('id_raca');
            $table->unsignedBigInteger('id_especie');
            $table->unsignedBigInteger("id_proprietario");
            $table->foreign('id_raca')->references('id')->on('racas');
            $table->foreign('id_especie')->references('id')->on('especies');
            $table->foreign('id_proprietario')->references('id')->on('proprietarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
