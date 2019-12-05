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
                                        <li class="breadcrumb-item"><a href="{{ route('bitacoras.index') }}">Bitacora</a>
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
                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                            <div class="card-body">
                                        
                                        
                                        <center>
                                            <h4 class="box-title">Bitacora</h4>


                                        </center>
                                    </div>
                                <div class="card-block ">
                                    <div class="dt-responsive table-responsive" >
                                        <table id="simpletable" class="table table-striped table-bordered nowrap text-center" >
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Usuario</th>
                                                <th>Acción</th>
                                                <th>Fecha y hora</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($bitacora as $item)
                                                <tr>
                                                
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->user }}</td>
                                                    <td>{{ $item->action }}</td>
                                                 
                                                    <td>{{ date('d-M-Y \a\ \l\a\s H:i:s:A' , strtotime($item->created_at)) }}</td>



                                                
                                                    
                                                </tr>
                                               @endforeach
                                            </tbody>
                                            
                                        </table>
                                    </div>
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