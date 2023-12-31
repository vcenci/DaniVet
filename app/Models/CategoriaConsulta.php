<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaConsulta extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table = "categoria_consulta";
    
    protected $fillable = [
        "tipoConsulta"
    ];

}
