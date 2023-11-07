<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Agregar el modelo de Roles, Permisos y Fachada de Base de Datos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RolSistemaController extends Controller
{

    function __construct()
    {
        /*Se definen los permisos definidos en el SeederTablaPermisos.
            only hace referencia a que solo tendŕan esos permisos para ejecutar el método especificado.*/
         $this->middleware('permission:ver-rol|crear-rol|editar-rol|borrar-rol', ['only' => ['index']]);
         $this->middleware('permission:crear-rol', ['only' => ['create','store']]);
         $this->middleware('permission:editar-rol', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-rol', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        /*En la plantilla roles se muestran todos los roles creados con la ayuda de Paginación*/
        $roles = Role::paginate(5);
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /*Crear roles*/
        $permission = Permission::get();
        return view('roles.create', compact('permission'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*Almacenar roles*/
        $this->validate($request, ['name' => 'required|unique:roles', 'permission' => 'required']);
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        /*Editar un rol
            pluck recupera datos de una clave determinada*/
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
        ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        ->all();

        return view('roles.edit', compact('role', 'permission', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
    
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
    
        $role->syncPermissions($request->input('permission'));
    
        return redirect()->route('roles.index');                        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index');    
    }
}
