@extends('adminlte::page')

@section('title', 'Dashboard')
@vite(['resources/css/styleVerUser.scss'])
@section('content')
    <div class="container">
        <div class="card fat">
            <div class="card-body">
                <h2 class="card-title"> <b>Actualizar Contraseña</b> </h2>
                
    
                    @csrf
                    <div class="card card-primary">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="card-body">
                    
                                    {!! Form::open(['route' => 'updatePassword.post']) !!}
                                    <
                    div class="form-group has-feedback">
                                        <label for="contrasenia_actual" style="font-size: 15px;">Contraseña actual</label>
                                        {!! Form::password('contrasenia_actual', ['class' => 'form-control', 'required' => 'required']) !!}
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if ($errors->has('contrasenia_actual'))
                                        <label class="control-label has-error" style="color: red;">
                                            {{ $errors->first('contrasenia_actual') }}
                                        </label>
                                        @endif
                                    </div>
                    
                                    <div class="form-group has-feedback">
                                        <label for="contrasenia_nueva" style="font-size: 15px;">Ingrese su nueva contraseña</label>
                                        {!! Form::password('contrasenia_nueva', ['class' => 'form-control', 'required' => 'required']) !!}
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if ($errors->has('contrasenia_nueva'))
                                        <label class="control-label has-error" style="color: red;">
                                            {{ $errors->first('contrasenia_nueva') }}
                                        </label>
                                        @endif
                                    </div>
                    
                                    <div class="form-group has-feedback">
                                        <label for="contrasenia_nueva_confirmation" style="font-size: 15px;">Confirme su nueva contraseña</label>
                                        {!! Form::password('contrasenia_nueva_confirmation', ['class' => 'form-control','required' => 'required']) !!}
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if ($errors->has('contrasenia_nueva_confirmation'))
                                        <label class="control-label has-error" style="color: red;">
                                            {{ $errors->first('contrasenia_nueva_confirmation') }}
                                        </label>
                                        @endif
                                    </div>
                    
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-primary">GUardar cambios</button>
                                    </div>
                    
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                  
            </div>
        </div>
    </div>
@stop




{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    @vite(['resources/css/style3.scss'])
    <title>Inicio de Sesión</title>
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="https://gfleon.com.mx/wp-content/uploads/2018/10/logo-condusef-1.png" alt="logo">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h2 class="card-title"> <b>Actualizar Contraseña</b> </h2>
                            
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                
                                <div class="form-group">
                                    <label for="email"> <b> Correo Electrónico </b> </label>
        
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                        name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password"> 
                                        <b> Contraseña </b>
                                    </label>

                                    <div class="input-box">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="invalid-feedback">
                                        Contraseña Incorrecta
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="password"> 
                                        <b> Confirmar Contraseña </b>
                                    </label>

                                    <div class="input-box">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <div class="invalid-feedback">
                                        Contraseña Incorrecta
                                    </div>
                                </div>


                                <div class="form-group m-0">
                                    <input class="btn btn-primary btn-block" type="submit" value="Actualizar Contraseña">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        <b>Copyright &copy; 2023 &mdash; CONDUSEF</b>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html> --}}