<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::paginate();
        return view('usuario.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Incovar los roles, asignar a un usuario roles.
        $roles = Role::pluck('name', 'name')->all();
        return view('usuario.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*email -> que sea de tipo email y que sea única
            password -> que se confirme el password*/
        $this->validate($request, [
            'nombre' => 'required|string|min:3|max:255',
            'apellidoPaterno' => 'required|string|min:3|max:255',
            'apellidoMaterno' => 'required|string|min:3|max:255',
            'name' => 'required|string|min:5|max:255',
            'puesto' => 'required|string|min:5|max:255',
            'areaAdscripcion' => 'required|string|min:3|max:255',
            'estado' => 'required|string|max:255',
            'numeroIntentos' => 'required|integer',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|same:confirm-password',
            'roles' => 'required',
        ]);

        //Creación del Usuario
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));


        return redirect()->back()->with('success_usuario_creado', '¡Usuario registrado exitosamente!')->with('script', "
            <script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '¡Usuario registrado exitosamente!',
                    showConfirmButton: false,
                    timer: 3500
                });
            </script>
        ");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        return view('usuario.updatePassword');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRoles = $user->roles->pluck('name')->toArray(); // Obtén los roles del usuario como un array
        $userEstado = $user->estado;
        $userNumeroIntentos = $user->numeroIntentos;

        return view('usuario.edit', compact('user', 'roles', 'userRoles', 'userEstado', 'userNumeroIntentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required|string|min:3|max:255',
            'apellidoPaterno' => 'required|string|min:3|max:255',
            'apellidoMaterno' => 'required|string|min:3|max:255',
            'name' => 'required|string|min:5|max:255',
            'puesto' => 'required|string|min:5|max:255',
            'areaAdscripcion' => 'required|string|min:3|max:255',
            'estado' => 'required|string|max:255',
            'numeroIntentos' => 'required|integer',
            'email' => 'required|email|unique:users,email,' . $id,
            'roles' => 'required',
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));
        return redirect()->back()->with('success_usuario_editado', '¡Usuario editado exitosamente!')->with('script', "
            <script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '¡Usuario editado exitosamente!',
                    showConfirmButton: false,
                    timer: 3500
                });
            </script>
        ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('usuario.index');
    }

    public function usuarioBloqueado()
    {
        return view('usuario.bloqueado');
    }

    public function verDatosUsuario()
    {
        // Obtén el usuario autenticado
        $usuarioAutenticado = Auth::user();

        // Puedes verificar si hay un usuario autenticado antes de continuar
        if ($usuarioAutenticado) {
            // Aquí puedes acceder a las propiedades del usuario
            $nombre = $usuarioAutenticado->nombre;
            $apellidoPaterno = $usuarioAutenticado->apellidoPaterno;
            $apellidoMaterno = $usuarioAutenticado->apellidoMaterno;
            $puesto = $usuarioAutenticado->puesto;
            $areaAdscripcion = $usuarioAutenticado->areaAdscripcion;
            $email = $usuarioAutenticado->email;
            $name = $usuarioAutenticado->name;

            // También puedes cargar estos datos en una vista
            return view('usuario.verDatosUsuario', [
                'nombre' => $nombre,
                'apellidoPaterno' => $apellidoPaterno,
                'apellidoMaterno' => $apellidoMaterno,
                'puesto' => $puesto,
                'areaAdscripcion' => $areaAdscripcion,
                'email' => $email,
                'name' => $name,
            ]);
        } else {
            // Manejar el caso en el que no hay usuario autenticado
            return redirect('/home');
        }
    }

    public function updatePassword(Request $request)
    {
        $request->validate(
            [
                'contrasenia_actual' => 'required',
                'contrasenia_nueva' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,15}$/|confirmed',
            ],
            [
                'contrasenia_actual.required' => 'El campo Contraseña Actual es obligatorio.',
                'contrasenia_nueva.required' => 'El campo Contraseña Nueva es obligatorio.',
                'contrasenia_nueva.regex' => 'La Contraseña Nueva debe tener entre 8 y 15 caracteres, al menos un número, al menos una minúscula, al menos una mayúscula y al menos un caracter especial.',
                'contrasenia_nueva.confirmed' => 'Las contraseñas nuevas deben coincidir.',
            ]
        );

        $user = Auth::user();

        // Verificar la contraseña actual
        if (!Hash::check($request->contrasenia_actual, $user->password)) {
            return redirect()->back()->withErrors(['contrasenia_actual' => 'La contraseña actual no coincide.']);
        }

        // Actualizar la contraseña
        $user->password = Hash::make($request->contrasenia_nueva);
        $user->save();

        return redirect()->back()->with('success_cambio_contrasenia', '¡Contraseña cambiada exitosamente!');
    }
}
