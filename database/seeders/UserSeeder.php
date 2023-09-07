<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'HaroldVO',
            'nombre' => 'Harold de Jesús',
            'apellidoPaterno' => 'Ventura',
            'apellidoMaterno' => 'Ortiz',
            'puesto' => 'Desarrollador',
            'areaAdscripcion' => 'TIC',
            'estado' => 0,
            'numeroIntentos' => 0,
            'email' => 'harold@gmail.com',
            'password' => Hash::make('harold123'),
            'idRol' => 1,
        ])->assignRole('Administrador');

        User::create([
            'name' => 'JesusOV',
            'nombre' => 'Jesus',
            'apellidoPaterno' => 'Ortiz',
            'apellidoMaterno' => 'Ventura',
            'puesto' => 'Residente',
            'areaAdscripcion' => 'IMPAC',
            'estado' => 0,
            'numeroIntentos' => 0,
            'email' => 'jesus@gmail.com',
            'password' => Hash::make('jesus123'),
            'idRol' => 2,
        ])->assignRole('UsuarioInvitado');
    }
}
