<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = "archivo";

    //Estructura para los campos que pueden ser llenados
    protected $fillable = [
        'nombreArchivo',
    ];    
}
