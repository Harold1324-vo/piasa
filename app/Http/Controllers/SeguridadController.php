<?php

namespace App\Http\Controllers;

use App\Models\Seguridad;
use App\Models\Sistema;
use Illuminate\Http\Request;

class SeguridadController extends Controller
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

        $this->validate($request, [
            'determinarRoles' => 'required',
            'procesoBorrado' => 'required',
            'controlAcceso' => 'required',
            'conocimientoPrincipios' => 'required',
            'protocoloSeguridad' => 'required',
        ]);

        $determinarRoles = $request->input('determinarRoles');
        $procesoBorrado = $request->input('procesoBorrado');
        $controlAcceso = $request->input('controlAcceso');
        $conocimientoPrincipios = $request->input('conocimientoPrincipios');
        $protocoloSeguridad = $request->input('protocoloSeguridad');

        $seguridad = new Seguridad();

        $seguridad->determinarRoles=$determinarRoles;
        $seguridad->procesoBorrado=$procesoBorrado;
        $seguridad->controlAcceso=$controlAcceso;
        $seguridad->conocimientoPrincipios=$conocimientoPrincipios;
        $seguridad->protocoloSeguridad=$protocoloSeguridad;
        $seguridad->idSistema = $sistema->id;
        
        $seguridad->save();

        return response()->json(['success' => '¡Seguridad registrada exitosamente!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Seguridad $seguridad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encuentra el sistema con sus roles
        $sistema = Sistema::with('seguridad')->findOrFail($id);

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
            'determinarRoles' => 'required',
            'procesoBorrado' => 'required',
            'controlAcceso' => 'required',
            'conocimientoPrincipios' => 'required',
            'protocoloSeguridad' => 'required',
        ]);

        // Busca y actualiza el rolSistemas existente
        $seguridad = Seguridad::where('idSistema', $sistema->id)->first();

        $seguridad->determinarRoles = $request->input('determinarRoles');
        $seguridad->procesoBorrado = $request->input('procesoBorrado');
        $seguridad->controlAcceso = $request->input('controlAcceso');
        $seguridad->conocimientoPrincipios = $request->input('conocimientoPrincipios');
        $seguridad->protocoloSeguridad = $request->input('protocoloSeguridad');

        $seguridad->save();

        return response()->json(['success' => '¡Seguridad actualizada exitosamente!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seguridad $seguridad)
    {
        //
    }
}
