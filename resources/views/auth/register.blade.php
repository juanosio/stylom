<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StyloM</title>

    <link rel="stylesheet" href="assets/login/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../fuente/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/login/css/style.css">

    <style>
        .swal-title {

            margin-bottom: 28px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card card-signin flex-row mt-5">

                    <div class="card-img-left col-5 d-none d-md-flex">

                    </div>

                    <div class="col-7">

                        <div class="card-body">
                            <a href="{{ route('login') }}" class="btn btn-sm btn-secondary rounded-circle float-left"
                    data-toggle="tooltip" data-placement="right" title="Volver">Volver</a>
                            
                            <h5 class="card-title text-center">Registro de usuarios</h5>
                            <form method="POST" action="{{ route('user.store') }}" class="form-signin">

                            @csrf
                                <div class="stepwizard">
                                    <div class="stepwizard-row setup-panel">
                                        <div class="stepwizard-step">
                                            <a href="#step-1" type="button" class="btn btn-stylom btn-circle"
                                                data-toggle="tooltip" data-placement="bottom" title="Datos del usuario"
                                                id="step1">1</a>
                                            <p>Datos del usuario</p>

                                        </div>
                                        <div class="stepwizard-step">
                                            <a href="#step-2" type="button" class="btn btn-light btn-circle"
                                                data-toggle="tooltip" data-placement="bottom" title="Datos personales"
                                                id="step2">2</a>
                                            <p>Datos personales</p>
                                        </div>

                                    </div>
                                </div>

                                <div id="datausuario">
    

    <div class="form-label-group">

        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        <label for="inputEmail">Ingrese su correo Electrónico</label>
    </div>


                                    <div class="form-label-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        <label for="inputPassword">Ingrese su contraseña</label>
                                        <small class="text-muted">La contraseña debe estar comprendida entre 8 y 16
                                            carácteres y debe contener al menos una letra y un número</small>
                                    </div>

                                    <div class="form-label-group">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                                        <label for="inputConfirmPassword">Confirme su contraseña</label>
                                    </div>


                                    <button type="button" class="btn btn-stylom float-right mb-3" style="cursor:pointer"
                                        id="next">Siguiente</button>
                                </div>

                                <div id="datapersonal">
                                    <div class="form-label-group">

                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                
                                        <label for="nombre">Ingrese su nombre</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">
                                        <label for="apellido">Ingrese su apellido</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input id="identification" type="text" class="form-control @error('identification') is-invalid @enderror" name="identification" value="{{ old('identification') }}" required autocomplete="identification">

                                        <label for="cedula">Ingrese su cédula</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">
                                        <label for="telefono">Ingrese su número de teléfono</label>
                                    </div>

                                    <button type="submit" id="enviar" class="btn btn-stylom float-right mb-3"
                                        style="cursor:pointer">REGISTRARSE</button>

                                    <button type="button" class="btn btn-secondary float-left mb-3"
                                        style="cursor:pointer" id="back">Anterior</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/login/vendor/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/login/js/app.js') }}"></script>

</body>

</html>


