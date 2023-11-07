<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sistema;

class Informacion extends Model
{

    protected $table = "informacion";
    
    //Estructura para los campos que pueden ser llenados
    protected $fillable = [
        'anoComienzoOperaciones',
        'consultaInformacion',
        'requiereActualizacion',
        'fechaUltimaActualizacion',
        'datosAbiertos',
        'tipoPublicacion',
        'nivelInteraccion',
        'etapaActual',
        'subEtapaActual',
        'faseActual',
        'legado',
        'modeloOperacion',
        'interaccionDependencias',
        'interaccionOtrasAreas',
        'migrado',
        'idSistema',
    ];
    
    public function Sistema(){
        return $this->belongsTo(Sistema::class, 'idSistema');
    }
}
