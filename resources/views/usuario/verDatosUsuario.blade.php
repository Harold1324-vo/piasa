@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    @vite(['resources/css/styleDatosUser.scss'])
    <div class="container">
        <br>
        <div class="contenedor card mb-3">
            <div class="row g-0">
                <div class="foto col-md-4">
                    <img class="avatar" src="img/perfilUsuario.png" alt="avatar">
                    <h5 class="h51 text-center"><b>Bienvenido de Nuevo</b></h5>
                    <h5 class="text-center"><b>{{ $name }}</b></h5>
                </div>
                <div class="info col-md-8">
                    <h2>Datos Generales del Perfil.</h2>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label for="inputName" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $nombre }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="inputName" class="form-label">Apellido Paterno:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $apellidoPaterno }}" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="inputName" class="form-label">Apellido Materno:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $apellidoMaterno }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Puesto:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $puesto }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Área de Adscripción:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $areaAdscripcion }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Correo Electrónico:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $email }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Alias:</label>
                                <input type="text" class="form-control" id="nombre" value="{{ $name }}" disabled>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
