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
                lettersonly: true,
                minlength: 3
           },
           rif:{
                required: true,
                minlength: 7
           },
           direccion:{
                required: true, 
                alphanumeric: true,
                minlength: 1
           },
           telefono:{
             required: true,
             number: true,
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
           minlength: 'Por favor ingresa mas de 3 caracteres',
           lettersonly: 'Solo se permiten letras'
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
             minlength: 'Por favor ingresa al menos 1 digito',
             number: 'Solo se permiten números'
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
                lettersonly: true,
                minlength: 3
           },
           stock_actual:{
                required: true, 
                number: true,
                minlength: 1
           }, 
           stock_min:{
            required: true, 
            number: true,
            minlength: 1
         }, 
        stock_max:{
         required: true, 
         number: true,
         minlength: 1
   }, 
       },

       messages:{

         nombre:{
           required: 'Por favor ingresa el nombre de la materia prima',
           lettersonly: 'Solo se permiten letras',
           minlength: 'Por favor ingresa mas de 3 caracteres'
         },
         stock_actual:{
             required: 'Por favor ingresa la cantidad',
             number: 'Solo se permiten números',
             minlength: 'Por favor ingresa al menos 1 digito'
           },
           stock_min:{
            required: 'Por favor ingresa la cantidad',
            number: 'Solo se permiten números',
            minlength: 'Por favor ingresa al menos 1 digito'
          },
          stock_max:{
            required: 'Por favor ingresa la cantidad',
            number: 'Solo se permiten números',
            minlength: 'Por favor ingresa al menos 1 digito'
          },

       }


 });






 $("#formulario_registro_productos").validate({
  
       rules:{

           nombre:{
                required: true, 
                lettersonly: true,
                minlength: 3
           },
           cantidad:{
                required: true, 
                number: true,
                minlength: 1
           }, 
           descripcion:{
                required: true, 
                alphanumeric: true,
                minlength: 1
           }, 
       },

       messages:{

         nombre:{
           required: 'Por favor ingresa el nombre del producto',
           minlength: 'Por favor ingresa mas de 3 caracteres',
           lettersonly: 'Solo se permiten letras'
         },
         cantidad:{
             required: 'Por favor ingresa la cantidad',
             number: 'Solo se permiten números',
             minlength: 'Por favor ingresa al menos 1 digito'
           },
           descripcion:{
           required: 'Por favor ingresa la descripcion del producto',
           minlength: 'Por favor ingresa mas de 3 caracteres'
         },
          

       }


 });

 
 $("#formulario_registro_materia_proveedores").validate({
  
  rules:{


      cantidad:{
           required: true, 
           number: true,
           minlength: 1
      }, 
      precio:{
           required: true, 
           number: true,
           minlength: 1
      }, 
  },

  messages:{


    cantidad:{
        required: 'Por favor ingresa la cantidad',
        number: 'Solo se permiten números',
        minlength: 'Por favor ingresa al menos 1 digito'
      },
      precio:{
      required: 'Por favor ingresa la descripcion del producto',
      number: 'Solo se permiten números',
      minlength: 'Por favor ingresa mas de 1 digito'
    },
     

  }


});
