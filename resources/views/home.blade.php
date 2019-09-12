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

                                            <div class="col-xl-9 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Sales Analytics</h5>
                                                        <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                                <li><i class="feather icon-trash-2 close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="sales-analytics" style="height: 265px;"></div>
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
        </div>
    </div>

@endsection