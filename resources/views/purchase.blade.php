@extends("partials.web.layout")


@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m"
    style="background-image:  url({{ asset('assets/web/images/heading-pages-01.jpg') }}); ">
    <h2 class="l-text2 t-center">
        Compras
    </h2>
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <div class="page-body">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                
                                        
                                        <center>


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



@endsection
