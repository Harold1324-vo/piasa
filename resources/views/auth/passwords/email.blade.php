<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- CSS Login --}}
    @vite(['resources/css/style2.scss'])
    <title>Recuperación Contraseña</title>
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
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <h2 class="card-title"> <b>Recuperar Contraseña</b> </h2>
                                <p>¿Olvidaste tu contraseña?, No hay problema, escribe tu email y nosotros te enviaremos un email a tu correo electrónico
                                    para actualizar tu contraseña.
                                </p>
                                
                                <div class="form-group">
                                    <label for="email"> <b> Ingresa tu correo electrónico </b> </label>

                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group m-0">
                                    <input class="btn btn-primary btn-block" type="submit" value="Envíar">
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