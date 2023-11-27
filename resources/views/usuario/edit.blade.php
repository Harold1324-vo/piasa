@extends('adminlte::page')

@section('title', 'Dashboard')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

@section('content')
    <section class="section">
        <br>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <h2 class="text-center" style="padding-top: 1%">Editar Usuario</h2>
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
                                        <label for="">Nombre: </label>
                                        {!! Form::text('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                        @error('nombre')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Apellido Paterno: </label>
                                        {!! Form::text('apellidoPaterno', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                        @error('apellidoPaterno')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Apellido Materno: </label>
                                        {!! Form::text('apellidoMaterno', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                        @error('apellidoMaterno')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Nombre del Usuario: </label>
                                        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                        @error('name')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Correo Electrónico: </label>
                                        {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                        @error('email')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Área de Adscripción: </label>
                                        {!! Form::text('areaAdscripcion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                        @error('areaAdscripcion')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Puesto: </label>
                                        {!! Form::text('puesto', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                        @error('puesto')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Rol: </label>
                                        {!! Form::select('roles[]', $roles, $userRoles, ['class' => 'form-control', 'required' => 'required']) !!}
                                        @error('roles[]')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Estado del Usuario: </label>
                                        <x-adminlte-select name="estado" id="estado" class="form-select" required>
                                            <div class="input-group-text bg-gradient-info">
                                                <i class="fa-solid fa-plus-minus"></i>
                                            </div>
                                            <option value="0" {{ $userEstado == 0 ? 'selected' : '' }}>Activo</option>
                                            <option value="1" {{ $userEstado == 1 ? 'selected' : '' }}>Inactivo</option>
                                        </x-adminlte-select>
                                        @error('estado')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Número de Intentos: </label>
                                        {!! Form::number('numeroIntentos', $userNumeroIntentos, [
                                            'class' => 'form-control',
                                            'required' => 'required',
                                            'min' => 0,
                                            'max' => 3,
                                            'id' => 'numeroIntentos',
                                            'readonly' => 'readonly',
                                        ]) !!}
                                        @error('numeroIntentos')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                    <input class="btn btn-secondary ms-md-2" type="button" value="Regresar"
                                    onclick="window.location.href='{{ route('usuario.index') }}'" style="margin: 3%">
                                    <input class="btn btn-info ms-md-2" type="reset" value="Restablecer" style="margin: 3%">
                                    <input class="btn btn-primary ms-md-2" type="submit" value="Guardar" style="margin: 3%">
                                </div>
                            </div>
                            {!! Form::close() !!}

                            <!-- Script de SweetAlert -->
                            @if (session('script'))
                                {!! session('script') !!}
                            @endif

                            <script>
                                $(document).ready(function() {
                                    // Manejar el cambio en el campo "Estado del Usuario"
                                    $('#estado').change(function() {
                                        // Obtener el valor seleccionado
                                        var estadoSeleccionado = $(this).val();

                                        // Establecer el valor en el campo "Número de Intentos"
                                        if (estadoSeleccionado == 0) {
                                            $('#numeroIntentos').val(0);
                                        } else if (estadoSeleccionado == 1) {
                                            $('#numeroIntentos').val(3);
                                        }
                                    });
                                });
                            </script>
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
