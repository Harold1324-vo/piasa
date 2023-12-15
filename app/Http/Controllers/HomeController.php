<?php

namespace App\Http\Controllers;

use App\Models\Sistema;
use App\Models\Informacion;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $anosComienzoOperaciones = Informacion::pluck('anoComienzoOperaciones')->unique();
        $etapas = ['Inicio', 'Planeación', 'Ejecución', 'Cierre'];

        $data = [];

        foreach ($anosComienzoOperaciones as $ano) {
            $sistemasPorAno = Sistema::whereHas('informacion', function ($query) use ($ano) {
                $query->where('anoComienzoOperaciones', $ano);
            })->get();

            $totalSistemas = Sistema::count(); // Cambio aquí para obtener el total de sistemas en lugar de solo aquellos en el año actual

            $etapasData = [];
            foreach ($etapas as $etapa) {
                $sistemasConEtapa = $sistemasPorAno->filter(function ($sistema) use ($etapa) {
                    return $sistema->informacion->etapaActual === $etapa;
                });

                $etapasData[$etapa] = [
                    'count' => $sistemasConEtapa->count(),
                    'percentage' => ($totalSistemas > 0) ? ($sistemasConEtapa->count() / $totalSistemas) * 100 : 0,
                ];
            }

            $data[] = [
                'ano' => $ano,
                'etapas' => $etapasData,
            ];
        }
        // Pasa los datos a la vista
        return view('home', compact('data'));
    }
}
