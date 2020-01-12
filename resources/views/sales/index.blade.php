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
                                                href="{{ route('materias-primas.create') }}">Registro materia prima</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('materias-primas.index') }}">Stock de materia prima</a>
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
                                
                                        <div class="float-right" >
                                            <a href="{{ route('material.pdf') }}" class="btn btn-primary mt-2"
                                                data-toggle="tooltip" data-placement="left"
                                                title="Generar pdf"> <i class="feather icon-file-text"
                                                    style="font-size: 20px"></i> Generar PDF</a>
                                        </div>
                                        <center>
                                            <h4 class="box-title">Lista de ventas</h4>


                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                <div class="dt-responsive table-responsive">

                                                    <table id="simpletable"
                                                        class="table table-striped table-bordered nowrap text-center">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nombre </th>
                                                                <th>Apellido</th>
                                                                <th>Referencia</th>
                                                                <th>Total</th>
                                                                <th>Estado de compra</th>
                                                                <th>Banco emisor</th>



                                                                <th>Opciones</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            @foreach($compra as $item)
                                                            <tr>
                                                                <td><b>{{ $i++ }}</b></td>

                                                                <td>{{ $item->userNombre}}</td>
                                                                <td>{{ $item->userApellido}}</td>
                                                                <td>{{ $item->referencia}}</td>
                                                                <td>{{ $item->totalC}}</td>
                                                                <td>{{ $item->estado_de_compra}}</td>
                                                                <td>{{ $item->bankNombre}}</td>


                                                                <td class="text-center">

                                                            
                                                                <a href="javascript:update({{$item->id}});" 
                                                                    class="text-success">
                                                                        <i class="feather icon-check"
                                                                            style="font-size: 20px"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            title="Confirmar venta"></i>
                                                                    </a>

                                                                    <a href="javascript:update2({{$item->id}});" class="text-danger">
                                                                        <i class="feather icon-x"
                                                                            style="font-size: 20px"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            title="Rechazar venta"></i>
                                                                    </a>

                                                                    <!--//Con este formulario se manda a la funcion destroy para borrar -->
                                                                    {!! Form::open(['route' =>['ventas.aprobar'], 'method' => 'POST', 'id' =>'confirm-update']) !!}
                                                                     
                                                                     {!!  Form::hidden ('estado_de_compra', 'Aprobada'); !!}
                                                                      <input type="hidden" id="id_venta" name="id_venta" value="">
                                                                    {!! Form::close() !!}

                                                                    {!! Form::open(['route' =>['ventas.rechazar'], 'method' => 'POST', 'id' =>'confirm-update2']) !!}
                                                                     
                                                                     {!!  Form::hidden ('estado_de_compra', 'Rechazada'); !!}
                                                                      <input type="hidden" id="id_venta2" name="id_venta2" value="">
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
    function update(id_venta) {
        swal({
                title: "¡Cuidado!",
                text: "¿Estás seguro que deseas aprobar esta venta?",
                icon: "warning",
                buttons: ['Cancelar', 'Aprobar'],
                
                successMode: 'Aprobar',
            })
            .then((willUpdate) => {

                if (willUpdate) {
                    $('#id_venta').val(id_venta);

                     $('#confirm-update').submit();

                }
            });
    }

    function update2(id_venta2) {
        swal({
                title: "¡Cuidado!",
                text: "¿Estás seguro que deseas rechazar esta venta?",
                icon: "warning",
                buttons: ['Cancelar', 'Rechazar'],
                
                dangerMode: 'Rechazar',
            })
            .then((willUpdate2) => {
                if (willUpdate2) {
                    $('#id_venta2').val(id_venta2);

                    $('#confirm-update2').submit();

                }
            });
    }

</script>
@endsection
