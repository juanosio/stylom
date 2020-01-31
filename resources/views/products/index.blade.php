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
                                                href="{{ route('productos.create') }}">Registro de producto</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('productos.index') }}">Stock de productos</a>
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
                                            <a href="{{ route('productos.create') }}" class="btn btn-primary"
                                                data-toggle="tooltip" data-placement="left"
                                                title="Registrar un nuevo producto"> <i class="feather icon-plus-circle"
                                                    style="font-size: 20px"></i> Registrar</a>
                                        </div><br><br>
                                        <div class="float-right" >
                                            <a href="{{ route('products.pdf') }}" class="btn btn-primary mt-2"
                                                data-toggle="tooltip" 
                                                title="Generar pdf"> <i class="feather icon-file-text"
                                                    style="font-size: 20px"></i> Generar PDF</a>
                                        </div>
                                        <center>
                                            <h4 class="box-title">Lista de productos</h4>


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
                                                                <th>Foto</th>
                                                                <th>Nombre</th>
                                                                <th>Cantidad disponible</th>
                                                                <th>Categoria</th>
                                                                <th>Talla</th>
                                                                <th>Envio</th>

                                                                <th>Opciones</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            @foreach($products as $products)
                                                            <tr>
                                                                <td><b>{{ $i++ }}</b></td>
                                                                <td><img class="rounded-circle"
                                                                        src="{{ $products->foto}}" width="100px"
                                                                        height="100px"></td>

                                                                <td>{{ $products->nombre}}</td>
                                                                <td>{{ $products->cantidad}} disponibles</td>
                                                                <td>{{ $products->categoryNombre}}</td>
                                                                <td>{{ $products->talla}}</td>
                                                                <td>{{ $products->envio}}</td>


                                                                <td class="text-center">

                                                                  

                                                                    <a href="javascript:confec({{$products->id}});"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Confeccionar producto"> <i
                                                                            class="feather icon-scissors mr-2"
                                                                            style="font-size: 20px"></i></a>

                                                                
                                                                    <a href="{{ route('productos.show', $products->id) }}"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Ver producto"> <i
                                                                            class="feather icon-eye mr-2"
                                                                            style="font-size: 20px"></i></a>


                                                                    <a href="{{ route('productos.edit', $products->id) }}"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Editar producto"> <i
                                                                            class="feather icon-edit mr-2"
                                                                            style="font-size: 20px"></i></a>


                                                                    <a href="javascript:destroy();" class="text-danger">
                                                                        <i class="feather icon-trash-2"
                                                                            style="font-size: 20px"
                                                                            data-toggle="tooltip" data-placement="top"
                                                                            title="Eliminar producto"></i>
                                                                    </a>


                                                                    <!--//Con este formulario se manda a la funcion destroy para borrar -->
                                                                    {!! Form::open(['route' =>['producto.confeccionar'], 'method' => 'POST', 'id' =>'confirm-confec']) !!}
                                                                     
                                                                     <input type="hidden" id="cantidad" name="suma" value="">

                                                                      <input type="hidden" id="product_id" name="product_id" value="">
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
        Swal.fire({
            title: "¡Cuidado!",
    text: "¿Estás seguro que deseas eliminar este producto?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Aceptar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.value) {
    
    $('#confirm-delete').submit();

    
  }
})
}













    function confec(product_id){

  

    Swal.fire({
  title: "Confeccionar producto",
  html:  ` <label class="alinear">Cantidad<span style="color:red">*</span></label>
  <input type="text" name="cantidad" id="p_cantidad" placeholder="Introduzca la cantidad">

  <div class="text-center">
<h3>Materia prima utilizada</h3>
<p>Por favor seleccione cuánto y que materia prima utilizo para la fabricación de este producto</p>
</div>


<div id="materiaPrima">


<div class="row">

<input type="text" placeholder="holaaaa">  

</div>





</div>

<div class="text-center mt-3 mb-3">
<span data-toggle="tooltip" data-placement="bottom" title="Añadir otra materia prima">

<button href="javascript:productos()" id="add" class="feather icon-plus-square" style="font-size: 35px; cursor: pointer;"></button>
</span>
</div>


  `,
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Aceptar',
  cancelButtonText: 'Cancelar'

}).then((result) => {
  if (result.value) {
      //Tomo el valor del input
    var inputVal = document.getElementById("p_cantidad").value;
    //Mando el valor del input para que se reemplace en el form
      $('#cantidad').val(inputVal);
      $('#product_id').val(product_id);
    $('#confirm-confec').submit();

    
  }
})


        
        

    }

    

   function productos(){
  

 
    
    console.log('adkawd');


}





</script>

<div class="modal fade" id="AjaxM" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <center>  <h5 class="modal-title text-center" id="exampleModalLongTitle">Información de la venta</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
      <table id="simpletable"
                                                        class="table table-striped table-bordered nowrap text-center">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio unitario</th>
               
            </tr>
        </thead>
        <tbody id="products">
     
            
       
    
</tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>








@endsection
