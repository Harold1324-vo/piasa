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
            'descripcionMantenimiento' => 'required',
            'periocidadMantenimiento' => 'required',
            'areaResponsable' => 'required',
            'nombreTecnicoResponsable' => 'required',
            'nombreCoordinador' => 'required',
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

        return redirect()->back()->with('Mensaje', 'Genial xd');
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
    public function edit(Mantenimiento $mantenimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mantenimiento $mantenimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mantenimiento $mantenimiento)
    {
        //
    }
}
