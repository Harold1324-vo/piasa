<?php

namespace App\Http\Controllers;

use App\Models\DatosPersonal;
use Illuminate\Http\Request;
use App\Models\Sistema;

class DatosPersonalController extends Controller
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
            'manejoDatosPersonales' => 'required',
            'fundamentoLegal' => 'required',
            'tipoDatosPersonales' => 'required',
            'formaObtencion' => 'required',
            'portabilidadDatos' => 'required',
            'transferenciaDatos' => 'required',
            'tipoSoporte' => 'required',
            'avisoPrivacidad' => 'required',
        ]);

        $manejoDatosPersonales = $request->input('manejoDatosPersonales');
        $fundamentoLegal = $request->input('fundamentoLegal');
        $tipoDatosPersonales = $request->input('tipoDatosPersonales');
        $formaObtencion = $request->input('formaObtencion');
        $portabilidadDatos = $request->input('portabilidadDatos');
        $transferenciaDatos = $request->input('transferenciaDatos');
        $tipoSoporte = $request->input('tipoSoporte');
        $avisoPrivacidad = $request->input('avisoPrivacidad');

        $datosPersonal = new DatosPersonal();

        $datosPersonal->manejoDatosPersonales=$manejoDatosPersonales;
        $datosPersonal->fundamentoLegal=$fundamentoLegal;
        $datosPersonal->tipoDatosPersonales=$tipoDatosPersonales;
        $datosPersonal->formaObtencion=$formaObtencion;
        $datosPersonal->portabilidadDatos=$portabilidadDatos;
        $datosPersonal->transferenciaDatos=$transferenciaDatos;
        $datosPersonal->tipoSoporte=$tipoSoporte;
        $datosPersonal->avisoPrivacidad=$avisoPrivacidad;
        $datosPersonal->idSistema = $sistema->id;
        
        $datosPersonal->save();

        return response()->json(['success' => '¡Datos Personales registrados exitosamente!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(DatosPersonal $datosPersonal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encuentra el sistema con sus roles
        $sistema = Sistema::with('datosPersonal')->findOrFail($id);

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
            'manejoDatosPersonales' => 'required',
            'fundamentoLegal' => 'required',
            'tipoDatosPersonales' => 'required',
            'formaObtencion' => 'required',
            'portabilidadDatos' => 'required',
            'transferenciaDatos' => 'required',
            'tipoSoporte' => 'required',
            'avisoPrivacidad' => 'required',
        ]);

        // Busca y actualiza el rolSistemas existente
        $datosPersonal = DatosPersonal::where('idSistema', $sistema->id)->first();

        $datosPersonal->manejoDatosPersonales = $request->input('manejoDatosPersonales');
        $datosPersonal->fundamentoLegal = $request->input('fundamentoLegal');
        $datosPersonal->tipoDatosPersonales = $request->input('tipoDatosPersonales');
        $datosPersonal->formaObtencion = $request->input('formaObtencion');
        $datosPersonal->portabilidadDatos = $request->input('portabilidadDatos');
        $datosPersonal->transferenciaDatos = $request->input('transferenciaDatos');
        $datosPersonal->tipoSoporte = $request->input('tipoSoporte');
        $datosPersonal->avisoPrivacidad = $request->input('avisoPrivacidad');

        $datosPersonal->save();

        return response()->json(['success' => '¡Datos Personales actualizados exitosamente!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DatosPersonal $datosPersonal)
    {
        //
    }
}
