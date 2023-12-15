<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sistema;

class Seguridad extends Model
{

    protected $table = "seguridad";
    //Estructura para los campos que pueden ser llenados
    protected $fillable = [
        'determinarRoles',
        'procesoBorrado',
        'controlAcceso',
        'conocimientoPrincipios',
        'protocoloSeguridad',
        'idSistema',
    ];

    public function Sistema(){
        return $this->belongsTo(Sistema::class, 'idSistema');
    }
}