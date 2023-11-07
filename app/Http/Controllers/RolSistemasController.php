<?php

namespace App\Http\Controllers;

use App\Models\RolSistemas;
use App\Models\Sistema;
use Illuminate\Http\Request;

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
        $this->validate($request, [
            'nombreLiderProyecto' => 'required',
            'puestoLiderProyecto' => 'required',
            'nombreAdministradorProyecto' => 'required',
            'puestoAdministradorProyecto' => 'required',
            'nombreDesarrollador' => 'required',
            'puestoDesarrollador' => 'required',
            'areaUsuaria' => 'required',
            'puestoUsuario' => 'required',
        ]);

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

        $rolSistemas->nombreLiderProyecto=$nombreLiderProyecto;
        $rolSistemas->puestoLiderProyecto=$puestoLiderProyecto;
        $rolSistemas->nombreAdministradorProyecto=$nombreAdministradorProyecto;
        $rolSistemas->puestoAdministradorProyecto=$puestoAdministradorProyecto;
        $rolSistemas->nombreDesarrollador=$nombreDesarrollador;
        $rolSistemas->puestoDesarrollador=$puestoDesarrollador;
        $rolSistemas->areaUsuaria=$areaUsuaria;
        $rolSistemas->puestoUsuario=$puestoUsuario;
        $rolSistemas->idSistema = $sistema->id;
        
        $rolSistemas->save();

        return redirect()->back()->with('Mensaje', 'Genial xd');
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
    public function edit(RolSistemas $rolSistemas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RolSistemas $rolSistemas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RolSistemas $rolSistemas)
    {
        //
    }
}
