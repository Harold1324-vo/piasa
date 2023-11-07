<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Documento;
use Illuminate\Http\Request;
use App\Models\Sistema;
use App\Models\Archivo;
use Illuminate\Support\Str;

class DocumentoController extends Controller
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
            'documentado' => 'required',
            'manualUsuario' => 'required',
            'manualTecnico' => 'required',
            'manualMantenimiento' => 'required',
            'politicaPrivacidad' => 'required',
        ]);

        $documentado = $request->input('documentado');
        $manualUsuario = $request->input('manualUsuario');
        $manualTecnico = $request->input('manualTecnico');
        $manualMantenimiento = $request->input('manualMantenimiento');
        $politicaPrivacidad = $request->input('politicaPrivacidad');

        $documento = new Documento();

        $documento->documentado=$documentado;
        $documento->manualUsuario=$manualUsuario;
        $documento->manualTecnico=$manualTecnico;
        $documento->manualMantenimiento=$manualMantenimiento;
        $documento->politicaPrivacidad=$politicaPrivacidad;
        $documento->idSistema = $sistema->id;
        
        $documento->save();

        // Obtener el sistema asociada al ID
        $sistema = Sistema::findOrFail($id);

      

        // Validar y guardar los archivos adjuntos
        if ($request->hasFile('nombreArchivo')) {
            // Obtener los archivos adjuntos del formulario
            $archivos = $request->file('nombreArchivo');
            $archivoPaths = []; // Variable para almacenar los paths de los archivos guardados
        
            foreach ($archivos as $archivo) {
                $archivoNombreOriginal = $archivo->getClientOriginalName(); // Obtener el nombre original del archivo
                $archivoExtension = $archivo->getClientOriginalExtension(); // Obtener la extensión del archivo

                // Validar tipos de archivo permitidos
                if (in_array($archivoExtension, ['pdf'])) {
                    $archivoNombreUnico = uniqid() . '_' . Str::slug(pathinfo($archivoNombreOriginal, PATHINFO_FILENAME)) . '.' . $archivoExtension; // Generar un nombre único basado en el nombre original

                    $archivoPath = $archivo->storeAs('archivos', $archivoNombreUnico, 'public'); // Guardar el archivo en la carpeta 'archivos' con el nombre único
                    $archivoPaths[] = $archivoPath; // Agregar el path del archivo a la lista de paths
                }
            }

            // Crear una nueva instancia de Respuesta y asignar los campos
            $archivo = new archivo();
            $archivo->nombreArchivo = implode('|', $archivoPaths); // Convertir la lista de paths en un string separado por '|'
            $archivo->idSistema = $sistema->id;
            $archivo->save();

            
        }

        return redirect()->back()->with('Mensaje', 'Genial xd');
    }

    /**
     * Display the specified resource.
     */
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Documento $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documento $documento)
    {
        //
    }

    public function guardarRespuesta(Request $request, $id){
        //Obtener la documentación asociada al ID
        $sistema = Sistema::findOrFail($id);


    }
}
