<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreListaVerificacionRequest;
use App\Http\Requests\UpdateListaVerificacionRequest;
use App\Models\ListaVerificacion;

class ListaVerificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('listaVerificacion.index');
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
    public function store(StoreListaVerificacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ListaVerificacion $listaVerificacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListaVerificacion $listaVerificacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateListaVerificacionRequest $request, ListaVerificacion $listaVerificacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListaVerificacion $listaVerificacion)
    {
        //
    }
}
