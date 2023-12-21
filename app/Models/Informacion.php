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
        'consecutivo',
        'idSistema',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($informacion) {
            // Obtener el sistema asociado
            $sistema = $informacion->sistema;

            // Verificar si hay un sistema asociado
            if ($sistema) {
                // Obtener los valores necesarios
                $areaDesarrolladora = $sistema->areaDesarrolladora;
                $anoComienzoOperaciones = $informacion->anoComienzoOperaciones;

                // Generar el valor del campo consecutivo
                $consecutivo = "{$areaDesarrolladora}-{$anoComienzoOperaciones}-{$sistema->id}";

                // Asignar el valor al campo consecutivo
                $informacion->consecutivo = $consecutivo;
            } else {
                // Manejar el caso en el que no hay un sistema asociado
                // Puedes lanzar una excepción, asignar un valor predeterminado, etc.
            }
        });
    }
    
    public function Sistema(){
        return $this->belongsTo(Sistema::class, 'idSistema');
    }
    
}
