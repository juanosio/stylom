<link href="{{ public_path('../resources/views/pdf/boostrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

<style>
    #logo {
        width: 20%;
        align: left;


    }

</style>


<div>
    <div class="col-mt-12" >
        <img class="img-circle" id="logo" src="{{ public_path('../public/assets/login/images/Stylo.png') }}">
    </div>
    <div class="">
        <center>
            <h4 class="box-title">Listado de ordenes de compra</h4>
        </center>

    </div>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card-body">
            <div class="dt-responsive table-responsive">

                <table id="simpletable" class="table table-striped table-bordered  text-center">
                    <thead class=>
                        <tr>
                            <th>#</th>

                            <th>Materia P.</th>
                            <th>Proveedor</th>
                            <th>Medida</th>
                            <th>Cantidad</th>
                            <th>Precio</th>

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
                            <td>{{ $item->precio}} Bs</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div> <!-- /.row -->
