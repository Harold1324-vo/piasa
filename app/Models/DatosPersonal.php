<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sistema;

class DatosPersonal extends Model
{

    protected $table = "datos_personales";

    //Estructura para los campos que pueden ser llenados
    protected $fillable = [
        'manejoDatosPersonales',
        'fundamentoLegal',
        'tipoDatosPersonales',
        'formaObtencion',
        'portabilidadDatos',
        'transferenciaDatos',
        'tipoSoporte',
        'avisoPrivacidad',
        'idSistema',
    ];

    public function Sistema(){
        return $this->belongsTo(Sistema::class, 'idSistema');
    }
}
