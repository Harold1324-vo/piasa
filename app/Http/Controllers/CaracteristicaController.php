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
    public function edit(Caracteristica $caracteristica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Caracteristica $caracteristica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caracteristica $caracteristica)
    {
        //
    }
}
