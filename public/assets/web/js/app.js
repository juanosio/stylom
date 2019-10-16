
 $('.block2-btn-addcart').each(function () {
  var nameProduct = $(this).parent().parent().parent().find('#nombre').html();
  $(this).on('click', function () {
      swal(nameProduct, "El producto fue añadido al carrito!", "success");
  });
});



$('.block2-btn-addcart').each(function () {
var nameProduct = $(this).parent().parent().parent().find('#nombre').html();
var namePrecio = $(this).parent().parent().parent().find('#precio').html();


$(this).on('click', function () {
  
  CrearItem(nameProduct, namePrecio);

  GuardarDB();

});
});


$('.header-cart-item-img').each(function () {

  
  $(this).on('click', function () {
    
    console.log('holaaa');
  });
  });
  








const listaNombreUI = document.getElementById('carrito');

const cantidadProductos = document.getElementById('cantidad');



let listaArticulos = [];


//Funcion crear item
const CrearItem = (nombre, precio) => {

    let item = {
      nombre: nombre, 
      precio: precio
    }
  
    listaArticulos.push(item);
  

    return item;
  
  }



  const GuardarDB = () => {

   localStorage.setItem('carrito', JSON.stringify(listaArticulos));

//Muestra la cantidad de productos
    cantidadProductos.innerHTML = listaArticulos.length;

   PintarDB();

  }


  const PintarDB = () => {

    listaNombreUI.innerHTML = '';

    listaArticulos = JSON.parse(localStorage.getItem('carrito'));

    //Muestra la cantidad de productos
    

    if (listaArticulos === null) {
      listaArticulos = [];



    
    }else{
let precioTotal = 0;
      listaArticulos.forEach(element => {

        listaNombreUI.innerHTML += `<ul class="header-cart-wrapitem">
        <li class="header-cart-item">
          <div class="header-cart-item-img">
<<<<<<< HEAD
            <img src="assets/web/images/item-cart-01.jpg" alt="IMG" >
=======
            <img src="#">
>>>>>>> bd1c02c0dd990bfedf86a0ad1e188a9aef4f2098
          </div>
          <div class="header-cart-item-txt">
            <a href="#" class="header-cart-item-name">
             ${element.nombre}
            </a>

            <span class="header-cart-item-info">
            ${element.precio}
            </span>
          </div>
        </li>        
      </ul>     
`
precioTotal += element.precio
      });



      

     

    }
    listaNombreUI.innerHTML += `<div class="header-cart-total">
        Total: 700
      </div><div class="header-cart-buttons">
    <div class="header-cart-wrapbtn">
      <!-- Button -->
      <div class="text-center">
<a href="#DeboColocarRuta" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
        Ver carrito
      </a>
      </div>
      
    </div>

    
  </div>`

  }


 document.addEventListener('DOMContentLoaded', PintarDB);

