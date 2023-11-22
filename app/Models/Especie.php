<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table = "especies";
    
    protected $fillable = [
        "especie"
    ];
}
