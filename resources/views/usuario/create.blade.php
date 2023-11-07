@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

    <section class="section">
        <div class="section-header">
            <br>
            <h3 class="page__heading">Registrar Usuarios.</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            {!! Form::open(['route' => 'usuario.store', 'method' => 'POST']) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Nombre del Usuario: </label>
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Nombre Personal: </label>
                                        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Apellido Paterno: </label>
                                        {!! Form::text('apellidoPaterno', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Apellido Materno: </label>
                                        {!! Form::text('apellidoMaterno', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Puesto: </label>
                                        {!! Form::text('puesto', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Área de Adscripción: </label>
                                        {!! Form::text('areaAdscripcion', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Número de Intentos: </label>
                                        {!! Form::text('numeroIntentos', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Correo Electrónico: </label>
                                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Contraseña del Usuario: </label>
                                        {!! Form::password('password', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Confirmar Contraseña: </label>
                                        {!! Form::password('confirm-password', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Roles: </label>
                                        {!! Form::select('roles[]', $roles, [], ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input class="btn btn-info" style="margin: 1%" type="reset" value="Restablecer">
                                <input class="btn btn-primary" style="margin: 1%" type="submit" value="Guardar">
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <h1>Registrar Usuarios.</h1>
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
            </div> 
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>

    </form> --}}
@stop
