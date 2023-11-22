<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{
    public $timestamps = false;
    
    use HasFactory;

    protected $table = "racas";
    
    protected $fillable = [
        "raca",
        "id_especie"
    ];

}
