<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablaPermiso extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Llenado de las tablas de permisos

        $permisos = [
            //Tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            //Tabla procesos
            'ver-procesos',
            'crear-procesos',
            'editar-procesos',
            'borrar-procesos',
        ];

        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
