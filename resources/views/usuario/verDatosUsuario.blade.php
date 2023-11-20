@extends('adminlte::page')

@section('title', 'Dashboard')
@vite(['resources/css/styleVerUser.scss'])
@section('content')
    <div class="container">
        <br>
        <div class="card mb-3" style="padding: 2%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/perfilUsuario.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6 class="text-center" style="margin-top: 10%">Bienvenido de Nuevo</h6>
                    <h6 class="text-center" style="margin-top: 2">{{ $name }}</h6>
                </div>
                <div class="col-md-8">
                    <h2>Datos Generales del Perfil.</h2>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label for="inputName" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $nombre }}">
                            </div>
                            <div class="col-md-4">
                                <label for="inputName" class="form-label">Apellido Paterno:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $apellidoPaterno }}">
                            </div>
                            <div class="col-md-4">
                                <label for="inputName" class="form-label">Apellido Materno:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $apellidoMaterno }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Puesto:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $puesto }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Área de Adscripción:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $areaAdscripcion }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Correo Electrónico:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $email }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Alias:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $name }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
