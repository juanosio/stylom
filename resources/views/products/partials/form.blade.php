@if(count($errors))
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endif

<div class="row">
      <div class="col mt-3">
          <label class="alinear">Nombre<span style="color:red">*</span></label>
          
              {{ Form::text('nombre', null, ['class' => "form-control $errors->has('nombre') ? ' is-invalid' : ''", 'id' => 'nombre', 'maxlength' => 50, 'placeholder' => 'Introduzca el nombre del producto. Ej: Pantalón']) }}
      </div>
      <div class="col mt-3">
          <label class="alinear">Cantidad<span style="color:red">*</span></label>
          {{ Form::text('cantidad', null, ['class' => "form-control $errors->has('cantidad') ? ' is-invalid' : ''", 'id' => 'cantidad', 'maxlength' => 5, 'placeholder' => 'Introduzca la cantidad de productos disponibles']) }}
          
      </div>
  </div>

  <div class="row">                          
  <div class="col mt-3">
          <label class="alinear">Precio<span style="color:red">*</span></label>
          {{ Form::text('precio', null, ['class' => "form-control $errors->has('precio') ? ' is-invalid' : ''", 'id' => 'precio', 'maxlength' => 20, 'placeholder' => 'Introduzca el precio de venta del producto']) }}
          
      </div>
      <div class="col mt-3">
              <label class="alinear">Talla<span style="color:red">*</span></label>
              <select class="form-control" id="" name="talla">

                    <option value="SP" >SP</option>
                    <option value="S" >S</option>
                    <option value="M" >M</option>
                    <option value="L" >L</option>
                    <option value="XL" >XL</option>
                    <option value="XXL" >XXL</option>

              </select>
          </div>
  </div>

  <div class="row">
  <div class="col mt-3">
          <label class="alinear">Descripción<span style="color:red">*</span></label>
          {{ Form::text('descripcion', null, ['class' => "form-control $errors->has('descripcion') ? ' is-invalid' : ''", 'id' => 'descripcion', 'maxlength' => 100, 'placeholder' => 'Introduzca una breve descripcion del producto']) }}
          
      </div>
    

          <div class="col mt-3">
              <label class="alinear">Método de envío<span style="color:red">*</span></label>
              <select class="form-control" id="" name="envio">
                    <option value="DOMESA" >DOMESA</option>
                    <option value="MRW" >MRW</option>
                    <option value="ZOOM" >ZOOM</option>
                    <option value="LIBERTYEXPRESS" >LIBERTYEXPRESS</option>
              </select>
          </div>
  </div>
  <div class="row">
  <div class="col mt-3">
              <label class="alinear">Categoria<span style="color:red">*</span></label>
              <select class="form-control" id="" name="category_id">
              @foreach ($category as $item)
            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
        @endforeach
              </select>
          </div>
          <div class="col mt-3">
              <label class="alinear">Estado<span style="color:red">*</span></label>
              <select class="form-control" id="" name="estado">
                    <option value="HABILIDADO" >HABILIDADO</option>
                    <option value="INHABILITADO" >INHABILITADO</option>
              </select>
          </div>
  </div>

  <div class="row">
   
   <div class="col mt-3">
       <label class="alinear">Stock maximo<span style="color:red">*</span></label>
       {{ Form::text('stock_max', null, ['class' => "form-control $errors->has('stock_max') ? ' is-invalid' : ''", 'id' => 'stock_max', 'maxlength' => 10, 'placeholder' => 'Introduzca el stock maximo segun el tipo de medida']) }}

   </div>
   <div class="col mt-3">
       <label class="alinear">Stock minimo<span style="color:red">*</span></label>
       {{ Form::text('stock_min', null, ['class' => "form-control $errors->has('stock_min') ? ' is-invalid' : ''", 'id' => 'stock_min', 'maxlength' => 10, 'placeholder' => 'Introduzca el stock maximo segun el tipo de medida']) }}

   </div>

</div>


  
  
  <div class="form-group" class="row">
<label class="mt-3">Foto del producto</label>

{{ Form::file('fotoProducto', ['class' => 'form-control-file']) }}


</div>

 