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

        return redirect()->back()->with('Mensaje', 'Genial xd');
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
    public function edit(Seguridad $seguridad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seguridad $seguridad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seguridad $seguridad)
    {
        //
    }
}
