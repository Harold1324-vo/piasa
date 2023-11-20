<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::paginate(5);
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
            'name' => 'required',
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'puesto' => 'required',
            'areaAdscripcion' => 'required',
            'estado' => 'required',
            'numeroIntentos' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);


        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('usuario.index');
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
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('usuario.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'puesto' => 'required',
            'areaAdscripcion' => 'required',
            'estado' => 'required',
            'numeroIntentos' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
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
        return redirect()->route('usuario.index');
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

    public function verDatosUsuario(){
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
        $request->validate([
        ],
        [
            'contrasenia_actual.required' => 'El campo Contraseña Actual es obligatorio.',
            'contrasenia_actual.regex' => 'La Contraseña Actual no coincide.',

          
        ]);
 
        $user = Auth::user();

        if (!Hash::check($request->contrasenia_actual, $user->password)) {
            return redirect()->back()->withErrors(['contrasenia_actual' => 'La contraseña actual no coincide.']);
        }

        $user->password = Hash::make($request->contrasenia_nueva);
        $user->save();

        return redirect()->back()->with('success_cambio_contrasenia', '¡Contraseña cambiada exitosamente!');
    }
}
