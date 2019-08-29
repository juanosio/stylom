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
          
              {{ Form::text('nombrep', null, ['class' => "form-control $errors->has('nombrep') ? ' is-invalid' : ''", 'id' => 'nombrep', 'maxlength' => 50, 'placeholder' => 'Introduzca el nombre del proveedor. Ej: El Castillo']) }}
      </div>
      <div class="col mt-3">
          <label class="alinear">Rif<span style="color:red">*</span></label>
          {{ Form::text('rif', null, ['class' => "form-control $errors->has('rif') ? ' is-invalid' : ''", 'id' => 'rif', 'maxlength' => 9, 'placeholder' => 'Introduzca el rif del proveedor. Ej: J/R-45356357']) }}
          
      </div>
  </div>

  <div class="row">                          
  <div class="col mt-3">
          <label class="alinear">Dirección<span style="color:red">*</span></label>
          {{ Form::text('direccion', null, ['class' => "form-control $errors->has('direccion') ? ' is-invalid' : ''", 'id' => 'direccion', 'maxlength' => 50, 'placeholder' => 'Introduzca una breve dirección del proveedor']) }}
          
      </div>
      <div class="col mt-3">
              <label class="alinear">Telefono<span style="color:red">*</span></label>
         {{ Form::text('telefono', null, ['class' => "form-control $errors->has('telefono') ? ' is-invalid' : ''", 'id' => 'telefono', 'maxlength' => 11, 'placeholder' => 'Introduzca el numero de telefono del proveedor']) }}

          </div>
  </div>

  <div class="col mt-3">
          <label class="alinear">Correo<span style="color:red">*</span></label>
          {{ Form::text('correo', null, ['class' => "form-control $errors->has('correo') ? ' is-invalid' : ''", 'id' => 'correo', 'maxlength' => 20, 'placeholder' => 'Introduzca el correo del proveedor']) }}
          
      </div>
     
  </div>


  <center>

      <button type="submit" class="btn btn-primary mt-4">Registrar</button>


  </center>