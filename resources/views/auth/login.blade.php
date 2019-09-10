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
                <div class="card card-signin mt-2">
                    <div class="card-body">
                        <div class="text-center">

                            <img src="assets/login/images/Stylo.png" class="rounded-circle" width="200px" height="200px" alt="">
                        </div>
                        <h5 class="card-title text-center">Iniciar Sesión</h5>
                         <form method="POST" class="form-signin" action="{{ route('login') }}">
                        @csrf
                        
                            <div class="form-label-group">
                                <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="email">Ingrese su usuario o correo</label>
                            </div>

                            <div class="form-label-group">
                                

<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror



                                <label for="password">Ingrese su contraseña</label>
                            </div>


                            <button style="cursor: pointer" class="btn btn-lg btn-stylom btn-block text-uppercase mb-3"
                                type="submit">Iniciar sesión</button>

                            <p class="text-center">Registrate <a href="{{ route('register') }}">aquí</a></p>
                            <hr class="my-4">
                            
                            <a href="{{ route('password.request') }}"> ¿Has olvidado tú contraseña? </a> <br>
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





