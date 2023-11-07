<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sistema;

class Mantenimiento extends Model
{

    protected $table = "mantenimiento";
    //Estructura para los campos que pueden ser llenados
    protected $fillable = [
        'requiereMantenimiento',
        'tipoMantenimiento',
        'descripcionMantenimiento',
        'periocidadMantenimiento',
        'areaResponsable',
        'nombreTecnicoResponsable',
        'nombreCoordinador',
        'idSistema',
    ];

    public function Sistema(){
        return $this->belongsTo(Sistema::class, 'idSistema');
    }
}
