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
        "principio_ativo",
        "administracao",
        "dose",
        "lote",
        "validade",
        "id_classificacao",
        "id_especie"
    ];
}
