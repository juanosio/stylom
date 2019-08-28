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


        <div class="col mt-1">
            {{ Form::label('correo', 'Correo electrónico') }}<span class="text-danger"> *</span>
            {{ Form::text('correo', null, ['class' => "form-control $errors->has('correo') ? ' is-invalid' : ''", 'id' => 'correo', 'maxlength' => 40, 'placeholder' => 'Introduzca el correo electrónico']) }}
        </div>

    </div>
    <div class="row">
        <div class="col mt-3">
        {{ Form::label('password', 'Contraseña') }}<span class="text-danger"> *</span>
            {{ Form::password('password', ['class' => "form-control $errors->has('password') ? ' is-invalid' : ''", 'id' => 'password', 'maxlength' => 16, 'placeholder' => 'Introduzca la contraseña']) }}
        
           
        </div>
        <div class="col mt-3">
        {{ Form::label('password-confirm', 'Confirmar contraseña') }}<span class="text-danger"> *</span>
            {{ Form::password('password-confirm', ['class' => "form-control $errors->has('password-confirm') ? ' is-invalid' : ''", 'id' => 'password-confirm', 'maxlength' => 16, 'placeholder' => 'Confirme la contraseña']) }}
        
        </div>
    </div>

    <div class="row">
        <div class="col mt-3">
        {{ Form::label('nombre', 'Nombre') }}<span class="text-danger"> *</span>
            {{ Form::text('nombre', null, ['class' => "form-control $errors->has('nombre') ? ' is-invalid' : ''", 'id' => 'nombre', 'maxlength' => 25, 'placeholder' => 'Introduzca el nombre']) }}
      

        </div>
        <div class="col mt-3">
        {{ Form::label('apellido', 'Apellido') }}<span class="text-danger"> *</span>
            {{ Form::text('apellido', null, ['class' => "form-control $errors->has('apellido') ? ' is-invalid' : ''", 'id' => 'apellido', 'maxlength' => 25, 'placeholder' => 'Introduzca el apellido']) }}    </div>
    </div>

    <div class="row">
        <div class="col mt-3">
            <label for="">Fecha de Nacimiento<span style="color:red">*</span></label>
            <input type="date" class="form-control" placeholder="Fecha de nacimiento" name="fecha_nacimiento">
        </div>
        <div class="col mt-3">
        {{ Form::label('telefono', 'Número telefónico') }}<span class="text-danger"> *</span>
            {{ Form::text('telefono', null, ['class' => "form-control $errors->has('telefono') ? ' is-invalid' : ''", 'id' => 'telefono', 'maxlength' => 16, 'placeholder' => 'Introduzca el número teléfónico']) }}
        </div>
    </div>

    <div class="row">
        <div class="col mt-3">
        {{ Form::label('cedula', 'Cédula') }}<span class="text-danger"> *</span>
            {{ Form::text('cedula', null, ['class' => "form-control $errors->has('cedula') ? ' is-invalid' : ''", 'id' => 'cedula', 'maxlength' => 16, 'placeholder' => 'Introduzca la cédula']) }}
        </div>
        <div class="col mt-3">
            {{ Form::label('direccion', 'Dirección') }}<span class="text-danger"> *</span>
    {{ Form::textarea('direccion', null, ["class" => 'form-control', 'rows' => '2', 'placeholder' => 'Introduce un extracto del post', 'maxlength' => 140 ]) }}
        </div>
    </div>
    

<div class="text-center mt-4 pt-4">
    <button type="submit" class="btn btn-primary">Registrar</button>
</div>
</form>
