@extends ("partials.admin.layout")
@section("content")

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
                                            <h4 class="box-title">Lista de Productos</h4>
                                            <td> <a href="admin/proveedores" class="btn btn-success mt-3">Volver</a>
                                            </td>

                                            <td style="text-align:center"> <a class="btn btn-primary mt-3"
                                                    href="/admin/proveedores/registrar">Registrar</a></td>

                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                            <div class="dt-responsive table-responsive">

                                                <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                    <thead class=>
                                                        <tr>
                                                           
                                                            <th>Nombre</th>
                                                            <th>Cantidad</th>
                                                            <th>Genero</th>
                                                            <th>Talla</th>
                                                            <th>Envio</th>
                                                            <th>Foto</th>
                                                            <th>Opciones</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($products as $products)
                                                        <tr>
                                                           
                                                            <td>{{ $products->nombre}}</td>
                                                            <td>{{ $products->cantidad}}</td>
                                                            <td>{{ $products->genero}}</td>
                                                            <td>{{ $products->talla}}</td>
                                                            <td>{{ $products->envio}}</td>
                                                            <td>{{ $products->foto}}</td>

                                                            <td><button class="btn btn-primary">Editar</button>
                                                            <button class="btn btn-danger">Eliminar</button></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                              

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
