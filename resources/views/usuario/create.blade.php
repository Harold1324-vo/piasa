@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <br>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <h2 class="text-center" style="padding-top: 1%">Registrar Usuario</h2>
                        <div class="card-body">
                            {!! Form::open(['route' => 'usuario.store', 'method' => 'POST']) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Nombre: </label>
                                        {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Apellido Paterno: </label>
                                        {!! Form::text('apellidoPaterno', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Apellido Materno: </label>
                                        {!! Form::text('apellidoMaterno', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Nombre del Usuario: </label>
                                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Correo Electrónico: </label>
                                        {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Área de Adscripción: </label>
                                        {!! Form::text('areaAdscripcion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Puesto: </label>
                                        {!! Form::text('puesto', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Rol: </label>
                                        {!! Form::select('roles[]', $roles, [], ['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Estado del Usuario: </label>
                                        <x-adminlte-select name="estado" id="estado" class="form-select" required>
                                            <div class="input-group-text bg-gradient-info">
                                                <i class="fa-solid fa-plus-minus"></i>
                                            </div>
                                            <option value="0">Activo</option>
                                            <option value="1">Inactivo</option>
                                        </x-adminlte-select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Número de Intentos: </label>
                                        {!! Form::number('numeroIntentos', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Contraseña del Usuario: </label>
                                        {!! Form::password('password', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Confirmar Contraseña: </label>
                                        {!! Form::password('confirm-password', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input class="btn btn-info" type="reset" value="Restablecer">
                                <input class="btn btn-primary" style="margin-left: 3%;" type="submit" value="Guardar">
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
