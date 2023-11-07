@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

    <section class="section">
        <div class="section-header">
            <br>
            <h3 class="page__heading">Editar Usuarios.</h3>
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

                            {!! Form::model($user, ['method' => 'PUT', 'route' => ['usuario.update', $user->id]]) !!}
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
                                        <br>
                                        <input type="text" id="numeroIntentos" name="numeroIntentos" style="width: 100%; height: 100%">
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

    <script>
        const lenguajes = document.querySelector('#estado');
        console.log(lenguajes)
        lenguajes.addEventListener('change', () => {
            let valorOption = lenguajes.value;
            console.log(valorOption);

            var optionSelect = lenguajes.options[lenguajes.selectedIndex];

            console.log("Valor:", optionSelect.value);

            /*Mostrando el resultado en el input*/
            let inputResult = document.querySelector('#numeroIntentos').value = (optionSelect.value);
        });
    </script>
@stop
