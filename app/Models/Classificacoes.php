<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classificacoes extends Model
{
    use HasFactory;

    protected $table = "classificacoes";
    
    protected $fillable = [
        "classificacao"
    ];
}
