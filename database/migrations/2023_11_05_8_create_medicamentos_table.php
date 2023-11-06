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
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("principio_ativo");
            $table->string("administracao");
            $table->string("dose");
            $table->string("lote");
            $table->string("validade");
            $table->unsignedBigInteger("id_classificacao");
            $table->unsignedBigInteger("id_especie");
            $table->foreign('id_especie')->references('id')->on('especies');
            $table->foreign('id_classificacao')->references('id')->on('classificacoes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
    }
};
