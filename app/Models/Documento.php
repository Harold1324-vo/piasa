<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sistema;

class Documento extends Model
{
    protected $table = "documento";

    //Estructura para los campos que pueden ser llenados
    protected $fillable = [
        'documentado',
        'manualUsuario',
        'manualTecnico',
        'manualMantenimiento',
        'politicaPrivacidad',
        'idSistema',
    ];

    public function Sistema(){
        return $this->belongsTo(Sistema::class, 'idSistema');
    }
}
