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
          <h4 class="box-title">Lista de Usuarios</h4>
          
        <td style="text-align:center"> <a href="index.php"  class="btn btn-success mt-3">Volver</a></td>
        <td style="text-align:center">  <a  class="btn btn-primary mt-3" href="index.php?view=registro-usuarios">Registrar</a></td>
        
				</center>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card-body">

						<center>
							<table class="table table-striped table-bordered">
								<tr>
									<th scope="col">Nombre</th>
									<th scope="col">Apellido</th>
									<th scope="col">Cédula</th>
									<th scope="col">Teléfono</th>
									<th scope="col">Usuario</th>
									<th scope="col">Rol</th>
									<th scope="col">Curriculum</th>
									<th scope="col">Opciones</th>
									

								</tr>


	
				
				</div>


				</table>
				</center>


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