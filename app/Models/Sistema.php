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

    public function rolesSistemas()
    {
        return $this->hasOne(RolSistemas::class, 'idSistema');
    }

    public function informacion()
    {
        return $this->hasOne(Informacion::class, 'idSistema', 'id');
    }

    public function caracteristica()
    {
        return $this->hasOne(Caracteristica::class, 'idSistema');
    }

    public function documento()
    {
        return $this->hasOne(Documento::class, 'idSistema');
    }

    public function seguridad()
    {
        return $this->hasOne(Seguridad::class, 'idSistema');
    }

    public function datosPersonal()
    {
        return $this->hasOne(DatosPersonal::class, 'idSistema');
    }

    public function mantenimiento()
    {
        return $this->hasOne(Mantenimiento::class, 'idSistema');
    }
}
