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
    <title>Usuario Bloqueado</title>
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
                            <h2 class="card-title"> <b>Usuario Bloqueado</b> </h2>

                            <p>Debido a que se llegó al límite de los intentos posibles para iniciar sesión, se ha bloqueado temporalmente su cuenta.
                              Favor de ponerse en contacto con el Administrador para la activación correspondiente de su cuenta.
                            </p>

                            <div class="form-group m-0">
                              <a class="btn btn-primary btn-block" href="login">Regresar</a>
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




{{-- <!doctype html>
<html lang="en">

<head>
  <title>SRCCPCDTIC</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>


<!-- Section: Design Block -->
<section class="text-center">
    
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-color: #123E3A;
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
            <div class="text-center">
                  <img src="{{asset('assets/img/logoCondusef.png')}}"
                    style="width: 185px;" alt="logo">
                 <h2> <b class="mt-1 mb-5 pb-1">SRCCPC</b>DTIC</h2>
            </div>
                    <h4 class="fw-bold mb-5"><FONT COLOR="red">¡¡ Usuario Bloqueado !!</h4>
                    <h4 class="fw-bold mb-5"><FONT COLOR="red">Contacte al Administrador</h4>
                <div class="card-body">
                    <div class="fw-bold mb-2 text-uppercase">
                        <a href="login">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Regresar') }}
                                </button>
                                </a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>



  <header>
    <!-- place navbar here -->
  </header>
  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
 --}}
