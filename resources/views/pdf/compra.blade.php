<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ public_path('../resources/views/pdf/boostrap/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <style>
        img {
            width: 20%;
        }

        h3 {
            text-align: center;
        }

        small {
            margin-top: 20%;
        }

        #titulo {
            text-align: center;
        }

        #membrete {
            text-align: center;
            margin-top: 35px;
        }

        #fecha {
            margin-right: 15px;
        }

        @font-face {
            font-family: 'Times-Bold';
            src:"{{ public_path('../storage/fonts/Times-Bold') }}"
        }

        body {
            font-family: 'Times-Bold';
        }

        table {
            border-collapse: separate;

        }
 
        #tabla {

           margin-top: -150px;

        }

    </style>
</head>

<body>
    <div class="row">
        <img class="align-left" src="{{ public_path('../public/assets/login/images/Stylo.png') }}">
        <h3 class="float-center" id="titulo">Stylo M C.A</h3>
        <div class="float-right">
            Fecha:<br>
            <div id="fecha"> {{ $date }} </div>

        </div> 
        <br>

        <div id="membrete">

            <p class="float-center">J-29954809-0</p>
            <small class="float-center">Maracay Edo. Aragua, Av. Las Delicias</small> <br>
            <small class="float-center">Telefono: 0426-3186547</small> /
            <small class="float-center">Correo: stylom@gmail.com</small>

        </div>

    </div>

<div id="tabla">
    <div class="row">
        <div class="dt-responsive table-responsive">
            <h2 class="text-center">Listado ventas</h2> <br>

            <table id="simpletable" class="table table-striped table-bordered  text-center">
                <thead class=>
                    <tr>
                    <th>#</th>
                                                                <th>Nombre </th>
                                                                <th>Apellido</th>
                                                                <th>Referencia</th>
                                                                <th>Total</th>
                                                                <th>Estado de compra</th>
                                                                <th>Banco emisor</th>


                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($compra2 as $item)
                    <tr>

                        <td><b>{{ $i++ }}</b></td>

                     

<td>{{ $item->userNombre}}</td>
<td>{{ $item->userApellido}}</td>
<td>{{ $item->referencia}}</td>
<td>{{ $item->totalC}} BsS</td>
<td>{{ $item->estado_de_compra}}</td>
<td>{{ $item->bankNombre}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    </div>

 


</body>

</html>
