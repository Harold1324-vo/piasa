@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h1>Registrar Usuarios.</h1>
    <form action="{{ route('usuario.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <br>
        <div class="row">
            <!-- la columna de la fila se divide en 3 columnas -->
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre del Usuario: </label>
                <input class="form-control" type="text" name="name" id="" placeholder="Nombre de Usuario" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre: </label>
                <input class="form-control" type="text" name="nombre" id="" placeholder="Nombre" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Apellido Paterno: </label>
                <input class="form-control" type="text" name="apellidoPaterno" id="" placeholder="Apellido Paterno" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Apellido Materno: </label>
                <input class="form-control" type="text" name="apellidoMaterno" id="" placeholder="Apellido Materno" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Puesto: </label>
                <input class="form-control" type="text" name="puesto" id="" placeholder="Puesto" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Área de Adscripción: </label>
                <input class="form-control" type="text" name="areaAdscripcion" id="" placeholder="Área de Adscripción"
                    required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Estado: </label>
                <input class="form-control" type="text" name="estado" id="" placeholder="Estado" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Intentos: </label>
                <input class="form-control" type="text" name="numeroIntentos" id="" placeholder="Intentos">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Email: </label>
                <input class="form-control" type="email" name="email" id="" placeholder="Email" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Contraseña: </label>
                <input class="form-control" type="password" name="password" id="" placeholder="Contraseña"
                    required>
            </div>
        </div>
        <br>
            <div class="mb-3 row">
                <label for="estado" class="col-sm-2 col-form-label">Rol:</label>
                <div class="col-sm-5">
    
                    <x-adminlte-select name="estado" id="estado" class="form-select" required>
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-gradient-info">
                            <i class="fa-solid fa-plus-minus"></i>
                            </div>
                        </x-slot>
                        <option value="">Rol del Usuario</option>
                            <option value="0">Administrador</option>
                            <option value="1">Usuario Invitado</option> 
                    </x-adminlte-select>
                </div>
            </div>
            {{-- <div class="col-sm-5">
                {!! Form::select('roles[]',$name,[],array('class'=>'form-control','required'=>'required'))!!}
            </div> --}}
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>

    </form>
</div>
@stop