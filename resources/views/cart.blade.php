@extends("partials.web.layout")


@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m"
    style="background-image:  url({{ asset('assets/web/images/heading-pages-01.jpg') }}); ">
    <h2 class="l-text2 t-center">
        Carrito de compra
    </h2>
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Imagen del producto</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Precio</th>

                        </tr>
                    </thead>

                    <tbody id="carroMuestra">
                        <!-- Aqui se pinta todos los productos dinamicamente -->
                    </tbody>
                </table>
            </div>
        </div>


    </div>

    <!-- Total -->
    <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-152 p-lr-15-sm">
        <h5 class="m-text20 p-b-24">
            Total del carrito
        </h5>

       

        <!--  -->
        <div class="flex-w flex-sb-m p-t-26 p-b-30" >
            <span class="m-text22 w-size19 w-full-sm">
               <p id="total">Total:</p>
            </span>

            <script>
            document.getElementById('total').innerHTML = total;
 
            </script>

          
        </div>

        <div class="size15 trans-0-4">
            <!-- Button -->
            <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" data-toggle="modal" data-target="#exampleModalCenter">
                Procesar pago
            </button>
        </div>
    </div>
    </div>


    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <h5 class="text-center">Cuentas bancarias</h5>
      <p class="text-center mb-3">Banco Provincial - Ahorro: 0108-0081140200680636</p>

       <form action="{{ route('compra.store')}}" method="POST">
       @csrf
<h5>Bancos</h5> <br>
       <select name="banco_emisor" id="" class="browser-default custom-select">
     <option value="BBVA">
     BBVA
     </option>

       </select><br><br>


       <h5>Número de referencia</h5><br>

       <input type="text"  name="referencia" placeholder="Número de referencia" id="ref">


       <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" >
       <input type="hidden" value="En espera" name="estado_de_compra" >

      <div id="productosInfo">
     


       </div>

<style>
input {
background: #d3d3d3;


}

</style>
       
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      </form>
    </div>
  </div>
</div>



</section>

<script>
    const PintarCarrito = () => {

        //Asigno el id a div que es donde voy a pintar toda la info
        const carroMuestra = document.getElementById('carroMuestra');
        carroMuestra.innerHTML = '';

        // Busco la informacion del carrito 
        listaArticulos = JSON.parse(localStorage.getItem('carrito'));


        if (listaArticulos === null) {
            listaArticulos = [];

            //Aqui deberia mostrar un mensaje de que no hay nada en el carrito
            // y un boton para que busque


        } else {
            var total = 0;
            listaArticulos.forEach(element => {

                //Pinto lo que esta en el localStorage en el carrito
                carroMuestra.innerHTML += `
  <tr class="table-row">
		<td class="column-1">
			<div class="cart-img-product b-rad-4 o-f-hidden">
				<img src="${element.fotoV}" alt="IMG-PRODUCT">
			</div>
		</td>
		<td class="column-2">${element.nombre}</td>
		<td class="column-3">${element.precio}</td>
		
	</tr>
  `

                //Cuando hagas lo que te dije de guardar el precio como un numero
                //Entonces esto funcionara
                parseInt(element.precio)
                total += parseInt(element.precio);
            });
            console.log(total);

        } //Cierre del if

    } //Cierre de funcion

    document.addEventListener('DOMContentLoaded', PintarCarrito);

</script>

<script>

    const PintarCarrito2 = () => {

        //Asigno el id a div que es donde voy a pintar toda la info
        const productosInfo = document.getElementById('productosInfo');
        productosInfo.innerHTML = '';

        // Busco la informacion del carrito 
        listaArticulos = JSON.parse(localStorage.getItem('carrito'));


        if (listaArticulos === null) {
            listaArticulos = [];

            //Aqui deberia mostrar un mensaje de que no hay nada en el carrito
            // y un boton para que busque


        } else {
            listaArticulos.forEach(element => {

                //Pinto lo que esta en el localStorage en el carrito
                productosInfo.innerHTML += `
                <input type="hidden" value="${element.ID}" name="product_id" >
                <input type="hidden" value="${element.precio}" name="precio_unitario" >
         
  `

            });
          

        } //Cierre del if

    } //Cierre de funcion

    document.addEventListener('DOMContentLoaded', PintarCarrito2);

</script>

@endsection
