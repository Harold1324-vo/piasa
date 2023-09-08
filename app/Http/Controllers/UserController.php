<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $User = User::all();
        return view('usuario.index', compact('User'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $roles = Role::pluck('name','name')->all();
        $User = User::all();
        return view('usuario.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $sistema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $sistema)
    {
        $User = User::all();
        return view('usuario.edit', compact('User'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $sistema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $sistema)
    {
        //
    }

    public function bloqueado(){
        return view('usuario.bloqueado');
    }
}
