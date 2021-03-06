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
                                            <a href="{{ route('home') }}"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a
                                                href="{{ route('materia-proveedores.create') }}">Pedido de materia prima</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('materia-proveedores.index') }}">Ordenes de compra de materia prima</a>
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
                                        <div class="float-right">
                                            <a href="{{ route('materia-proveedores.create') }}" class="btn btn-primary"
                                                data-toggle="tooltip" data-placement="left"
                                                title="Realizar un nuevo pedido de materia prima"> <i class="feather icon-plus-circle"
                                                    style="font-size: 20px"></i> Realizar pedido</a>
                                        </div> <br><br>

                                    
                                        <div class="float-right" >
                                            <a href="{{ route('materialsupplier.pdf') }}" class="btn btn-primary mt-2"
                                                data-toggle="tooltip" data-placement="left"
                                                title="Generar pdf"> <i class="feather icon-file-text"
                                                    style="font-size: 20px"></i> Generar PDF</a>
                                        </div>
                                        <center>
                                            <h4 class="box-title">Listado de ordenes de compra</h4>
      
                                          

                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                <div class="dt-responsive table-responsive">

                                                    <table id="simpletable"
                                                        class="table table-striped table-bordered nowrap text-center">
                                                        <thead class=>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Materia Prima</th>
                                                                <th>Proveedor</th>
                                                                <th>Medida</th>
                                                                <th>Cantidad</th>
                                                                <th>Precio</th>
                                                                <th>Opciones</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            @foreach($materialSupplier as $item)
                                                            <tr>
                                                                <td><b>{{ $i++ }}</b></td>
                                                              
                                                           <td>{{ $item->materialNombre}}</td>

                                                                <td>{{ $item->supplierNombre}}</td>
                                                       
                                                                    <td>{{ $item->medida}}</td>
                                                                <td>{{ $item->cantidad}}</td>
                                                                <td>{{ $item->precio}}</td>



    <td class="text-center">
        <a href="javascript:destroy();" class="text-danger">
            <i class="feather icon-trash-2"
                style="font-size: 20px"
                data-toggle="tooltip" data-placement="top"
                title="Eliminar producto"></i>
        </a>

        <!--//Con este formulario se manda a la funcion destroy para borrar -->
        {!! Form::open(['route' => ['materia-proveedores.destroy',
        $item->id], 'method' => 'DELETE', 'id' =>
        'confirm-delete']) !!}

        {!! Form::close() !!}
    </td>
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

@section('script')

<script type="text/javascript">
    function destroy() {
        swal({
                title: "¡Cuidado!",
                text: "¿Estás seguro que deseas eliminar este producto?",
                icon: "warning",
                buttons: ['Cancelar', 'Eliminar'],
                dangerMode: 'Eliminar',
            })
            .then((willDelete) => {
                if (willDelete) {
                    $('#confirm-delete').submit();

                }
            });
    }

</script>
@endsection
