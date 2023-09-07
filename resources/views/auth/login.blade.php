<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS Login --}}
    @vite(['resources/css/style.scss'])
    <title>Inicio de Sesión</title>
</head>

<body>
    <div class="container-login">
        <div class="img-box">
            <img src="img/logo.png">
        </div>
        <div class="content-box">
            <div class="form-box">
                <div class="form-box2">
                    <h2>Inicio de Sesión</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-box">
                            <span>Nombre del Usuario</span>
                            <div class="input-box">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-box">
                            <span>Contraseña</span>
                            <div class="input-box">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="remember">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Recuerdame') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                            @endif
                        </div>
                        <div class="input-box">
                            <input type="submit" value="Ingresar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>