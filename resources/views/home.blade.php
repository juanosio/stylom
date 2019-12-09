@extends('partials.admin.layout')


@section('content')

<?php 
$resultado =  \DB::select('SELECT * FROM users');
// var_dump($resultado);
$num=0;

 foreach($resultado as $res): ?>
<?php  $num++?>               
<?php endforeach ?>

<?php 
$resultado2 =  \DB::select('SELECT * FROM materials');
// var_dump($resultado);
$num2=0;

 foreach($resultado2 as $res): ?>
<?php  $num2++?>               
<?php endforeach ?>

<?php 
$resultado3 =  \DB::select('SELECT * FROM products');
// var_dump($resultado);
$num3=0;

 foreach($resultado3 as $res): ?>
<?php  $num3++?>               
<?php endforeach ?>

<?php 
$resultado4 =  \DB::select('SELECT * FROM suppliers');
// var_dump($resultado);
$num4=0;

 foreach($resultado4 as $res): ?>
<?php  $num4++?>               
<?php endforeach ?>

<script src="{{ asset('js/chart.js') }}"></script>




<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">

                    <div class="row">

                        <!-- task, page, download counter  start -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-yellow update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">{{ $num }}</h4>
                                            <h6 class="text-white m-b-0">Usuarios</h6>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-green update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">{{ $num2 }}</h4>
                                            <h6 class="text-white m-b-0">Materia Prima</h6>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-pink update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">{{ $num3 }}</h4>
                                            <h6 class="text-white m-b-0">Productos</h6>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-lite-green update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">{{$num4}}</h4>
                                            <h6 class="text-white m-b-0">Proveedores</h6>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                </div>
                            </div>
                        </div>
                        <!-- task, page, download counter  end -->

                        <div class="col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Ventas</h5>
                                    <span class="text-muted">Ventas realizadas por mes</span>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <li><i class="feather icon-trash-2 close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <canvas id="myChart" ></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Productos</h5>
                                    <span class="text-muted">Productos más vendidos</span>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <li><i class="feather icon-trash-2 close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <canvas id="myChart2" ></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Materias primas</h5>
                                    <span class="text-muted">Materias primas proximas a quedarse sin stock</span>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <li><i class="feather icon-trash-2 close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <canvas id="myChart3" ></canvas>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-12 bg-white">

                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>




<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            datasets: [{
                label: 'Ventas',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });


    var ctx2 = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx2, {
    type: 'pie',
    data: {
        labels: ['Pantalones', 'Camisas', 'Mnos deportivos', 'Franelas'],
        datasets: [{
            label: 'Materia prima',
            data: [5, 4, 6, 12],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


    
    var ctx3 = document.getElementById('myChart3').getContext('2d');
var myChart = new Chart(ctx3, {
    type: 'pie',
    data: {
        labels: ['Agujas', 'Hilo negro', 'Tiza', 'Tela jean'],
        datasets: [{
            label: 'Materia prima',
            data: [10, 7, 5, 9],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
    </script>
@endsection