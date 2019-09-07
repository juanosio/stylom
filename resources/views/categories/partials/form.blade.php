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

        {{ Form::text('nombre', null, ['class' => "form-control $errors->has('nombre') ? ' is-invalid' : ''", 'id' => 'nombre', 'maxlength' => 20, 'placeholder' => 'Introduzca el nombre de la categoria. Ej: Pantalón']) }}
    </div>

</div>



<center>

    <button type="submit" class="btn btn-primary mt-4">Registrar</button>


</center>
