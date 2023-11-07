<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    use HasFactory;

    //Estructura para los campos que pueden ser llenados
    protected $fillable = [
        'nombreSistema',
        'descripcion',
        'siglas',
        'clasificacion',
        'areaDesarrolladora',
        'estadoActivo',
        'url',
        'consecutivo',
    ];    
}
