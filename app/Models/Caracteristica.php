<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    
    protected $table = "caracteristica";
    //Estructura para los campos que pueden ser llenados
    protected $fillable = [
        'sistemaOperativo',
        'controlVersiones',
        'versionSistema',
        'lenguajeProgramacion',
        'otroLenguajeProgramacion',
        'frameworks',
        'despliegue',
        'otroServidorWeb',
        'manejadorBD',
        'nombreBD',
        'plataformaDesarrollo',
        'usoAPI',
        'idSistema',
    ];

    public function Sistema(){
        return $this->belongsTo(Sistema::class, 'idSistema');
    }
}
