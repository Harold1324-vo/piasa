<?php

namespace App\Http\Controllers;

use App\Models\Informacion;
use App\Models\Sistema;
use Illuminate\Http\Request;

class InformacionController extends Controller
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
        //
        $sistema = Sistema::findOrFail($id);

        $this->validate($request, [
            'anoComienzoOperaciones' => 'required',
            'consultaInformacion' => 'required',
            'requiereActualizacion' => 'required',
            'fechaUltimaActualizacion' => 'required',
            'datosAbiertos' => 'required',
            'tipoPublicacion' => 'required',
            'nivelInteraccion' => 'required',
            'etapaActual' => 'required',
            'subEtapaActual' => 'required',
            'faseActual' => 'required',
            'legado' => 'required',
            'modeloOperacion' => 'required',
            'interaccionDependencias' => 'required',
            'interaccionOtrasAreas' => 'required',
            'migrado' => 'required',
        ]);

        $anoComienzoOperaciones = $request->input('anoComienzoOperaciones');
        $consultaInformacion = $request->input('consultaInformacion');
        $requiereActualizacion = $request->input('requiereActualizacion');
        $fechaUltimaActualizacion = $request->input('fechaUltimaActualizacion');
        $datosAbiertos = $request->input('datosAbiertos');
        $tipoPublicacion = $request->input('tipoPublicacion');
        $nivelInteraccion = $request->input('nivelInteraccion');
        $etapaActual = $request->input('etapaActual');
        $subEtapaActual = $request->input('subEtapaActual');
        $faseActual = $request->input('faseActual');
        $legado = $request->input('legado');
        $modeloOperacion = $request->input('modeloOperacion');
        $interaccionDependencias = $request->input('interaccionDependencias');
        $interaccionOtrasAreas = $request->input('interaccionOtrasAreas');
        $migrado = $request->input('migrado');

        $informacion = new Informacion();

        $informacion->anoComienzoOperaciones=$anoComienzoOperaciones;
        $informacion->consultaInformacion=$consultaInformacion;
        $informacion->requiereActualizacion=$requiereActualizacion;
        $informacion->fechaUltimaActualizacion=$fechaUltimaActualizacion;
        $informacion->datosAbiertos=$datosAbiertos;
        $informacion->tipoPublicacion=$tipoPublicacion;
        $informacion->nivelInteraccion=$nivelInteraccion;
        $informacion->etapaActual=$etapaActual;
        $informacion->subEtapaActual=$subEtapaActual;
        $informacion->faseActual=$faseActual;
        $informacion->legado=$legado;
        $informacion->modeloOperacion=$modeloOperacion;
        $informacion->interaccionDependencias=$interaccionDependencias;
        $informacion->interaccionOtrasAreas=$interaccionOtrasAreas;
        $informacion->migrado=$migrado;
        $informacion->idSistema = $sistema->id;
        
        $informacion->save();

        return redirect()->back()->with('Mensaje', 'Genial xd');
    }

    /**
     * Display the specified resource.
     */
    public function show(Informacion $informacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Informacion $informacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Informacion $informacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Informacion $informacion)
    {
        //
    }
}
