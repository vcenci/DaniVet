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
        Schema::create('proprietarios', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("cpf");
            $table->string("telefone");
            $table->string("email");
            $table->string("nomeRua");
            $table->integer("numero");
            $table->string("bairro");
            $table->string("cep");
            $table->string("cidade");
            $table->string("uf");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprietarios');
    }
};
