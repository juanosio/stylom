<!DOCTYPE html>
<html lang="es">

<head>
    <title>Stylo M - Inicio de sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/login/vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/login/fuente/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}">

    <style>
        .swal-title {

            margin-bottom: 28px;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin mt-5">
                    <div class="card-body">
                        <div class="text-center">

                            <img src="{{ asset('assets/login/images/Stylo.png') }}" class="rounded-circle" width="200px" height="200px" alt="">
                        </div>
                        <h5 class="card-title text-center">Recuperación de contraseña</h5>
                         <form method="POST" class="form-signin" action="{{ route('password.email') }}">
                        @csrf
                        
                            <div class="form-label-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror



                                <label for="password">Ingrese su correo</label>
                            </div>


                            <button style="cursor: pointer" class="btn btn-lg btn-stylom btn-block text-uppercase mb-3"
                                type="submit">Enviar correo de recuperación</button>

                            <hr class="my-4">
                            
                            <a href="{{ route('login') }}"> Iniciar Sesión </a> <br>
                             <a href="{{ route('home') }}"> Volver a la página </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>



?>






