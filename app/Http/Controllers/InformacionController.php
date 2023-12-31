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
            'interaccionDependencias' => 'required|string|max:255',
            'interaccionOtrasAreas' => 'required|string|max:255',
            'migrado' => 'required',
            'consecutivo' => ''
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
        $consecutivo = $request->input('consecutivo');

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
        $informacion->consecutivo = $consecutivo;
        $informacion->idSistema = $sistema->id;
        
        $informacion->save();

        return response()->json(['success' => '¡Información registrada exitosamente!']);
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
    public function edit($id)
    {
        // Encuentra el sistema con sus roles
        $sistema = Sistema::with('informacion')->findOrFail($id);

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

        // Busca y actualiza el rolSistemas existente
        $informacion = Informacion::where('idSistema', $sistema->id)->first();

        $informacion->anoComienzoOperaciones = $request->input('anoComienzoOperaciones');
        $informacion->consultaInformacion = $request->input('consultaInformacion');
        $informacion->requiereActualizacion = $request->input('requiereActualizacion');
        $informacion->fechaUltimaActualizacion = $request->input('fechaUltimaActualizacion');
        $informacion->datosAbiertos = $request->input('datosAbiertos');
        $informacion->tipoPublicacion = $request->input('tipoPublicacion');
        $informacion->nivelInteraccion = $request->input('nivelInteraccion');
        $informacion->etapaActual = $request->input('etapaActual');
        $informacion->subEtapaActual = $request->input('subEtapaActual');
        $informacion->faseActual = $request->input('faseActual');
        $informacion->legado = $request->input('legado');
        $informacion->modeloOperacion = $request->input('modeloOperacion');
        $informacion->interaccionDependencias = $request->input('interaccionDependencias');
        $informacion->interaccionOtrasAreas = $request->input('interaccionOtrasAreas');
        $informacion->migrado = $request->input('migrado');

        $informacion->save();

        return response()->json(['success' => '¡Información actualizada exitosamente!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Informacion $informacion)
    {
        //
    }
}
