@extends ("partials.admin.layout")
@section("content")



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
                                        <li class="breadcrumb-item"><a href="#!">Materias Primas</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Registro de Materias Primas</a>
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-left">
                                            <a href="{{ route('materias-primas.index') }}" class="btn btn-sm btn-secondary"
                                                data-toggle="tooltip" data-placement="right" title="Volver"><i
                                                    class="feather icon-arrow-left" style="font-size: 20px"></i></a>
                                        </div>
                                        <center>
                                            <h4 class="box-title">Registro de Materia Prima</h4>
                                            <p>Los campos que contengan (<span style="color:red">*</span>) son
                                                obligatorios</p>

                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                {!! Form::open(['route' => 'materias-primas.store', 'id' => 'formulario_registro_materia_prima']) !!}

                                                @include('materials.partials.form')

                                                {!! Form::close() !!}

                                            </div>
                                        </div>
                                    </div> <!-- /.row -->
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
