@extends('adminlte::page')

@section('title', 'Dashboard')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@section('content')
    @vite(['resources/css/styleDatosUser.scss'])
    <div class="container">
        <br>
        <div class="contenedor card mb-3">
            <div class="row g-0">
                <div class="foto col-md-4">
                    <img class="avatar2" src="img/actualizarContrasena.png" alt="contraseña">
                </div>
                <div class="info col-md-8">
                    <h2>Actualizar Contraseña</h2>
                    <div class="card-body">
                        <div class="mb-3">
                            {!! Form::open(['route' => 'updatePassword.post', 'id' => 'aviso']) !!}
                            <div class="form-group has-feedback">
                                <label for="contrasenia_actual">Contraseña actual</label>
                                {!! Form::password('contrasenia_actual', ['class' => 'form-control', 'required' => 'required']) !!}
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if ($errors->has('contrasenia_actual'))
                                    <label class="control-label has-error" style="color: red;">
                                        {{ $errors->first('contrasenia_actual') }}
                                    </label>
                                @endif
                            </div>

                            <div class="form-group has-feedback">
                                <label for="contrasenia_nueva">Ingrese su nueva contraseña</label>
                                {!! Form::password('contrasenia_nueva', ['class' => 'form-control', 'required' => 'required']) !!}
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if ($errors->has('contrasenia_nueva'))
                                    <label class="control-label has-error" style="color: red;">
                                        {{ $errors->first('contrasenia_nueva') }}
                                    </label>
                                @endif
                            </div>

                            <div class="form-group has-feedback">
                                <label for="contrasenia_nueva_confirmation">Confirme su nueva
                                    contraseña</label>
                                {!! Form::password('contrasenia_nueva_confirmation', ['class' => 'form-control', 'required' => 'required']) !!}
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if ($errors->has('contrasenia_nueva_confirmation'))
                                    <label class="control-label has-error" style="color: red;">
                                        {{ $errors->first('contrasenia_nueva_confirmation') }}
                                    </label>
                                @endif
                            </div>

                            <div class="text-center">
                                {!! Form::submit('Guardar cambios', ['class' => 'btn bg-olive']) !!}
                            </div>

                            {!! Form::close() !!}

                            <!-- Script de SweetAlert -->
                            @if (session('success_cambio_contrasenia'))
                                <script>
                                    Swal.fire({
                                        position: "center",
                                        icon: "success",
                                        title: "{{ session('success_cambio_contrasenia') }}",
                                        showConfirmButton: false,
                                        timer: 3500
                                    });
                                </script>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
