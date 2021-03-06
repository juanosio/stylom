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
                                        <li class="breadcrumb-item"><a
                                                href="{{ route('categorias.index') }}">Categorias</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Listado de categorias</a>
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
                                            <a href="{{ route('categorias.create') }}" class="btn btn-primary"
                                                data-toggle="tooltip" data-placement="left"
                                                title="Registrar un nuevo producto"> <i class="feather icon-plus-circle"
                                                    style="font-size: 20px"></i> Registrar</a>
                                        </div>
                                        <center>
                                            <h4 class="box-title">Lista de Categorias</h4>


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
                                                                <th>Nombre</th>
                                                                <th>Opciones</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            @foreach($categories as $categories)
                                                            <tr>
                                                                <td><b>{{ $i++ }}</b></td>

                                                                <td>{{ $categories->nombre}}</td>


                                                                <td class="text-center">

                                                                    <a href="{{ route('categorias.edit', $categories->id) }}"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Editar producto"> <i
                                                                            class="feather icon-edit mr-2"
                                                                            style="font-size: 20px"></i></a>


                                                                    <a href="javascript:destroy();" class="text-danger">
                                                                        <i class="feather icon-trash-2"
                                                                            style="font-size: 20px"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            title="Eliminar categoria"></i>
                                                                    </a>

                                                                    <!--//Con este formulario se manda a la funcion destroy para borrar -->
                                                                    {!! Form::open(['route' => ['categorias.destroy',
                                                                    $categories->id], 'method' => 'DELETE', 'id' =>
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
                text: "¿Estás seguro que deseas eliminar esta categoria?",
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
