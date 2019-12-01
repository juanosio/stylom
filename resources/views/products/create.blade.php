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
                                            <a href="{{ route('home') }}"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('productos.index') }}">Productos</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('productos.create') }}">Registro de productos</a>
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
                                        <div class="float-left">
                                            <a href="{{ route('productos.index') }}" class="btn btn-sm btn-secondary"
                                                data-toggle="tooltip" data-placement="right" title="Volver"><i
                                                    class="feather icon-arrow-left" style="font-size: 20px"></i></a>
                                        </div>
                                        <center>
                                            <h4 class="box-title">Registro de Producto</h4>
                                            <p>Los campos que contengan (<span style="color:red">*</span>) son
                                                obligatorios</p>

                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                                {!! Form::open(['route' => 'productos.store', 'files' => true, 'id' =>
                                                'formulario_registro_productos']) !!}

                                                @include('products.partials.form')

                                                <hr>

                                                <div class="text-center">
      <h3>Materia prima utilizada</h3>
      <p>Por favor seleccione cuánto y que materia prima utilizo para la fabricación de este producto</p>
    </div>






<div id="materiaPrima">
    

                                                <div class="row">



      <div class="col mt-3">
              <label class="alinear">Talla<span style="color:red">*</span></label>
              <select class="form-control" id="" name="material[]">
@foreach($material as $item)
                    <option value="{{ $item->id }}" >{{ $item->nombre }}</option>
@endforeach

              </select>
          </div>
          <div class="col mt-3">
        <label class="alinear">Medida<span style="color:red">*</span></label>
        <select class="form-control" id="" name="medida[]">

            <option value="UNITARIO">UNITARIO</option>
            <option value="METROS">METROS</option>
            <option value="CENTIMETROS">CENTIMETROS</option>
            <option value="PULGADAS">PULGADAS</option>

        </select>
    </div>
      <div class="col mt-3">
          <label class="alinear">Cantidad<span style="color:red">*</span></label>
          <input type="text" name="cantidadMateria[]" class="form-control $errors->has('cantidad') ? ' is-invalid' : ''" maxlength="5", placeholder="Introduzca la cantidad utilizada">
          
          
      </div>
  </div>

 



</div>

 <div class="text-center mt-3 mb-3">
      <span data-toggle="tooltip" data-placement="bottom" title="Añadir otra materia prima">
          <i id="add" class="feather icon-plus-square" style="font-size: 35px; cursor: pointer;"> </i>
      </span>
  </div>











   <center>

      <button type="submit" class="btn btn-primary mt-4">Registrar</button>


  </center>

                                                {!! Form::close() !!}

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

@section('script')
<script type="text/javascript">
    $("#add").on('click', function(){
        var materia = `
        <div class="row">



      <div class="col mt-3">
              <label class="alinear">Talla<span style="color:red">*</span></label>
              <select class="form-control" id="" name="material[]">
@foreach($material as $item)
                    <option value="{{ $item->id }}" >{{ $item->nombre }}</option>
@endforeach

              </select>
          </div>
          <div class="col mt-3">
        <label class="alinear">Medida<span style="color:red">*</span></label>
        <select class="form-control" id="" name="medida[]">

            <option value="UNITARIO">UNITARIO</option>
            <option value="METROS">METROS</option>
            <option value="CENTIMETROS">CENTIMETROS</option>
            <option value="PULGADAS">PULGADAS</option>

        </select>
    </div>
      <div class="col mt-3">
          <label class="alinear">Cantidad<span style="color:red">*</span></label>
          <input type="text" name="cantidadMateria[]" class="form-control $errors->has('cantidad') ? ' is-invalid' : ''" maxlength="5", placeholder="Introduzca la cantidad utilizada">
          
      </div>
  </div>


   
    `;

    $("#materiaPrima").append(materia);
    })

</script>
@endsection
