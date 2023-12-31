<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "pacientes";
    
    protected $fillable = [
        "nome",
        "id_proprietario",
        "idade",
        "sexo",
        "pelagem",
        "peso",
        "id_raca",
        "id_especie"
    ];

}
