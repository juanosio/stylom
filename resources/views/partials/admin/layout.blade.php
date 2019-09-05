<!DOCTYPE html>
<html lang="en">

<head>
    <title>StyloM - Administativo </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/admin/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/icon/feather/css/feather.css') }}">
    
         <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/jquery.mCustomScrollbar.css') }}">



</head>
</head>


<body>


    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div> 
<!--    Menu       -->
  @include ('partials/admin/menu')


<!--    Menu lateral    -->

  @include ('partials/admin/sidebar')


<!--    Contenido editable    -->

     @yield('content')



  

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('assets/admin/bower_components/jquery/js/jquery.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/admin/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

<script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script language="javascript" type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
<script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js"></script>
<script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('assets/admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('assets\admin\bower_components\modernizr\js\modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets\admin\bower_components\modernizr\js\css-scrollbars.js') }}"></script>

<!-- data-table js -->
<script src="{{ asset('assets\admin\bower_components\datatables.net\js\jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets\admin\assets\pages\data-table\js\jszip.min.js') }}"></script>
<script src="{{ asset('assets\admin\assets\pages\data-table\js\pdfmake.min.js') }}"></script>
<script src="{{ asset('assets\admin\assets\pages\data-table\js\vfs_fonts.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-buttons\js\buttons.print.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-buttons\js\buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.') }}js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{ asset('assets\admin\bower_components\i18next\js\i18next.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets\admin\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets\admin\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets\admin\bower_components\jquery-i18next\js\jquery-i18next.min.js') }}"></script>
<!-- Custom js -->
<script src="{{ asset('assets\admin\assets\pages\data-table\js\data-table-custom.js') }}"></script>



<script src="{{ asset('assets\admin\assets\js\pcoded.min.js') }}"></script>
<script src="{{ asset('assets\admin\assets\js\vartical-layout.min.js') }}"></script>
<script src="{{ asset('assets\admin\assets\js\jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets\admin\assets\js\script.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets\admin\sweet_alert.js') }}"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
   <script>
    $("#seeAnotherField").change(function () {
        if ($(this).val() == "yes") {
            $('#otherFieldDiv').show();
            $('#otherFieldDiv2').hide();

        } else {
            $('#otherFieldDiv').hide();
            $('#otherFieldDiv2').show();
        }
    });
    $("#seeAnotherField").trigger("change");

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

    $('#simpletable').DataTable({
    language: {
    "decimal": "",
    "emptyTable": "No hay información",
    "info": "Mostrando la página _PAGE_ de _PAGES_",
    "infoEmpty": "Mostrando 0 de 0 Entradas",
    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
    "infoPostFix": "",
    "thousands": ",",
    "lengthMenu": "Mostrar _MENU_ Entradas",
    "loadingRecords": "Cargando...",
    "processing": "Procesando...",
    "search": "Buscar:",
    "zeroRecords": "Sin resultados encontrados",
    "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    }

});

</script>

<script>

$(function(){

  $.validator.setDefaults({

   highlight: function(element){
     $(element)
     .closest('.form-control')
     .addClass('is-invalid');
   },
   unhighlight: function(element){
     $(element)
     .closest('.form-control')
     .removeClass('is-invalid');
   }

  });

 $("#formulario_registro_proveedores").validate({
  
       rules:{

           nombre:{
                required: true, 
                minlength: 3
           },
           rif:{
                required: true, 
                minlength: 7
           },
           direccion:{
                required: true, 
                minlength: 1
           },
           telefono:{
             required: true,
             minlength: 11
           },
           correo:{
             required: true,
             email: true,
             minlength: 1
           }      
       },

       messages:{

         nombre:{
           required: 'Por favor ingresa el nombre del proveedor',
           minlength: 'Por favor ingresa mas de 3 caracteres'
         },
         rif:{
             required: 'Por favor ingresa el rif del proveedor',
             minlength: 'Por favor ingresa al menos 7 digitos'
           },
         direccion:{
             required: 'Por favor ingresa la rireccion del proveedor',
             minlength: 'Por favor ingresa al menos 1 caracter'
           },
           telefono:{
             required: 'Por favor ingresa la cantidad de materia prima',
             minlength: 'Por favor ingresa al menos 1 digito'
           },
           correo:{
             required: 'Por favor ingresa la cantidad de materia prima',
             minlength: 'Por favor ingresa al menos 1 caracter',
             email: 'Por favor ingresa un correo valido'
           },
       }


 });


});






</script>


<script>

$(function(){

  $.validator.setDefaults({

   highlight: function(element){
     $(element)
     .closest('.form-control')
     .addClass('is-invalid');
   },
   unhighlight: function(element){
     $(element)
     .closest('.form-control')
     .removeClass('is-invalid');
   }

  });

 $("#formulario_registro_materia_prima").validate({
  
       rules:{

           nombre:{
                required: true, 
                minlength: 3
           },
           stock_actual:{
                required: true, 
                minlength: 1
           }, 
       },

       messages:{

         nombre:{
           required: 'Por favor ingresa el nombre de la materia prima',
           minlength: 'Por favor ingresa mas de 3 caracteres'
         },
         stock_actual:{
             required: 'Por favor ingresa la cantidad',
             minlength: 'Por favor ingresa al menos 1 digito'
           },

       }


 });


});


</script>

<script>

$(function(){

  $.validator.setDefaults({

   highlight: function(element){
     $(element)
     .closest('.form-control')
     .addClass('is-invalid');
   },
   unhighlight: function(element){
     $(element)
     .closest('.form-control')
     .removeClass('is-invalid');
   }

  });

 $("#formulario_registro_productos").validate({
  
       rules:{

           nombre:{
                required: true, 
                minlength: 3
           },
           cantidad:{
                required: true, 
                minlength: 1
           }, 
           genero:{
                required: true, 
           }, 
           talla:{
                required: true, 
           }, 
           envio:{
                required: true, 
           }, 
       },

       messages:{

         nombre:{
           required: 'Por favor ingresa el nombre del producto',
           minlength: 'Por favor ingresa mas de 3 caracteres'
         },
         cantidad:{
             required: 'Por favor ingresa la cantidad',
             minlength: 'Por favor ingresa al menos 1 digito'
           },
           genero:{
             required: 'Por favor ingresa el genero',
           },
           talla:{
             required: 'Por favor ingresa la talla',
           },
           envio:{
             required: 'Por favor ingresa la empresa de envio',
           },

       }


 });


});






</script>



@include('sweet::alert')
@yield('script')
</body>

</html>
