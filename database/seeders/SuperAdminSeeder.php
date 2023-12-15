<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creación del usuario Admin
        $usuario = User::create([
            'name' => 'HaroldVO',
            'nombre' => 'Harold de Jesús',
            'apellidoPaterno' => 'Ventura',
            'apellidoMaterno' => 'Ortiz',
            'puesto' => 'Desarrollador',
            'areaAdscripcion' => 'TIC',
            'estado' => 0,
            'numeroIntentos' => 0,
            'email' => 'harold@gmail.com',
            'password' => bcrypt('harold123'),
        ]);

        $usuario2 = User::create([
            'name' => 'JesusOV',
            'nombre' => 'Jesus',
            'apellidoPaterno' => 'Ortiz',
            'apellidoMaterno' => 'Ventura',
            'puesto' => 'Residente',
            'areaAdscripcion' => 'IMPAC',
            'estado' => 0,
            'numeroIntentos' => 0,
            'email' => 'jesus@gmail.com',
            'password' => bcrypt('jesus123'),
        ]);

        //Asignación del rol "Adminstrador" al usuario en caso de que no se haya creado algun rol
        $rolAdmin = Role::create(['name' => 'Administrador']);
        $permisosAdmin = Permission::pluck('id', 'id')->all();
        $rolAdmin->syncPermissions($permisosAdmin);

        //Asignación del rol "usuario general" al usuario
        $rolUsuarioGeneral = Role::create(['name' => 'Usuario Invitado']);
        $permisosUsuario = Permission::whereIn('name', ['ver-procesos'])->pluck('id');
        $rolUsuarioGeneral->syncPermissions($permisosUsuario);

        $usuario->assignRole([$rolAdmin]);
        $usuario2->assignRole([$rolUsuarioGeneral]);
    }
}
