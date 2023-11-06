<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietario extends Model
{
    use HasFactory;

    protected $table = "proprietarios";
    
    protected $fillable = [
        "nome",
        "cpf",
        "endereco",
        "telefone",
        "email",
        "rua",
        "numero",
        "bairro",
        "cep",
        "cidade",
        "uf"
    ];
}
