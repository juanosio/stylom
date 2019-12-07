@extends("partials.web.layout")


@section('content')		
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image:  url({{ asset('assets/web/images/heading-pages-01.jpg') }}); ">
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
      <th scope="col"></th>
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
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Total del carrito
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						$39.00
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							There are no shipping methods available. Please double check your address, or contact us if you need any help.
						</p>

						

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
							<select class="selection-2" name="country">
								<option>Select a country...</option>
								<option>US</option>
								<option>UK</option>
								<option>Japan</option>
							</select>
						</div>

						<div class="size13 bo4 m-b-12">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="State /  country">
						</div>

						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
						</div>

						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Update Totals
							</button>
						</div>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						$39.00
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
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
	
	
}else{
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
total += element.precio;
});
console.log(total);

} //Cierre del if

 } //Cierre de funcion

document.addEventListener('DOMContentLoaded', PintarCarrito);

</script>

@endsection