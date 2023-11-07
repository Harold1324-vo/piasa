<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sistema;

class RolSistemas extends Model
{
    //Estructura para los campos que pueden ser llenados
    protected $fillable = [
        'nombreLiderProyecto',
        'puestoLiderProyecto',
        'nombreAdministradorProyecto',
        'puestoAdministradorProyecto',
        'nombreDesarrollador',
        'puestoDesarrollador',
        'areaUsuaria',
        'puestoUsuario',
        'idSistema',
    ];
    
    public function Sistema(){
        return $this->belongsTo(Sistema::class, 'idSistema');
    }
}
