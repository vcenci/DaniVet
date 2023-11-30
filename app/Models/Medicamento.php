<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table = "medicamentos";
    
    protected $fillable = [
        "nome",
        "principioAtivo",
        "administracao",
        "dose",
        "lote",
        "status",
        "validade",
        "id_classificacao",
        "id_especie"
    ];
}
