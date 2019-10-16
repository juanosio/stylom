@extends ("partials.admin.layout")
@section('content')



<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-container navbar-wrapper">
    </div>

    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-12">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a
                                                href="{{ route('empleados.index') }}">Usuarios</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Registrar Secretaria</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->

                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Form Inputs card start -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-left">
                                        <a href="{{ route('empleados.index') }}" class="btn btn-sm btn-secondary"
                                                data-toggle="tooltip" data-placement="right" title="Volver"><i
                                                    class="feather icon-arrow-left" style="font-size: 20px"></i></a>
                                        </div>
                                        <center>
                                            <h4 class="box-title">Registro de secretarias</h4>
                                            <p>Los campos que contengan (<span style="color:red">*</span>) son
                                                obligatorios</p>
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                {!! Form::open(['route' => 'empleados.store', 'files' => true, 'id' =>
                                                'formulario_registro_usuarios']) !!}

                                                @include('users.partials.form')

                                                {!! Form::close() !!}

                                            </div>
                                        </div>
                                    </div> <!-- /.row -->
                                    <div class="card-body"></div>
                                </div>
                            </div><!-- /# column -->
                        </div>
                        <!--  /Traffic -->
                    </div>
                </div>
                <!-- Page body end -->
            </div>
        </div>
        <!-- Main-body end -->


        </div>
    </div>
</div>
</div>
</div>
</div>
</div>



</body>

</html>




@endsection
