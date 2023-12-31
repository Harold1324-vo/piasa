<?php

namespace App\Http\Controllers;

use App\Models\RolSistema;
use App\Models\RolSistemas;
use App\Models\Sistema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RolSistemasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $sistema = Sistema::findOrFail($id);

        //
        $validator = Validator::make($request->all(), [
            'nombreLiderProyecto' => 'required|string|min:8|max:255',
            'puestoLiderProyecto' => 'required|string|min:8|max:255',
            'nombreAdministradorProyecto' => 'required|string|min:8|max:255',
            'puestoAdministradorProyecto' => 'required|string|min:8|max:255',
            'nombreDesarrollador' => 'required|string|min:5|max:255',
            'puestoDesarrollador' => 'required|string|min:5|max:255',
            'areaUsuaria' => 'required|string|min:3|max:255',
            'puestoUsuario' => 'required|string|min:5|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $nombreLiderProyecto = $request->input('nombreLiderProyecto');
        $puestoLiderProyecto = $request->input('puestoLiderProyecto');
        $nombreAdministradorProyecto = $request->input('nombreAdministradorProyecto');
        $puestoAdministradorProyecto = $request->input('puestoAdministradorProyecto');
        $nombreDesarrollador = $request->input('nombreDesarrollador');
        $puestoDesarrollador = $request->input('puestoDesarrollador');
        $areaUsuaria = $request->input('areaUsuaria');
        $areaUsuaria = $request->input('areaUsuaria');
        $puestoUsuario = $request->input('puestoUsuario');

        $rolSistemas = new RolSistemas();

        $rolSistemas->nombreLiderProyecto = $nombreLiderProyecto;
        $rolSistemas->puestoLiderProyecto = $puestoLiderProyecto;
        $rolSistemas->nombreAdministradorProyecto = $nombreAdministradorProyecto;
        $rolSistemas->puestoAdministradorProyecto = $puestoAdministradorProyecto;
        $rolSistemas->nombreDesarrollador = $nombreDesarrollador;
        $rolSistemas->puestoDesarrollador = $puestoDesarrollador;
        $rolSistemas->areaUsuaria = $areaUsuaria;
        $rolSistemas->puestoUsuario = $puestoUsuario;
        $rolSistemas->idSistema = $sistema->id;

        $rolSistemas->save();

        return response()->json(['success' => '¡Roles registrados exitosamente!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(RolSistemas $rolSistemas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encuentra el sistema con sus roles
        $sistema = Sistema::with('rolesSistemas')->findOrFail($id);

        // Pasa el sistema a la vista
        return view('sistema.edit', compact('sistema'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Busca el sistema
        $sistema = Sistema::findOrFail($id);

        // Valida los datos del formulario
        $request->validate([
            'nombreLiderProyecto' => 'required|string|min:8|max:255',
            'puestoLiderProyecto' => 'required|string|min:8|max:255',
            'nombreAdministradorProyecto' => 'required|string|min:8|max:255',
            'puestoAdministradorProyecto' => 'required|string|min:8|max:255',
            'nombreDesarrollador' => 'required|string|min:5|max:255',
            'puestoDesarrollador' => 'required|string|min:5|max:255',
            'areaUsuaria' => 'required|string|min:3|max:255',
            'puestoUsuario' => 'required|string|min:5|max:255',
        ]);

        // Busca y actualiza el rolSistemas existente
        $rolSistemas = RolSistemas::where('idSistema', $sistema->id)->first();

        $rolSistemas->nombreLiderProyecto = $request->input('nombreLiderProyecto');
        $rolSistemas->puestoLiderProyecto = $request->input('puestoLiderProyecto');
        $rolSistemas->nombreAdministradorProyecto = $request->input('nombreAdministradorProyecto');
        $rolSistemas->puestoAdministradorProyecto = $request->input('puestoAdministradorProyecto');
        $rolSistemas->nombreDesarrollador = $request->input('nombreDesarrollador');
        $rolSistemas->puestoDesarrollador = $request->input('puestoDesarrollador');
        $rolSistemas->areaUsuaria = $request->input('areaUsuaria');
        $rolSistemas->puestoUsuario = $request->input('puestoUsuario');

        $rolSistemas->save();

        return response()->json(['success' => '¡Roles actualizados exitosamente!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RolSistemas $rolSistemas)
    {
        //
    }
}
