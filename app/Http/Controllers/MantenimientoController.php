<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Http\Request;
use App\Models\Sistema;

class MantenimientoController extends Controller
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
            'requiereMantenimiento' => 'required',
            'tipoMantenimiento' => 'required',
            'descripcionMantenimiento' => 'required|string|min:4|max:255',
            'periocidadMantenimiento' => 'required',
            'areaResponsable' => 'required|string|min:3|max:255',
            'nombreTecnicoResponsable' => 'required|string|min:6|max:255',
            'nombreCoordinador' => 'required|string|min:6|max:255',
        ]);

        $requiereMantenimiento = $request->input('requiereMantenimiento');
        $tipoMantenimiento = $request->input('tipoMantenimiento');
        $descripcionMantenimiento = $request->input('descripcionMantenimiento');
        $periocidadMantenimiento = $request->input('periocidadMantenimiento');
        $areaResponsable = $request->input('areaResponsable');
        $nombreTecnicoResponsable = $request->input('nombreTecnicoResponsable');
        $nombreCoordinador = $request->input('nombreCoordinador');

        $mantenimiento = new Mantenimiento();

        $mantenimiento->requiereMantenimiento=$requiereMantenimiento;
        $mantenimiento->tipoMantenimiento=$tipoMantenimiento;
        $mantenimiento->descripcionMantenimiento=$descripcionMantenimiento;
        $mantenimiento->periocidadMantenimiento=$periocidadMantenimiento;
        $mantenimiento->areaResponsable=$areaResponsable;
        $mantenimiento->nombreTecnicoResponsable=$nombreTecnicoResponsable;
        $mantenimiento->nombreCoordinador=$nombreCoordinador;
        $mantenimiento->idSistema = $sistema->id;
        
        $mantenimiento->save();

        return response()->json(['success' => '¡Mantenimiento registrado exitosamente!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mantenimiento $mantenimiento)
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
            'requiereMantenimiento' => 'required',
            'tipoMantenimiento' => 'required',
            'descripcionMantenimiento' => 'required',
            'periocidadMantenimiento' => 'required',
            'areaResponsable' => 'required',
            'nombreTecnicoResponsable' => 'required',
            'nombreCoordinador' => 'required',
        ]);

        // Busca y actualiza el rolSistemas existente
        $mantenimiento = Mantenimiento::where('idSistema', $sistema->id)->first();

        $mantenimiento->requiereMantenimiento = $request->input('requiereMantenimiento');
        $mantenimiento->tipoMantenimiento = $request->input('tipoMantenimiento');
        $mantenimiento->descripcionMantenimiento = $request->input('descripcionMantenimiento');
        $mantenimiento->periocidadMantenimiento = $request->input('periocidadMantenimiento');
        $mantenimiento->areaResponsable = $request->input('areaResponsable');
        $mantenimiento->nombreTecnicoResponsable = $request->input('nombreTecnicoResponsable');
        $mantenimiento->nombreCoordinador = $request->input('nombreCoordinador');

        $mantenimiento->save();

        return redirect()->back()->with('Mensaje', 'Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mantenimiento $mantenimiento)
    {
        //
    }
}
