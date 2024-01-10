<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sistema;
use App\Models\Archivo;
use Illuminate\Support\Facades\Auth;
use App\Models\Informacion;
use PDF;

class SistemaController extends Controller
{
    function __construct()
    {
        /*Se definen los permisos definidos en el SeederTablaPermisos.
            only hace referencia a que solo tendŕan esos permisos para ejecutar el método especificado.*/
        $this->middleware('permission:ver-procesos|crear-procesos|editar-procesos|borrar-procesos', ['only' => ['index']]);
        $this->middleware('permission:crear-procesos', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-procesos', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-procesos', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anios = Informacion::select('anoComienzoOperaciones')->distinct()->pluck('anoComienzoOperaciones');
        return view('sistema.index', compact('anios'));
    }


    // app/Http/Controllers/InformacionController.php
    public function mostrarSistemasPorAno($ano)
    {
        if (Auth::user()->hasRole('Administrador')) {
            $informacionPorAno = Informacion::where('anoComienzoOperaciones', $ano)->with('sistema')->paginate(10);
        } else {
            $usuarioId = Auth::user()->id;
            $informacionPorAno = Informacion::where('anoComienzoOperaciones', $ano)
                ->whereHas('sistema', function ($query) use ($usuarioId) {
                    $query->where('idUsuario', $usuarioId);
                })
                ->paginate(10);
        }

        return view('sistema.showsistema', compact('informacionPorAno', 'ano'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('sistema.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nombreSistema' => 'required|string|min:3|max:255',
            'descripcion' => 'required|string|min:3|max:500',
            'siglas' => 'required|string|min:2|max:255',
            'clasificacion' => 'required|string|min:3|max:255',
            'areaDesarrolladora' => 'required|string|min:3|max:255',
            'estadoActivo' => 'required|string|min:2|max:255',
            'url' => 'required|string|min:3|max:255',
        ]);

        //Obtener el ID del usuario autenticado
        $userId = Auth::id();

        $nombreSistema = $request->input('nombreSistema');
        $descripcion = $request->input('descripcion');
        $siglas = $request->input('siglas');
        $clasificacion = $request->input('clasificacion');
        $areaDesarrolladora = $request->input('areaDesarrolladora');
        $estadoActivo = $request->input('estadoActivo');
        $url = $request->input('url');

        $sistemaRegistro = new Sistema();

        $sistemaRegistro->idUsuario = $userId;

        $sistemaRegistro->nombreSistema = $nombreSistema;
        $sistemaRegistro->descripcion = $descripcion;
        $sistemaRegistro->siglas = $siglas;
        $sistemaRegistro->clasificacion = $clasificacion;
        $sistemaRegistro->areaDesarrolladora = $areaDesarrolladora;
        $sistemaRegistro->estadoActivo = $estadoActivo;
        $sistemaRegistro->url = $url;

        $sistemaRegistro->save();

        // Obtener el ID del sistema recién creado
        $idSistema = $sistemaRegistro->id;

        return redirect()->route('sistema.show', ['sistema' => $idSistema])->with(['success_sistema_registrado' => '¡Sistema registrado exitosamente!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sistema $sistema)
    {
        $nombreArchivo = [
            'F1 - Acta de constitución del proyecto',
            'F2 - Acta de aceptación de entregables',
            'F3 - Acta de cierre de proyecto',
            'L1 - Cédula de identificación de proyectos',
            'L2 - Formato de minutas',
            'L3 - Plantilla CRONOGRAMA',
            'L4 - Asignación de requerimientos',
            'L5 - Análisis de requerimientos',
            'L6 - Especificación de requerimientos',
            'L7 - Reglas de validación',
            'L8 - Modelado del proceso',
            'L9 - Plan de pruebas',
            'L10 - Matriz de pruebas',
            'L11 - Solicitud de cambios',
            'L11BIS - Solicitud de cambios',
            'L12 - Reporte de avance',
            'L13 - Matriz de trazabilidad',
            'L14 - Plantilla elaboración de Manuales',
            'L15 - Transferencia de conocimientos',
        ];
        //
        return view('sistema.show', compact('sistema', 'nombreArchivo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sistema $sistema)
    {
        $nombreArchivo = [
            'F1 - Acta de constitución del proyecto',
            'F2 - Acta de aceptación de entregables',
            'F3 - Acta de cierre de proyecto',
            'L1 - Cédula de identificación de proyectos',
            'L2 - Formato de minutas',
            'L3 - Plantilla CRONOGRAMA',
            'L4 - Asignación de requerimientos',
            'L5 - Análisis de requerimientos',
            'L6 - Especificación de requerimientos',
            'L7 - Reglas de validación',
            'L8 - Modelado del proceso',
            'L9 - Plan de pruebas',
            'L10 - Matriz de pruebas',
            'L11 - Solicitud de cambios',
            'L11BIS - Solicitud de cambios',
            'L12 - Reporte de avance',
            'L13 - Matriz de trazabilidad',
            'L14 - Plantilla elaboración de Manuales',
            'L15 - Transferencia de conocimientos',
        ];
        return view('sistema.edit', compact('sistema', 'nombreArchivo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sistema = Sistema::findOrFail($id);

        $informacion = request()->validate([
            'nombreSistema' => 'required|string|min:3|max:255',
            'descripcion' => 'required|string|min:3|max:500',
            'siglas' => 'required|string|min:2|max:255',
            'clasificacion' => 'required|string|min:3|max:255',
            'areaDesarrolladora' => 'required|string|min:3|max:255',
            'estadoActivo' => 'required|string|min:2|max:255',
            'url' => 'required|string|min:3|max:255',
        ]);

        $sistema->update($informacion);
        
        return response()->json(['success' => '¡Datos del sistema actualizados exitosamente!']);
    }

    /* public function guardarRespuesta(Request $request, $id)
    {
        return redirect()->back()->with('success2', 'El archivo se ha almacenado correctamente.');
    } */

    public function graficaDocumentacionCompleta(Sistema $sistema)
    {
        // Obtener la lista de archivos del sistema
        $archivos = Archivo::where('idSistema', $sistema->id)->first();  // Asumiendo que hay una relación entre Sistema y Archivo

        // Verificar si hay archivos
        if ($archivos) {
            // Separar las rutas de archivos en un array
            $rutasArchivos = explode('|', $archivos->nombreArchivo);

            // Contar el número total de archivos esperados
            $totalArchivosEsperados = 20;

            // Contar el número de archivos completos
            $archivosCompletos = count($rutasArchivos);

            // Calcular el porcentaje de cumplimiento
            $porcentajeCumplimiento = ($archivosCompletos / $totalArchivosEsperados) * 100;
        } else {
            // No hay archivos, establecer el porcentaje en cero
            $porcentajeCumplimiento = 0;
        }

        return view('sistema.grafica', compact('sistema', 'porcentajeCumplimiento'));
    }

    public function generarPDF($idSistema)
    {
        // Recuperar datos del sistema y sus relaciones
        $sistema = Sistema::findOrFail($idSistema);
        $informacion = Informacion::where('idSistema', $idSistema)->first();
        // Agrega más consultas según sea necesario para otras tablas relacionadas

        // Devolver la vista Blade con los datos recuperados
        $data = [
            'sistema' => $sistema,
            'informacion' => $informacion,
            // Agrega más datos según sea necesario
        ];

        $pdf = PDF::loadView('reporte', $data);

        return $pdf->download('reporteTest.pdf');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sistema $sistema)
    {
        // Eliminar registros relacionados en la tabla
        $sistema->rolesSistemas()->delete();
        $sistema->informacion()->delete();
        $sistema->caracteristica()->delete();
        $sistema->documento()->delete();
        $sistema->archivos()->delete();
        $sistema->seguridad()->delete();
        $sistema->datosPersonal()->delete();
        $sistema->mantenimiento()->delete();
        
        $sistema->delete();
        return redirect()->route('sistema.index');
    }

    public function generarReporte()
    {
        return view('reporte');
    }
}
