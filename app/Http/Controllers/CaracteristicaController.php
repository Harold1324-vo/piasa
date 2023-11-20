<?php

namespace App\Http\Controllers;

use App\Models\Caracteristica;
use App\Models\Sistema;
use Illuminate\Http\Request;

class CaracteristicaController extends Controller
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
            'sistemaOperativo' => 'required',
            'controlVersiones' => 'required',
            'versionSistema' => 'required',
            'lenguajeProgramacion' => 'required',
            'otroLenguajeProgramacion' => 'required',
            'frameworks' => 'required',
            'despliegue' => 'required',
            'otroServidorWeb' => 'required',
            'manejadorBD' => 'required',
            'nombreBD' => 'required',
            'plataformaDesarrollo' => 'required',
            'usoAPI' => 'required',
        ]);

        $sistemaOperativo = $request->input('sistemaOperativo');
        $controlVersiones = $request->input('controlVersiones');
        $versionSistema = $request->input('versionSistema');
        $lenguajeProgramacion = $request->input('lenguajeProgramacion');
        $otroLenguajeProgramacion = $request->input('otroLenguajeProgramacion');
        $frameworks = $request->input('frameworks');
        $despliegue = $request->input('despliegue');
        $otroServidorWeb = $request->input('otroServidorWeb');
        $manejadorBD = $request->input('manejadorBD');
        $nombreBD = $request->input('nombreBD');
        $plataformaDesarrollo = $request->input('plataformaDesarrollo');
        $usoAPI = $request->input('usoAPI');

        $caracteristica = new Caracteristica();

        $caracteristica->sistemaOperativo=$sistemaOperativo;
        $caracteristica->controlVersiones=$controlVersiones;
        $caracteristica->versionSistema=$versionSistema;
        $caracteristica->lenguajeProgramacion=$lenguajeProgramacion;
        $caracteristica->otroLenguajeProgramacion=$otroLenguajeProgramacion;
        $caracteristica->frameworks=$frameworks;
        $caracteristica->despliegue=$despliegue;
        $caracteristica->otroServidorWeb=$otroServidorWeb;
        $caracteristica->manejadorBD=$manejadorBD;
        $caracteristica->nombreBD=$nombreBD;
        $caracteristica->plataformaDesarrollo=$plataformaDesarrollo;
        $caracteristica->usoAPI=$usoAPI;
        $caracteristica->idSistema = $sistema->id;
        
        $caracteristica->save();

        return redirect()->back()->with('Mensaje', 'Genial xd');
    }

    /**
     * Display the specified resource.
     */
    public function show(Caracteristica $caracteristica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encuentra el sistema con sus roles
        $sistema = Sistema::with('caracteristica')->findOrFail($id);

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
            'sistemaOperativo' => 'required',
            'controlVersiones' => 'required',
            'versionSistema' => 'required',
            'lenguajeProgramacion' => 'required',
            'otroLenguajeProgramacion' => 'required',
            'frameworks' => 'required',
            'despliegue' => 'required',
            'otroServidorWeb' => 'required',
            'manejadorBD' => 'required',
            'nombreBD' => 'required',
            'plataformaDesarrollo' => 'required',
            'usoAPI' => 'required',
        ]);

        // Busca y actualiza el rolSistemas existente
        $caracteristica = Caracteristica::where('idSistema', $sistema->id)->first();

        $caracteristica->sistemaOperativo = $request->input('sistemaOperativo');
        $caracteristica->controlVersiones = $request->input('controlVersiones');
        $caracteristica->versionSistema = $request->input('versionSistema');
        $caracteristica->lenguajeProgramacion = $request->input('lenguajeProgramacion');
        $caracteristica->otroLenguajeProgramacion = $request->input('otroLenguajeProgramacion');
        $caracteristica->frameworks = $request->input('frameworks');
        $caracteristica->despliegue = $request->input('despliegue');
        $caracteristica->otroServidorWeb = $request->input('otroServidorWeb');
        $caracteristica->manejadorBD = $request->input('manejadorBD');
        $caracteristica->nombreBD = $request->input('nombreBD');
        $caracteristica->plataformaDesarrollo = $request->input('plataformaDesarrollo');
        $caracteristica->usoAPI = $request->input('usoAPI');

        $caracteristica->save();

        return redirect()->back()->with('Mensaje', 'Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caracteristica $caracteristica)
    {
        //
    }
}
