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
                                        <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Form Components</a>
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
                    <center>
                        <h4 class="box-title">Registro de Materia Prima</h4>
                        <p>Los campos que contengan (<span style="color:red">*</span>) son obligatorios</p>

                    </center>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <form id="formulario_registro_materiaprima" method="POST" action="{{ route('materials.store') }}">
                            @csrf
                                <div class="row">
                                    <div class="col mt-3">
                                        <label class="alinear">Nombre<span style="color:red">*</span></label>
                                        <input type="text" onkeypress='return event.charCode >= 65 && event.charCode <= 122 || event.charCode==32' class="form-control" placeholder="Nombre de la materia prima"
                                            name="nombre" maxlength="50">
                                    </div>

                                    <div class="col mt-3">
                                        <label class="alinear">Medida<span style="color:red">*</span></label>
                                        <select class="form-control" id="" name="medida">

                                              <option value="UNITARIO" >UNITARIO</option>
                                              <option value="m" >m</option>
                                              <option value="cm" >cm</option>
                                              <option value="inch" >inch</option>

                                        </select>
                                    </div>
      
                                </div>
                                 <center>
                                <div class="row">
                                    <div class="col mt-3">
                                        <label class="alinear ">Cantidad<span style="color:red">*</span></label>
                                        <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="form-control col-4" placeholder="Cantidad"
                                            name="cantidad" maxlength="5">
                                    </div>
                                </div>
                                </center>
                                <center>

                                    <button class="btn btn-primary mt-4">Agregar</button>
                                    <button type="reset" class="btn btn-danger mt-4 ml-2" value="Reset">Limpiar</button>
                                    <a href="index.php" class="btn btn-success mt-4">Volver</a>


                                </center>
                            </form>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div>
        </div><!-- /# column -->
    </div>





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