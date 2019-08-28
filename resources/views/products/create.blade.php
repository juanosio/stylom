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
                    <h4 class="box-title">Registro de Producto</h4>
                    <p>Los campos que contengan (<span style="color:red">*</span>) son obligatorios</p>

                </center>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body">
                        <form id="formulario_registro_productos" method="POST" action="{{route('products.store')}}" enctype="multipart/form-data" >
                        @csrf

                            <div class="row">
                                <div class="col mt-3">
                                    <label class="alinear">Nombre<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Nombre del producto"
                                        name="nombre" maxlength="50">
                                </div>
                                <div class="col mt-3">
                                    <label class="alinear">Cantidad<span style="color:red">*</span></label>
                                    <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="form-control" placeholder="Cantidad" name="cantidad" maxlength="5">
                                </div>
                            </div>

                            <div class="row">                          
                            <div class="col mt-3">
                                    <label class="alinear">Descripción<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Descripción" name="descripcion" maxlength="100">
                                </div>
                                <div class="col mt-3">
                                        <label class="alinear">Talla<span style="color:red">*</span></label>
                                        <select class="form-control" id="" name="talla">

                                              <option value="SP" >SP</option>
                                              <option value="S" >S</option>
                                              <option value="M" >M</option>
                                              <option value="L" >L</option>
                                              <option value="XL" >XL</option>
                                              <option value="XXL" >XXL</option>

                                        </select>
                                    </div>
                            </div>

                            <div class="row">
                            <div class="col mt-3">
                                        <label class="alinear">Género<span style="color:red">*</span></label>
                                        <select class="form-control" id="" name="genero">
                                              <option value="FEMENINO" >FEMENINO</option>
                                              <option value="MASCULINO" >MASCULINO</option>
                                        </select>
                                    </div>
                                    <div class="col mt-3">
                                        <label class="alinear">Envio<span style="color:red">*</span></label>
                                        <select class="form-control" id="" name="envio">
                                              <option value="DOMESA" >DOMESA</option>
                                              <option value="MRW" >MRW</option>
                                              <option value="ZOOM" >ZOOM</option>
                                              <option value="LIBERTYEXPRESS" >LIBERTYEXPRESS</option>
                                        </select>
                                    </div>
                            </div>
                            
                            <div class="form-group" class="row">
              <label class="mt-3">Foto del producto</label>
              

              <input class="form-control-file" type="file" name="foto"  />

              </div>
             
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