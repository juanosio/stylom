
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
  
  CrearItem(nameProduct);
  CrearItem2(namePrecio);
  GuardarDB();
  GuardarDB2();
});
});









const listaNombreUI = document.getElementById('carrito');



let arrayNombre = [];
let arrayPrecio = [];



const CrearItem = (nombre) => {

    let item = {
      nombre: nombre
   
    }
  
    arrayNombre.push(item);
  
    return item;
  
  }

  const CrearItem2 = (precio) => {

    let item2 = {
      precio: precio
   
    }
  
    arrayPrecio.push(item2);
  
    return item2;
  
  }

  const GuardarDB = () => {

    localStorage.setItem('nombre', JSON.stringify(arrayNombre));

  }

  const GuardarDB2 = () => {

    localStorage.setItem('precio', JSON.stringify(arrayPrecio));

  }

  const PintarDB = () => {

    listaNombreUI.innerHTML = '';

    arrayNombre = JSON.parse(localStorage.getItem('nombre'));
    arrayPrecio = JSON.parse(localStorage.getItem('precio'));




    if (arrayNombre === null) {
      arrayNombre = [];
      arrayPrecio = [];


    
    }else{

      arrayPrecio.forEach(element => {
        listaNombreUI.innerHTML += `<ul class="header-cart-wrapitem">
        <li class="header-cart-item">
          <div class="header-cart-item-img">
            <img src="assets/web/images/item-cart-01.jpg" alt="IMG">
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

      <div class="header-cart-total">
        Total: $75.00
      </div>
`
      });

      

     

    }
    listaNombreUI.innerHTML += `  <div class="header-cart-buttons">
    <div class="header-cart-wrapbtn">
      <!-- Button -->
      <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
        View Cart
      </a>
    </div>

    
  </div>`

  }


 document.addEventListener('DOMContentLoaded', PintarDB);

