<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sistema;

use Illuminate\Support\Facades\Auth;

class SistemaController extends Controller
{
    function __construct()
    {
        /*Se definen los permisos definidos en el SeederTablaPermisos.
            only hace referencia a que solo tendŕan esos permisos para ejecutar el método especificado.*/
        $this->middleware('permission:ver-procesos|crear-procesos|editar-procesos|borrar-procesos', ['only'=>['index']]);
        $this->middleware('permission:crear-procesos', ['only' =>['create','store']]);
        $this->middleware('permission:editar-procesos', ['only' =>['edit','update']]);
        $this->middleware('permission:borrar-procesos', ['only' =>['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sistema = Sistema::all();
        $sistema = Sistema::paginate(5);
        return view('sistema.index', ['sistema'=>$sistema ]);
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
            'nombreSistema' => 'required',
            'descripcion' => 'required',
            'siglas' => 'required',
            'clasificacion' => 'required',
            'areaDesarrolladora' => 'required',
            'estadoActivo' => 'required',
            'url' => 'required',
            'consecutivo' => 'required'
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
        $consecutivo = $request->input('consecutivo');

        $sistemaRegistro = new Sistema();

        $sistemaRegistro->idUsuario = $userId;

        $sistemaRegistro->nombreSistema=$nombreSistema;
        $sistemaRegistro->descripcion=$descripcion;
        $sistemaRegistro->siglas=$siglas;
        $sistemaRegistro->clasificacion=$clasificacion;
        $sistemaRegistro->areaDesarrolladora=$areaDesarrolladora;
        $sistemaRegistro->estadoActivo=$estadoActivo;
        $sistemaRegistro->url=$url;
        $sistemaRegistro->consecutivo=$consecutivo;

        $sistemaRegistro->save();

        return redirect()->back()->with('Mensaje', 'Genial xd');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sistema $sistema)
    {
        $nombresArchivos = [
            'F1 - Acta de constitución del proyecto',
            'F2 - Acta de aceptación de entregables',
            'F3 - Acta de cierre de proyecto',
            'L1 - Cédula de identificación de proyectos',
            'L2 - Formato de minutas',
            'L3 - Plan de pruebas',
            'L4 - Matriz de pruebas',
            'L5 - Solicitud de cambios',
            'L6 - Asignación usuario perfil',
            'L7 - Reporte de avance',
            'L8 - Análisis de requerimientos',
            'L9 - Especificación de requerimientos',
            'L10 - Plantilla elaboración de manuales',
        ];
        //
        return view('sistema.show', compact('sistema', 'nombresArchivos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sistema $sistema)
    {
        //
        return view('sistema.edit', compact('sistema'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sistema $sistema)
    {
        request()->validate([
            'nombreSistema' => 'required',
            'descripcion' => 'required',
            'siglas' => 'required',
            'clasificacion' => 'required',
            'areaDesarrolladora' => 'required',
            'estadoActivo' => 'required',
            'url' => 'required',
            'consecutivo' => 'required'
        ]);

        $sistema->update($request->all());
        return redirect()->route('sistema.index');
    }

    public function guardarRespuesta(Request $request, $id)
    {
        
        return redirect()->back()->with('success2', 'El archivo se ha almacenado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sistema $sistema)
    {
        $sistema->delete();
        return redirect()->route('sistema.index');
    }
}
