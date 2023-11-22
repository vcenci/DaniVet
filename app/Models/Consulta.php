<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "consultas";
    
    protected $fillable = [
        "descricao",
        "data",
        "id_categoria",
        "id_paciente"
    ];
}
