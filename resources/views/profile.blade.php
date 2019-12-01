@extends('partials.admin.layout')


@section('content')


<div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                              
                                         
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Perfil del Usuario</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Perfil del Usuario</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!--profile cover start-->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="cover-profile">
                                                    <div class="profile-bg-img">
                                                        <img class="profile-bg-img img-fluid" src="{{ asset('assets/admin/assets/images/user-profile/bg-img1.jpg')}}" alt="bg-img">
                                                        <div class="card-block user-info">
                                                            <div class="col-md-12">
                                                                <div class="media-left">
                                                                    <a href="#" class="profile-image">
                                                                        <img class="user-img img-radius" src="{{ asset('assets/admin/assets/images/user-profile/user-img.jpg')}}" alt="user-img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body row">
                                                                    <div class="col-lg-12">
                                                                        <div class="user-title">
                                                                            <h2>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</h2>
                                                                            <span class="text-white">{{ Auth::user()->role }} </span>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--profile cover end-->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- tab header start -->
                                                <div class="tab-header card">
                                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Información personal</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                     
                                                       
                                                       
                                                        
                                                    </ul>
                                                </div>
                                                <!-- tab header end -->
                                                <!-- tab content start -->
                                                <div class="tab-content">
                                                    <!-- tab panel personal start -->
                                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                                        <!-- personal card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Sobre mi</h5>
                                                                
                                        </button>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="view-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table m-0">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="row">Nombre Completo</th>
                                                                                                        <td>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Rol</th>
                                                                                                        <td>{{ Auth::user()->role }}</td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    <tr>
                                                                                                        <th scope="row">Correo</th>
                                                                                                        <td>{{ Auth::user()->email }} </td>
                                                                                                    </tr>
                                                                                                 
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table">
                                                                                                <tbody>

                                                                                                <tr>
                                                                                                        <th scope="row">Fecha de nacimiento</th>
                                                                                                        <td>{{ Auth::user()->birthday }}</td>
                                                                                                    </tr>
                                                                                                 
                                                                                                    <tr>
                                                                                                        <th scope="row">Numero de Telefono</th>
                                                                                                        <td>{{ Auth::user()->telephone }}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Ubicación</th>
                                                                                                        <td>{{ Auth::user()->direction }}</td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of general info -->
                                                                        </div>
                                                                        <!-- end of col-lg-12 -->
                                                                    </div>
                                                                    <!-- end of row -->
                                                                </div>
                                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main body end -->
                           
                        </div>
                    </div>

@endsection