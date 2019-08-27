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
                                            <h2 class="box-title">Registro de Proveedores</h2>
                                            <p>Los campos que contengan (<span style="color:red">*</span>) son
                                                obligatorios</p>

                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                <form id="formulario_registro_proveedores" method="POST"
                                                    action="/stylom/store">

                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <label class="alinear">Nombre del Proveedor<span
                                                                    style="color:red">*</span></label>
                                                            <input type="text"
                                                                onkeypress='return event.charCode >= 65 && event.charCode <= 122 || event.charCode==32'
                                                                class="form-control" placeholder="Nombre del proveedor"
                                                                name="nombrep" maxlength="30">
                                                        </div>
                                                        <div class="col mt-3">
                                                            <label class="alinear">Rif<span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Rif del proveedor" name="rif"
                                                                maxlength="20">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col mt-3">
                                                            <label class="alinear">Teléfono<span
                                                                    style="color:red">*</span></label>
                                                            <input type="text"
                                                                onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                                                class="form-control"
                                                                placeholder="Telefono del proveedor" name="telefono"
                                                                maxlength="11">
                                                        </div>
                                                        <div class="col mt-3">
                                                            <label class="alinear">Dirección<span
                                                                    style="color:red">*</span></label>
                                                            <textarea class="form-control" placeholder="Dirección"
                                                                rows="3" name="direccion" maxlength="100"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 ">
                                                            <label class="alinear">Email<span
                                                                    style="color:red">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Email"
                                                                name="correo" maxlength="30">
                                                        </div>
                                                    </div>
                                                    <center>

                                                        <button class="btn btn-primary mt-4">Agregar</button>
                                                        <button type="reset" class="btn btn-danger mt-4 ml-2"
                                                            value="Reset">Limpiar</button>
                                                        <a href="index.php" class="btn btn-success mt-4">Volver</a>


                                                    </center>
                                                </form>
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
        <div id="styleSelector">

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