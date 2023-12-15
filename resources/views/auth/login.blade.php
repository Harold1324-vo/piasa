<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- CSS Login --}}
    @vite(['resources/css/style.scss'])
    <title>Inicio de Sesión</title>
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="img/logo.png" alt="logo">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h2 class="card-title"> <b>Inicio de Sesión</b> </h2>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="email"> <b> Usuario </b> </label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <div class="invalid-feedback">
                                        Datos Incorrectos
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password"> 
                                        <b> Contraseña
                                        @if (Route::has('password.request'))
                                            <a class="float-right" href="{{ route('password.request') }}">
                                                {{ __('¿Olvidaste tu contraseña?') }}
                                            </a>
                                        @endif
                                        </b>
                                    </label>

                                    <div class="input-box">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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

                                <div class="form-group m-0">
                                    <input class="btn btn-primary btn-block" type="submit" value="Ingresar">
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
</html>