/**************************************\
*             VALIDACIONES             *
/**************************************/
/*    ESTILOS & VALIDACIONES EXTRAS   */
/**************************************/


$.validator.setDefaults({

  highlight: function(element){
    $(element)
      .closest(".form-control")
      .addClass('is-invalid')
  },
  unhighlight: function(element){
    $(element)
      .closest(".form-control")
      .removeClass('is-invalid')
      .addClass('is-valid');
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
           descripcion:{
                required: true, 
                minlength: 1
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
           descripcion:{
           required: 'Por favor ingresa la descripcion del producto',
           minlength: 'Por favor ingresa mas de 3 caracteres'
         },
          

       }


 });
